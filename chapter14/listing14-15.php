class Book {
  public $id;
  public $title;
  public $year;
  public $description;
  
  function __construct($record)
  {
    $this->id = $record['ID'];
    $this->title = $record['Title'];
    $this->year = $record['CopyrightYear'];
    $this->description = $record['Description'];
  }
}
// ...
// in some other page or class
$sql = "SELECT * FROM Books";
$result = $pdo->query($sql);

// fetch a record normally
while ( $row = $result->fetch() ) {
    $b = new Book($row);
    echo 'ID: ' .  $b->id  . '<br/>';
    echo 'Title: ' .  $b->title  . '<br/>';
    echo 'Year: ' .  $b->year  . '<br/>';
    echo 'Description: ' .  $b->description  . '<br/>';
    echo "<hr>";
}
