// depending on the state of the region radio buttons
// change the options of the select list
var label = document.getElementById("payLabel");
var select = document.getElementById("payment");
select.disabled = true;
var radios = document.querySelectorAll("input[name=region]");
// listen to each radio button
for (var i=0; i < radios.length; i++) {
   // whenever a radio button changes, modify the select
   // list as well as the label beside it
   radios[i].addEventListener("change", function (e) {
      select.disabled = false;
      select.innerHTML = "";
      addOption(select, "Select Payment Type" , "0");
      var choice = e.target.value;
      if (choice == "United States") {
         // display the dollar symbol
         label.classList.remove("fa-euro");
         label.classList.add("fa-dollar");
         addOption(select, "American Express" , "1");
         addOption(select, "Mastercard" , "2");
         addOption(select, "Visa" , "3");
      }
      else if (choice == "Europe") {
         // display the euro symbol
         label.classList.remove("fa-dollar");
         label.classList.add("fa-euro");
         addOption(select, "Bitcoin" , "4");
         addOption(select, "PayPal" , "5");
      }
   }
   );
}

function addOption(select, optionText, optionValue) {
   var opt = document.createElement('option');
   opt.appendChild( document.createTextNode(optionText) );
   opt.value = optionValue;
   select.appendChild(opt);
}