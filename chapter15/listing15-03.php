// Example of try . . . catch block

// Exception throwing function (for illustration purposes)
function throwException($message = null,$code = null) {
  throw new Exception($message,$code);
}

try {
  // PHP code here
  $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME)
    or throwException("error");
  // ...
}
catch (Exception $e) {
  echo ' Caught exception: ' . $e->getMessage();
  echo ' On Line : ' . $e->getLine();
  echo ' Stack Trace: '; print_r($e->getTrace());
} finally {
  // PHP code here that will be executed after try or after catch
}
