function generateRandomSalt(){
  return base64_encode(mcrypt_create_iv(12), MCRYPT_DEV_URANDOM));
}
// Insert the user with the password salt generated, stored, and
// password hashed
function insertUser($username,$password){
  $pdo = new PDO(DBCONN_STRING,DBUSERNAME,DBPASS);
  $salt = generateRandomSalt();
  $sql = "INSERT INTO Users(Username,Password,Salt)
           VALUES(?,?,?)";
  $smt = $pdo->prepare($sql);
  $smt->execute(array($username,md5($password.$salt),$salt));
}
