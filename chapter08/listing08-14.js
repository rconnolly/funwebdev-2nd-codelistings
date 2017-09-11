var order ={
   salesDate : "May 5, 2016",
   product : {
      type: "laptop",
      price: 500.00,
      brand: "Acer",
      output: function () {
         return this.brand + '' + this.type + '$' + this.price;
      }
   },
   customer : {
      name: "Sue Smith",
      address: "123 Somewhere St",
      city: "Calgary",
      output: function () {
         return this.name + ', ' + this.address + ', ' + this.city;
      }
   }
};

alert(order.product.output());
alert(order.customer.output());