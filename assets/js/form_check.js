/* FORM VALIDATION */

function validateForm() {
    var x = document.forms["myForm"]["firstname"].value;
    var y = document.forms["myForm"]["number"].value;
    var z = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    } else if (y == "") {
    	alert("You must leave us a contact number");
        return false;
    } else if (z == "") {
    	alert("We need an email address");
        return false;
    }
}