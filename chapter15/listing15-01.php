// Testing a query string to see if it exists and is numeric

$id = $_GET['id'];
if (!empty($id) &&  is_numeric($id)  ) {
  // use the query string since it exists and is a numeric value
  // ...
}
