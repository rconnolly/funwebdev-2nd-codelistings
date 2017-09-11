<?php
/*
  Acts as an adapter for our database API so that all database API
  specific code will reside here in this class. In this example, we
  will use the PDO API.
*/
class DatabaseAdapterPDO implements DatabaseAdapterInterface
{
  private $pdo;
  private $lastStatement = null;
  public function  __construct($values) {
    $this->setConnectionInfo($values);
  }
  
  /*
    Creates a connection using the passed connection information
  */
  function setConnectionInfo($values=array()) {
    $connString = $values[0];
    $user = $values[1];
    $password = $values[2];
    $pdo = new PDO($connString,$user,$password); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); $this->pdo = $pdo;
  }
  
  /*
    Executes a SQL query and returns the PDO statement object
  */
  public function runQuery($sql, $parameters=array()) {
    // Ensure parameters are in an array
    if (!is_array($parameters)) {
      $parameters = array($parameters);
    }
    $this->lastStatement = null;
    if (count($parameters) > 0) {
      // Use a prepared statement if parameters
      $this->lastStatement = $this->pdo->prepare($sql);
      $executedOk = $this->lastStatement->execute($parameters);
      if (! $executedOk) {
	throw new PDOException;
      }
    } else {
      // Execute a normal query
      $this->lastStatement = $this->pdo->query($sql);
      if (!$this->lastStatement) {
	throw new PDOException;
      }
    }
    return $this->lastStatement;
  }
  // implementations of all the other methods defined in the interface
}
