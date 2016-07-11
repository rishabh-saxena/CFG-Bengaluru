function val()
{
    var p = document.forms["reg"]["reg_fname"].value;
    if (p == null || p == "") {
        alert("First name must be filled out");
        return false;
    }
	var q = document.forms["reg"]["reg_lname"].value;
    if (q == null || q == "") {
        alert("Last name must be filled out");
        return false;
    }
	var r = document.forms["reg"]["reg_phno"].value;
    if (r == null || r == "") {
        alert("First name must be filled out");
        return false;
    }
	if(r.length!=10)
	{
		alert("Invalid format of phone number");
		return false;
	}
	var x = document.forms["reg"]["reg_uname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    if(x.length<6)   {
        alert("Name must atleast be 6 character long");
    } 
    var y = document.forms["reg"]["reg_email"].value;
        var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (y == null || y == "") {
        alert("E-mail must be filled out");
        return false;
    }    
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    var z = document.forms["reg"]["reg_pass"].value;
    if (z == null || z == "") {
        alert("Password must be filled out");
        return false;
    }  
    if(z.length<8)   {
        alert("Password must atleast be 8 character long");
        return false;
    } 
    var a = document.forms["reg"]["reg_cpass"].value;
    if (a == null || a == "") {
        alert("Confirm password field must be filled out");
        return false;
    }
	
    if( a !== z) {
        alert("The values enterd in password and confirm password field don't match");
        return false;
    }


        




