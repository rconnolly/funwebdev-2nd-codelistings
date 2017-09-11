var multi = document.getElementById("listbox");
// using the options technique is more work but supported everywhere
// it loops through each option and check if it is selected
for (var i=0; i < multi.options.length; i++) {
   if (multi.options[i].selected) {
      // this option was selected, do something with it ...
      alert(multi.options[i].textContent);
   }
}
// the selectedOptions technique is simpler ...
// it only loops through the selected options
for (var i=0; i < multi.selectedOptions.length; i++) {
   alert(multi.selectedOptions[i].textContent);
}