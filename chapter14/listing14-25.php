<?php

// defines a constant for query string parameter name
define('SEARCHBOX', 'txtSearch');

// define a function to return the value of the search parameter
function getSearchFor()
{
  // this function is missing something . . . do you know what it is?
  return $_GET[SEARCHBOX];
}

function getDB()
{
  //...
  $pdo = new PDO($connString,$user,$pass); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); return $pdo;
}
function getResults()
{
  try {
    $db = getDB();
    // add SQL wildcard characters to search term

    $searchFor = '%' . getSearchFor() . '%';
    $sql = "SELECT * FROM Books WHERE Title Like ?";
    $statement = $db->prepare($sql);
    $statement->bindValue(1, $searchFor);
    $statement->execute();
    return $statement;
  }
  catch (PDOException $e) {
    die($e->getMessage());
  }
}
?>
<html>
<body>
<form method="get" action="search-results.php" >
  <fieldset>
  <legend>Search Title</legend>
  <input type="search"
         name="<?php  echo SEARCHBOX;  ?>"
         placeholder="Enter search string"
         value="<?php  echo getSearchFor();  ?>"  />
   <input type="submit" />
   </fieldset>
</form>
<table border="1">
<?php
if (! empty($_GET[SEARCHBOX]) && $result = getResults() ) {
  while ($row = $result->fetch()) {
?>
  <tr>
      <td><?php echo $row['ISBN10']; ?></td>
      <td><?php echo $row['Title']; ?></td>
      <td><?php echo $row['CopyrightYear']; ?></td>
  </tr>
<?php
  }
} ?>
</table>
</body>
</html>
