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


