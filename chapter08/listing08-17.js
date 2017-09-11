// function constructor
function Customer(name,address,city) {
   this.name = name;
   this.address = address;
   this.city = city;
   this.output = function () {
      return this.name + " " + this.address + " " +
      this.city;
   };
}

var cust1 = new Customer("Sue", "123 Somewhere", "Calgary");
alert(cust1.output());

var cust2 = new Customer("Fred", "32 Nowhere St", "Seattle");
alert(cust2.output());