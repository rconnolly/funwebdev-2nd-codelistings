<form enctype='multipart/form-data' method='post'>
<input type="hidden" name="MAX_FILE_SIZE" value="10000" />
<input type='file' name='file1' />
<input type='submit' />
</form>

<?php

print_r($_FILES);  //<-- note if file upload prevented, nothing in FILES, and no error - it's just prevented.
foreach ($_FILES as $fileKey => $fileArray) {
	if ($fileArray["error"] != UPLOAD_ERR_OK) { // error
  	   echo "Error: " . $fileKey . " has error" . $fileArray["error"] . "<br>";
	}
	else { // no error
     	     echo $fileKey . "Uploaded successfully ";
	}
}
?>