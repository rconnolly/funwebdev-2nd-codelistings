// outputs 1855 and then 1420
console.log(years[0]);
console.log(years[2]);
// outputs Canada and then United States
console.log(countries[0]);
console.log(countries[5]);
// outputs Thu
console.log(month[0][3]);
// arrays are built-in objects and have a length property defined
// index will be set to 6
var index = countries.length;
// outputs United States again (remember array indexes start at 0)
console.log(countries[index-1]);
// iterating through an array
for (var i = 0; i < years.length; i += 1) {
   console.log(years[i]);
}