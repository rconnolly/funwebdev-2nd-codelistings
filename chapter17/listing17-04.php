abstract class TableDataGateway
{
  // ...
  // The select statement for the table
  abstract protected function getSelectStatement();
  
  // The name of the primary keys in the database
  abstract protected function getPrimaryKeyName();
  
  /*
    Returns all the records in the table
  */
  public function findAll()
  {
    $sql = $this->getSelectStatement();
    $results = $this->dbAdapter->fetchAsArray($sql);
    return $results;
  }
  /*
    Returns a single record indicated by the specified key field
  */
  public function findById($id)
  {
    $sql = $this->getSelectStatement();
    $sql .= ' WHERE ' . $this->getPrimaryKeyName() . '=:id';
    $result = $this->dbAdapter->fetchRow($sql, Array(':id' => $id));
    return $result;
  }
}