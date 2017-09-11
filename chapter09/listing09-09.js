document.getElementById("key").addEventListener("keydown", function (e) {
   var keyPressed=e.keyCode;
   // get the raw key code
   var character=String.fromCharCode(keyPressed);
   // convert to string
   alert("Key " + character + " was pressed");
});