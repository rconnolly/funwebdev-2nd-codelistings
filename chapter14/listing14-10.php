try {
   $connString = "mysql:host=localhost;dbname=bookcrm";
   $user = DBUSER;
   $pass = DBPASS;

   $pdo = new PDO($connString,$user,$pass);
   // useful during initial development and debugging
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //...
}
