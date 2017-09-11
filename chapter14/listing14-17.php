$sql = "UPDATE Categories SET CategoryName='Web' WHERE
CategoryName='Business'";
$count = $pdo->exec($sql);
echo "<p>Updated " . $count . " rows</p>";
