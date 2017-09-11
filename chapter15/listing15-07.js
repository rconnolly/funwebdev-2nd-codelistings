// A phone number validation script without regular expressions

var phone=document.getElementById("phone").value;
var parts = phone.split("."); // split on .
if (parts.length !=3){
    parts = phone.split("-"); // split on -
}
if (parts.length == 3) { 
    var valid=true; // use a flag to track validity
    for (var i=0; i < parts.length; i++) {
	//  check that each component is a number
	if (!isNumeric(parts[i])) {
	    alert( "you have a non-numeric component");
	    valid=false;
	} else { // depending on which component make sure it's in range
	    if (i<2) {
		if (parts[i]<100 || parts[i]>999) {
		    valid=false;
		}
	    }
	    else {
		if (parts[i]<1000 || parts[i]>9999) {
		    valid=false;
		}
	    }
	} // end if isNumeric
    } // end for loop
    if (valid) {
	alert(phone + "is a valid phone number");
    }
}
alert ("not a valid phone number");
