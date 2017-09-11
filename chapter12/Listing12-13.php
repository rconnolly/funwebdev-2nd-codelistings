<form enctype='multipart/form-data' method='post'>
<input type='file' name='file1' id='file1' />
<input type='submit' />
</form>

<?php

foreach ($_FILES as $fileKey => $fileArray) {
	if ($fileArray["error"] != UPLOAD_ERR_OK) { // error
	   echo "Error: " . $fileKey . " has error" . $fileArray["error"]. "<br>";
	}
	else { // no error
	   echo $fileKey . "Uploaded successfully ";
	}
}

?>