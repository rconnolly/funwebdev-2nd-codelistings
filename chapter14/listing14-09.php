try {
  $connString = "mysql:host=localhost;dbname=bookcrm";
  $user = DBUSER;
  $pass = DBPASS;

  $pdo = new PDO($connString,$user,$pass);
  //...
}
catch (PDOException $e) {
  die(  $e->getMessage()  );
}
