$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

// mysqli_connect_error returns string description of the last
// connect error
$error = mysqli_connect_error();
if ($error != null) {
   $output = "<p>Unable to connect to database<p>" . $error;
   // Outputs a message and terminates the current script
   exit($output);
}
