// This function is going to get called every time the focus or blur events are
// triggered in one of our form’s input elements.
function setBackground(e) {
   if (e.type == "focus") {
      e.target.style.backgroundColor = "#FFE393";
   }
   else if (e.type == "blur") {
      e.target.style.backgroundColor = "white";
   }
}

// set up the event listeners only after the DOM is loaded
window.addEventListener("load", function() {
   var cssSelector = "input[type=text],input[type=password]";
   var fields = document.querySelectorAll(cssSelector);
   for (i=0; i<fields.length; i++) {
      fields[i].addEventListener("focus", setBackground);
      fields[i].addEventListener("blur", setBackground);
   }
});