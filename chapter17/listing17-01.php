<?php
/*
  Specifies the functionality of any database adapter
*/
interface DatabaseAdapterInterface
{
  function setConnectionInfo($values=array());
  function closeConnection();
  function runQuery($sql, $parameters=array());
  function fetchField($sql, $parameters=array());
  function fetchRow($sql, $parameters=array());
  function fetchAsArray($sql, $parameters=array());
  function insert($tableName, $parameters=array());
  function getLastInsertId();
  function update($tableName, $updateParameters=array(),
		  $whereCondition='', $whereParameters=array());
  function delete($tableName, $whereCondition=null,
		  $whereParameters=array());
  function getNumRowsAffected();
  function beginTransaction();
  function commit();
  function rollBack();
}

?>
