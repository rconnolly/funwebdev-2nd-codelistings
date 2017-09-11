// mysqli approach
$connection = mysqli_connect($host, $user, $pass, $database);
$result = mysqli_query($connection, "SELECT . . . FROM . . .");
//...
// release the memory used by the result set. This is necessary if // you are going to run another query on this connection mysqli_free_result($result);
//...
// close the database connection
mysqli_close($connection);
// PDO approach
$pdo = new PDO($connString,$user,$pass);
//...
// closes connection and frees the resources used by the PDO object
$pdo = null;
