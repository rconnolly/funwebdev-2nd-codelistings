$connection = mysqli_connect($host, $user, $pass, $database);
// . . .
/* set autocommit to off. If autocommit is on, then mysql will commit (i.e., make the data change permanent) each command after it is executed */
mysqli_autocommit($connection, FALSE);
/* insert some values */
$result1 = mysqli_query($connection,
   "INSERT INTO Categories (CategoryName) VALUES ('Philosophy')");
$result2 = mysqli_query($connection,
   "INSERT INTO Categories (CategoryName) VALUES ('Art')");
if ($result1 && $result2) {
   /* commit transaction */
   mysqli_commit($connection);
}
else {
   /* rollback transaction */
   mysqli_rollback($connection);
}
