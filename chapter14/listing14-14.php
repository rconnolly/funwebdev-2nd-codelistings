$sql = "SELECT * FROM Books";
$result = $pdo->query($sql);

// fetch a record into an object of type Book
while ( $b = $result->fetchObject('Book') ) {
  // the property names match the field names from the table echo 'ID: ' . $b->ID . '<br/>';
  echo 'Title: ' . $b->Title . '<br/>';
  echo 'Year: ' . $b->CopyrightYear . '<br/>';
  echo 'Description: ' . $b->Description . '<br/>';
  echo "<hr>";
}
