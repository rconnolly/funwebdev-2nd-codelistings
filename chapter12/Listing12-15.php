<form enctype='multipart/form-data' method='post' id='test'>
<input type="hidden" name="MAX_FILE_SIZE" id="max_file_size" value="10000" />
<input type='file' name='file1' id="file1" />
<input type='submit' />
</form>
<script>
<!-- Added the handler as described -->
document.getElementById("test").onsubmit = function(){
var file = document.getElementById('file1');
var max_size = document.getElementById("max_file_size").value;
if (file.files && file.files.length ==1){
   if (file.files[0].size > max_size) {
      alert("The file must be less than " + (max_size/1024) + "KB");
      e.preventDefault();
   }
}
}
</script>
<?php

foreach ($_FILES as $fileKey => $fileArray) {
	if ($fileArray["error"] != UPLOAD_ERR_OK) { // error
  	   echo "Error: " . $fileKey . " has error" . $fileArray["error"] . "<br>";
	}
	else { // no error
     	     echo $fileKey . "Uploaded successfully ";
	}
}
?>