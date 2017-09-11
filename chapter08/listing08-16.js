function result(a,b) {
   return a + b;
}
// outputs 12
alert(result(5,7));

function something(x,y) {
   // forgot the var and as a consequence, this line replaces the
   // function declaration with a primitive value
   result = x * y;
   return result;
}

// outputs 35
alert(something(5,7));
// this line will generate this console error: "result is not a function"
alert(result(5,7));