<form enctype='multipart/form-data' method='post'>
<input type='file' name='file1' />
<input type='submit' />
</form>

<?php

$validExt = array("jpg", "png");
$validMime = array("image/jpeg","image/png");
foreach($_FILES as $fileKey => $fileArray ){
  $extension = end(explode(".", $fileArray["name"]));
  if (in_array($fileArray["type"],$validMime) &&
    in_array($extension, $validExt)) {
    echo "all is well. Extension and mime types valid"; 
  }
  else {
    echo $fileKey." Has an invalid mime type or extension";
  }
}
?>