
<?php
include "login.php";
/// WITH  if(isset($_POST['submit'])) {  I CAN INSERT "BOOKED" AND TIME TO THE DATABASE, BUT CANNOT INSERT USERNAME FOR SOME REASON, BUT IT ALLOW ME TO INSERT ONLY WHEN I CLICK ON SUBMIT
 // if(isset($_POST['submit'])) { 
// WITH if ($_SERVER["REQUEST_METHOD"] == "POST" ) I CAN INSERT THE USERNAME AND "BOOKED" BUT CANNOT INSERT TIME. BESIDES THAT, THE DATA IS INSERT INTO THE DATABASE RIGHT AFTER WE CLICK ON LOGIN, WHICH IS WRONG. WE SHOULD PICK A TIME, CLICK ON SUBMIT AND THEN INSERT ON DATABASE
 if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

{
	 $time = isset($_POST["time"]) ? $_POST["time"] : '';
	 $uname = isset($_POST["username"]) ? $_POST["username"] : '';
// if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
	if($row["username"]==$user && $row["password"]==$pass){
$sql = "INSERT INTO reservations (username,day, slot) VALUES ('".$uname."','BOOKED', '".$time."')";
if(mysqli_query($con, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}}}
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <title>laundry Room Sign up</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>


    <div class="box2">
      <h1> <img src="https://i.ibb.co/6WndSY1/Pin-Clipart-com-machines-clipart-739756.png" height="60px" width="50px"><br></br> Laundry Room Sign up </h1>
      <p> Choose a time slot available</p></h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return confirm('Are you sure you want to submit this reservation?');">
         <div class="dropdown">
  <button class="dropbtn"><p id="mon" name="mond"></p></button>
  <div class="dropdown-content">
  <input class="linkss" type="radio" id="12AM"  name="time" value="12AM" checked>
    <label for="12AM">12AM</label><br></br>
	<input class="linkss" type="radio" id="3AM"  name="time" value="3AM">
    <label for="3AM">3AM</label><br></br>
	<input class="linkss" type="radio" id="6AM"  name="time" value="6AM">
    <label for="6AM">6AM</label><br></br>
	<input class="linkss" type="radio" id="9AM"  name="time" value="9AM">
    <label for="9AM">9AM</label><br></br>
	<input class="linkss" type="radio" id="12PM"  name="time" value="12PM">
    <label for="12PM">12PM</label><br></br>
	<input class="linkss" type="radio" id="6PM"  name="time" value="6PM">
    <label for="6PM">6PM</label><br></br>
	<input class="linkss" type="radio" id="9PM"  name="time" value="9PM">
    <label for="9PM">9PM</label><br></br>
	<div>
    <button type="submit" id="submit" name="submit" value="Submit">Submit</button>
  </div>
  
  </div></div>
  <div class="dropdown">
  <button class="dropbtn"><p id="tue"></p></button>
  <div class="dropdown-content">
    <a class="linkss" href="#">12AM</a>
    <a class="linkss" href="#">3AM</a>
    <a class="linkss" href="#">6AM</a>
    <a class="linkss" href="#">9AM</a>
    <a class="linkss" href="#">12PM</a>
    <a class="linkss" href="#">3PM</a>
    <a class="linkss" href="#">6PM</a>
    <a class="linkss" href="#">9PM</a>
  </div></div><div class="dropdown">
  <button class="dropbtn"><p id="wed"></p></button>
  <div class="dropdown-content">
    <a class="linkss" href="#">12AM</a>
    <a class="linkss" href="#">3AM</a>
    <a class="linkss" href="#">6AM</a>
    <a class="linkss" href="#">9AM</a>
    <a class="linkss" href="#">12PM</a>
    <a class="linkss" href="#">3PM</a>
    <a class="linkss" href="#">6PM</a>
    <a class="linkss" href="#">9PM</a>
  </div></div><div class="dropdown">
  <button class="dropbtn"><p id="thurs"></p></button>
  <div class="dropdown-content">
    <a class="linkss" href="#">12AM</a>
    <a class="linkss" href="#">3AM</a>
    <a class="linkss" href="#">6AM</a>
    <a class="linkss" href="#">9AM</a>
    <a class="linkss" href="#">12PM</a>
    <a class="linkss" href="#">3PM</a>
    <a class="linkss" href="#">6PM</a>
    <a class="linkss" href="#">9PM</a>
  </div></div><div class="dropdown">
  <button class="dropbtn"><p id="fri"></p></button>
  <div class="dropdown-content">
    <a class="linkss" href="#">12AM</a>
    <a class="linkss" href="#">3AM</a>
    <a class="linkss" href="#">6AM</a>
    <a class="linkss" href="#">9AM</a>
    <a class="linkss" href="#">12PM</a>
    <a class="linkss" href="#">3PM</a>
    <a class="linkss" href="#">6PM</a>
    <a class="linkss" href="#">9PM</a>
  </div></div><div class="dropdown">
  <button class="dropbtn"><p id="sat"></p></button>
  <div class="dropdown-content">
    <a class="linkss" href="#">12AM</a>
    <a class="linkss" href="#">3AM</a>
    <a class="linkss" href="#">6AM</a>
    <a class="linkss" href="#">9AM</a>
    <a class="linkss" href="#">12PM</a>
    <a class="linkss" href="#">3PM</a>
    <a class="linkss" href="#">6PM</a>
    <a class="linkss" href="#">9PM</a>
  </div></div><div class="dropdown">
  <button class="dropbtn"><p id="sun"></p></button>
  <div class="dropdown-content">
    <a class="linkss" href="#">12AM</a>
    <a class="linkss" href="#">3AM</a>
    <a class="linkss" href="#">6AM</a>
    <a class="linkss" href="#">9AM</a>
    <a class="linkss" href="#">12PM</a>
    <a class="linkss" href="#">3PM</a>
    <a class="linkss" href="#">6PM</a>
    <a class="linkss" href="#">9PM</a>
  </div>
</div> 
      
   <script src="script.js"></script>

   <p style="background:grey" >Dark grey means available slot. </p> <p style="background:lightgrey;  color:black">Light grey means unavailable slot.</p>
   <p style="background:white; color: black;"> Need help? <a style="text-decoration: none; color: white; background: black; border-radius: 10px;" target="_blank" href="contact.php">Contact us.</p></a>
    </div>
	

  </body>
</html>
