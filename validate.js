function submitfunc() {

	// variables 
    var checkfirst = document.forms["newaccount"]["firstname"].value;
    var checklast = document.forms["newaccount"]["lastname"].value;
    var checkemail = document.forms["newaccount"]["emailaddress"].value;
 	var checkphone = document.forms["newaccount"]["phonenum"].value;
	var checkpass1 = document.forms["newaccount"]["password"].value;
	var checkpass2 = document.forms["newaccount"]["reenterpassword"].value;
    
	//var emailendG = checkemail.search("@gmail.com");
	//var emailendY = checkemail.search("@yahoo.com.au");

    // first name checks
    if (checkfirst == null || checkfirst == "") {
        alert("First Name must be filled out");
        return false;
    } 
    // last name checks
    else if (checklast == null || checklast == "") {
    	alert("Last Name must be filled out");
    	return false;
    } 
    // email checks
    else if (checkemail == null || checkemail == "") {
    	alert("Email must be filled out");
    	return false;
    } /*else if (emailendG != "@gmail.com") {
    	alert("Not a valid Email address");
    	return false;
    } */
    // phone checks
    else if (checkphone == null || checkphone == "") {
    	alert("Phone number must be filled out");
    	return false;
    } 
    // password checks
    else if (checkpass1 == null || checkpass1 == "") {
    	alert("Password must be filled out");
    	return false;
    } else if (checkpass2 == null || checkpass2 == "") {
    	alert("Password Two must be filled out");
    	return false;
    } else if (checkpass1 != checkpass2) {
    	alert("Passwords do not match");
    	return false;
    } 
}