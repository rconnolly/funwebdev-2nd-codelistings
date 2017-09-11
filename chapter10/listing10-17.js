
//listing 15.19 Using the new FormData interface from the XHR2 Specification to post files asychronously

function uploadFile () {
    // get the file as a string
    var formData = new FormData($("#fileUpload")[0]);
    var xhr = new XMLHttpRequest();
    xhr.addEventListener("load", transferComplete, false);
    xhr.addEventListener("error", transferFailed, false);
    xhr.addEventListener("abort", transferCanceled, false);
    xhr.open('POST', 'upload.php', true);
    xhr.send(formData); // actually send the form data
    function transferComplete(evt) { // stylized upload complete
	$("#progress").css("width","100%");
	$("#progress").html("100%");
    }
    function transferFailed(evt) {
	alert("An error occurred while transferring the file.");
    }
    function transferCanceled(evt) {
	alert("The transfer has been canceled by the user.");
    }
}