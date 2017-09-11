/*
  Checks if there is any query string information passed in GET or POST
*/
function  isThereQueryStringInfo()  {
  if ( areEditingExisting() ) {
    return true;
  }
  if ( areSaving() ) {
    return true;
  }
  return false;
}
/*
  Checks if query string info tells us whether we are editing
  existing author
*/
function areEditingExisting() {
  if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['which'])) {
    return true;
  }
}
/*
  Checks if query string info tells us whether we are saving author info
*/
function  areSaving()  {
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_
						    POST['firstname']) &&
      isset($_POST['lastname']) ) {
    return true;
  }
}
/*
  Actually perform the database insert or update
*/
function  saveAuthor($pdo, $id, $first, $last, $institute)
{
  $GLOBALS['updateStatus'] = '';
  $author = new Author($id, $first, $last, $institute);
  
  // set up sql statement and page's message
  if ( $author->isNew() )
    {
      $sql = "INSERT INTO authors (FirstName,LastName,Institution)
                VALUES (:first,:last,:institute)";
      $GLOBALS['saveMessage'] = 'Added new ';
    }
  else {
    $sql = "UPDATE authors SET FirstName=:first,LastName=:last,
                Institution=:institute WHERE ID=:id";
    $GLOBALS['saveMessage'] = 'Edited existing ';
  }
  
  // setup the parameters for the query
  $statement = $pdo->prepare($sql);
  $statement->bindValue(':first', $first);
  $statement->bindValue(':last', $last);
  $statement->bindValue(':institute', $institute);
  if ( ! $author->isNew() ) $statement->bindValue(':id', $id);

  // execute the query
  $statement->execute();
  
  // retrieve auto generated id if this was an insert and update // author object
  if ( $author->isNew() ) {
    $author->id = $pdo->lastInsertId();
  }
  return $author;
}
/*
  Retrieve a populated author from the database
*/
function  retrieveAuthor($pdo, $id)
{
  $sql = "SELECT * FROM Authors WHERE ID=:id";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(':id', $id);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  return new Author($row['ID'], $row['FirstName'], $row['LastName'], $row['Institution']);
}
