document.getElementById("loginForm").addEventListener('submit', function(e) {
   var pass = document.getElementById("pw").value;
   if (pass=="") {
      alert ("enter a password");
      e.preventDefault();
   }
});