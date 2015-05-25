function submitfunclogin() {

    // variables 
    var checkemaillogin = document.forms["checkaccount"]["emailaddress"].value;
    var checkpass1login = document.forms["checkaccount"]["password"].value;
    
    // email checks
    if (checkemaillogin == null || checkemaillogin == "") {
        alert("Email must be filled out");
        return false;
    } 
    // password checks
    if (checkpass1login == null || checkpass1login == "") {
        alert("Password must be filled out");
        return false;
    } 
}