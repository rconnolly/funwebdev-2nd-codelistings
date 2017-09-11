<form enctype='multipart/form-data' method='post'>
<input type='file' name='file1' />
<input type='submit' />
</form>

<?php

//print_r($_FILES);
$fileToMove = $_FILES['file1']['tmp_name'];
$destination = "./upload/" . $_FILES["file1"]["name"];
if (move_uploaded_file($fileToMove,$destination)) {
  echo "The file was uploaded and moved successfully!";
}
else {
  echo "there was a problem moving the file";
}


?>