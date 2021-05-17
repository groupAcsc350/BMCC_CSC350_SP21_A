
function myFunction() {
  var fname = document.forms["contact"]["fullName"].value;
  var mail = document.forms["contact"]["email"].value;
  var subj = document.forms["contact"]["subject"].value;
  if (fname == "" || fname == null || mail == "" || mail == null ||subj == "" || subj == null ) {
    alert("All fields must be filled out.");
    return false;
  }
  else	 
alert("Thanks for the message! We will get back to you in the next 48 hours. If urgent call (000) 000-0000.");
return true;
}

function validateLogin()
    {
    var username = document.forms["username"].value;
    var password = document.forms["password"].value;
 
    if (username == null || username == "")
    {
      alert("Username can't be blank");
      return false;
    }
    else if (password == null || password == "")
    {
      alert("Password can't be blank");
      return false;
    }
	}


