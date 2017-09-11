var div = document.querySelector('div#example');
div.addEventListener('click', function(e) {
// find out where the user clicked
var x = e.clientX;
var y = e.clientY;
// output the information for debugging purposes
console.log(e.type + ' event triggered by ' + e.target);
console.log(' at location ' + x + ' ' + y);
// ...
});