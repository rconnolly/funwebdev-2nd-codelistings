// retrieve parameter value from query string
$id = $_GET['id'];
// construct parameterized query – notice the ? parameter
$sql = "SELECT Title, CopyrightYear FROM Books WHERE ID=?";
// create a prepared statement
if ($statement = mysqli_prepare($connection, $sql)) {
  // bind parameters s - string, b - blob, i - int, etc
  mysqli_stmt_bindm($statement, 'i', $id);
  // execute query
  mysqli_stmt_execute($statement);
  //...
}
