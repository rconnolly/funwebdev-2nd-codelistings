//Insert the user with the password being hashed by MD5 first.
function insertUser($username,$password){
  $pdo = new PDO(DBCONN_STRING,DBUSERNAME,DBPASS);
  $sql = "INSERT INTO  Users(Username,Password)
         VALUES(?,?)";
  $smt = $pdo->prepare($sql);
  $smt->execute(array($username,md5($password))); //execute the query
}

//Check if the credentials match a user in the system with MD5 hash
function validateUser($username,$password){
  $pdo = new PDO(DBCONN_STRING,DBUSERNAME,DBPASS);
  $sql = "SELECT  UserID FROM Users WHERE  Username=? AND
        Password=?";
  $smt = $pdo->prepare($sql);
  $smt->execute(array($username,md5($password))); //execute the query
  if($smt->rowCount()){
    return true; //record found, return true.
  }
  return false; //record not found matching credentials, return false
}
