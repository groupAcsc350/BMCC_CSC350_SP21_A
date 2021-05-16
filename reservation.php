
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
      <p> You have succesfully logged in.</p></h1>
      <form action="reservation2.php" method="POST" onsubmit="return confirm('Are you sure you want to submit this reservation?');">
	  
	   <label for="time"> </label>
<select  name="slot" id="slot">
  <optgroup label="<?php
  $timestamp = strtotime('last Sunday');
$days = array();

for ($i = 0; $i < 1; $i++) {
	
    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D",$timestamp) . " ";
    echo date("d",$timestamp)." "; 
	$save = date("D",$timestamp);
	
   $start = "00:00";
   $end = "22:00";

   $tStart = strtotime($start);
   $tEnd = strtotime($end);
   $tNow = $tStart;
?> ">
<option disabled="disabled" selected="selected"  value="">CHOOSE A TIME BELOW</option>
    <?php 
while($tNow <= $tEnd){ ?>

   <b>
   <option value="<?php  echo $save . " " . date("h:i A",$tNow); ?>"> <?php echo $save . " ". date("h:i A",$tNow) ; ?> </b>
   

    <?php
  $tNow = strtotime('+3 hours',$tNow); 
}
	echo '<br/>';
}
?></option>

  </optgroup>
  <optgroup label="<?php


for ($i = 1; $i < 2; $i++) {
	
    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D",$timestamp) . " ";
    echo date("d",$timestamp)." "; 
	$save = date("D",$timestamp);
	
   $start = "00:00";
   $end = "22:00";

   $tStart = strtotime($start);
   $tEnd = strtotime($end);
   $tNow = $tStart;
?> ">
    <?php 
while($tNow <= $tEnd){ ?>

   <b> <option value="<?php  echo $save . " " . date("h:i A",$tNow); ?>"> <?php echo $save . " ". date("h:i A",$tNow) ; ?> </b>
   

    <?php
  $tNow = strtotime('+3 hours',$tNow); 
}
	echo '<br/>';
}
?></option>
  </optgroup>
  
  <optgroup label="<?php


for ($i = 2; $i < 3; $i++) {
	
    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D",$timestamp) . " ";
    echo date("d",$timestamp)." "; 
	$save = date("D",$timestamp);
	
   $start = "00:00";
   $end = "22:00";

   $tStart = strtotime($start);
   $tEnd = strtotime($end);
   $tNow = $tStart;
?> ">
    <?php 
while($tNow <= $tEnd){ ?>

   <b> <option value="<?php  echo $save . " " . date("h:i A",$tNow); ?>"> <?php echo $save . " ". date("h:i A",$tNow) ; ?>  </b>
   

    <?php
  $tNow = strtotime('+3 hours',$tNow); 
}
	echo '<br/>';
}
?></option>
  </optgroup>
  
  <optgroup label="<?php


for ($i = 3; $i < 4; $i++) {
	
    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D",$timestamp) . " ";
    echo date("d",$timestamp)." "; 
	$save = date("D",$timestamp);
	
   $start = "00:00";
   $end = "22:00";

   $tStart = strtotime($start);
   $tEnd = strtotime($end);
   $tNow = $tStart;
?> ">
    <?php 
while($tNow <= $tEnd){ ?>

   <b> <option value="<?php  echo $save . " " . date("h:i A",$tNow); ?>"> <?php echo $save . " ". date("h:i A",$tNow) ; ?>  </b>
   

    <?php
  $tNow = strtotime('+3 hours',$tNow); 
}
	echo '<br/>';
}
?></option>
  </optgroup>
  <optgroup label="<?php


for ($i = 4; $i < 5; $i++) {
	
    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D",$timestamp) . " ";
    echo date("d",$timestamp)." "; 
	$save = date("D",$timestamp);
	
   $start = "00:00";
   $end = "22:00";

   $tStart = strtotime($start);
   $tEnd = strtotime($end);
   $tNow = $tStart;
?> ">
    <?php 
while($tNow <= $tEnd){ ?>

   <b><option value="<?php  echo $save . " " . date("h:i A",$tNow); ?>"> <?php echo $save . " ". date("h:i A",$tNow) ; ?>  </b>
   

    <?php
  $tNow = strtotime('+3 hours',$tNow); 
}
	echo '<br/>';
}
?></option>
  </optgroup>
  <optgroup label="<?php


for ($i = 5; $i < 6; $i++) {
	
    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D",$timestamp) . " ";
    echo date("d",$timestamp)." "; 
	$save = date("D",$timestamp);
	
   $start = "00:00";
   $end = "22:00";

   $tStart = strtotime($start);
   $tEnd = strtotime($end);
   $tNow = $tStart;
?> ">
    <?php 
while($tNow <= $tEnd){ ?>

   <b><option value="<?php  echo $save . " " . date("h:i A",$tNow); ?>"> <?php echo $save . " ". date("h:i A",$tNow) ; ?>  </b>
   

    <?php
  $tNow = strtotime('+3 hours',$tNow); 
}
	echo '<br/>';
}
?></option>
  </optgroup>
  <optgroup label="<?php


for ($i = 6; $i < 7; $i++) {
	
    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D",$timestamp) . " ";
    echo date("d",$timestamp)." "; 
	$save = date("D",$timestamp);
	
   $start = "00:00";
   $end = "22:00";

   $tStart = strtotime($start);
   $tEnd = strtotime($end);
   $tNow = $tStart;
?> ">
    <?php 
while($tNow <= $tEnd){ ?>

   <b> <option value="<?php  echo $save . " " . date("h:i A",$tNow); ?>"> <?php echo $save . " ". date("h:i A",$tNow) ; ?> </b>
   

    <?php
  $tNow = strtotime('+3 hours',$tNow); 
}
	echo '<br/>';
}
?></option>
  </optgroup>
</select> 
  	

	<div>
    <button  class="button" type="submit" id="submit" name="submit"   value="Submit">Submit</button>
  </div>
         
   <script src="script.js"></script>
<br></br>
 
   <p style="background:white; color: black;"> Need help? <a style="text-decoration: none; color: white; background: black; border-radius: 10px;" target="_blank" href="contact.php">Contact us.</p></a>
    </div>
	

  </body>
</html>
