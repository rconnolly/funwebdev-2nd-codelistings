function Die(col) {
   this.color=col;
   this.faces=[1,2,3,4,5,6];
   this.randomRoll = function() {
      var randNum = Math.floor((Math.random() * this.faces.length) + 1);
      return faces[randNum-1];
   };
}

// now create a whole bunch of Die objects and start rolling 'em!
var x1 = new Die("red");
alert(x1.randomRoll());
var x2 = new Die("green");
alert(x2.randomRoll());
// ...
var x100 = new Die("blue");