<form enctype='multipart/form-data' method='post'>
<input type='file' name='file1' />
<input type='submit' />
</form>

<?php

//NOTE: If php max_file_upload is too small, files will not upload and a warning will be genrerated

$max_file_size = 1000000;
//print_r($_FILES);
foreach($_FILES as $fileKey => $fileArray) {
	if ($fileArray["size"] > $max_file_size) {
		echo "Error: " . $fileKey . " is too big";
	}
	printf("%s is %.2f KB", $fileKey, $fileArray["size"]/1024);
}

?>