$sql = "SELECT * FROM Categories ORDER BY CategoryName";

// run the query
$result = $pdo->query($sql);

// fetch a record from result set into an associative array
while ($row = $result->fetch()) {
// the keys match the field names from the table
  echo $row['ID'] . " - " . $row['CategoryName'];
  echo "<br/>";
}
