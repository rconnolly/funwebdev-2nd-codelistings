function calculateTotal(price,quantity) {
   var subtotal = price * quantity;
   return subtotal + calculateTax(subtotal);
   
   // this function is nested
   function calculateTax(subtotal) {
      var taxRate = 0.05;
      var tax = subtotal * taxRate;
      return tax;
   }
}