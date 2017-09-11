$pdo = new PDO($connString,$user,$pass);
// turn on exceptions so that exception is thrown if error occurs
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// . . .
try {
  // begin a transaction
  $pdo->beginTransaction();
  // a set of queries: if one fails, an exception will be thrown
  $pdo->query("INSERT INTO Categories (CategoryName) VALUES ('Philosophy')");
  $pdo->query("INSERT INTO Categories (CategoryName) VALUES ('Art')");
  // if we arrive here, it means that no exception was thrown
  // which means no query has failed, so we can commit the
  // transaction
  $pdo->commit();
} catch (Exception $e) {
  // we must rollback the transaction since an error occurred
  // with insert
  $pdo->rollback();
}
