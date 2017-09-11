var element = document.getElementById('example');
// now we are using an anonymous function as the handler
element.addEventListener('click', function() {
   var d = new Date();
   alert("You clicked this on "+ d.toString());
});