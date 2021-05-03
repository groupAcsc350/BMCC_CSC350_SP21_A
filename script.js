function getRelativeDayInWeek(d,dy) {
  d = new Date(d);
  var day = d.getDay(),
      diff = d.getDate() - day + (day == 0 ? -6:dy); // adjust when day is sunday
  return new Date(d.setDate(diff));
}

var monday = getRelativeDayInWeek(new Date(),1);
var tuesday = getRelativeDayInWeek(new Date(),2);
var wednesday = getRelativeDayInWeek(new Date(),3);
var thursday = getRelativeDayInWeek(new Date(),4);
var friday = getRelativeDayInWeek(new Date(),5);
var saturday = getRelativeDayInWeek(new Date(),6);
var sunday = getRelativeDayInWeek(new Date(),7);


document.getElementById("mon").innerHTML = monday.toDateString() 
document.getElementById("tue").innerHTML = tuesday.toDateString() 
document.getElementById("wed").innerHTML = wednesday.toDateString() 
document.getElementById("thurs").innerHTML = thursday.toDateString() 
document.getElementById("fri").innerHTML = friday.toDateString() 
document.getElementById("sat").innerHTML = saturday.toDateString()  
document.getElementById("sun").innerHTML = sunday.toDateString()


function myFunction() {
  var x = document.forms["contact"]["fullName"].value;
  var y = document.forms["contact"]["email"].value;
  var z = document.forms["contact"]["subject"].value;
  if (x == "" || x == null || y == "" || y == null ||z == "" || z == null ) {
    alert("All fields must be filled out.");
    return false;
  }
  else	 
alert("Thanks for the message! We will get back to you in the next 48 hours. If urgent call (000) 000-0000.");
return true;
}
