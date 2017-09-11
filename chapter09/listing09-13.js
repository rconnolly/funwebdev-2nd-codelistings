document.getElementById("loginForm").addEventListener("submit", function(e) {
   var fieldValue = document.getElementById("username").value;
   if (fieldValue == null || fieldValue == "") {
      // the field was empty. Stop form submission
      e.preventDefault();
      // Now tell the user something went wrong
      alert("you must enter a username");
   }
});