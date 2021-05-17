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
      <form action="reserve.php" method="POST" onsubmit="return confirm('Are you sure you want to submit this reservation?');">
	  
	   <label for="time"> </label>
	   <?php
$con = mysqli_connect('localhost', 'root', 'root', 'laundry') or die('Unable To connect');

?>
<select  name="slot" id="slot">
  <optgroup label="<?php
$timestamp = strtotime('last Sunday');
$days = array();

for ($i = 0;$i < 1;$i++)
{
    $today_date = strftime(date("D d F"));
    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    $before_or_after_date = strftime(date("D d F", $timestamp));
    echo date("D", $timestamp) . " ";
    echo date("d", $timestamp) . " ";

    $start = "00:00";
    $end = "22:00";

    $tStart = strtotime($start);
    $tEnd = strtotime($end);
    $tNow = $tStart;

?> ">
<option disabled="disabled" selected="selected"  value="">CHOOSE A TIME BELOW</option>
    <?php
    $sql = mysqli_query($con, "SELECT slot FROM reservations");
    $reservations_in_db = array();
    while ($row = mysqli_fetch_array($sql))
    {
        $reservations_in_db[] = $row['slot'];

    }

    while ($tNow <= $tEnd)
    {
        $date_available = date("d F Y", $timestamp) . date(" h:i A", $tNow);

        if (!in_array($date_available, $reservations_in_db, true))
        {
?>

   <b>
   
   <option  value="<?php echo $date_available; ?>"> <?php echo $date_available; ?> </b>
   
   
	
    <?php
        }
        $tNow = strtotime('+3 hours', $tNow);

        echo '<br/>';
    }

}
?>



</option>

  </optgroup>
  <optgroup label="<?php
for ($i = 1;$i < 2;$i++)
{

    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D", $timestamp) . " ";
    echo date("d", $timestamp) . " ";

    $start = "00:00";
    $end = "22:00";

    $tStart = strtotime($start);
    $tEnd = strtotime($end);
    $tNow = $tStart;
?> ">
   <?php
    $sql = mysqli_query($con, "SELECT slot FROM reservations");
    $reservations_in_db = array();
    while ($row = mysqli_fetch_array($sql))
    {
        $reservations_in_db[] = $row['slot'];

    }

    while ($tNow <= $tEnd)
    {
        $date_available = date("d F Y", $timestamp) . date(" h:i A", $tNow);

        if (!in_array($date_available, $reservations_in_db, true))
        {
?>

   <b>
   
   <option  value="<?php echo $date_available; ?>"> <?php echo $date_available; ?> </b>
   
   
	
    <?php
        }
        $tNow = strtotime('+3 hours', $tNow);

        echo '<br/>';
    }
}
?></option>
  </optgroup>
  
  <optgroup label="<?php
for ($i = 2;$i < 3;$i++)
{

    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D", $timestamp) . " ";
    echo date("d", $timestamp) . " ";

    $start = "00:00";
    $end = "22:00";

    $tStart = strtotime($start);
    $tEnd = strtotime($end);
    $tNow = $tStart;
?> ">
      <?php
    $sql = mysqli_query($con, "SELECT slot FROM reservations");
    $reservations_in_db = array();
    while ($row = mysqli_fetch_array($sql))
    {
        $reservations_in_db[] = $row['slot'];

    }

    while ($tNow <= $tEnd)
    {
        $date_available = date("d F Y", $timestamp) . date(" h:i A", $tNow);

        if (!in_array($date_available, $reservations_in_db, true))
        {
?>

   <b>
   
   <option  value="<?php echo $date_available; ?>"> <?php echo $date_available; ?> </b>
   
   
	
    <?php
        }
        $tNow = strtotime('+3 hours', $tNow);

        echo '<br/>';
    }
}
?></option>
  </optgroup>
  
  <optgroup label="<?php
for ($i = 3;$i < 4;$i++)
{

    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D", $timestamp) . " ";
    echo date("d", $timestamp) . " ";
    $date = date("D F Y", $timestamp);

    $start = "00:00";
    $end = "22:00";

    $tStart = strtotime($start);
    $tEnd = strtotime($end);
    $tNow = $tStart;
?> ">
      <?php
    $sql = mysqli_query($con, "SELECT slot FROM reservations");
    $reservations_in_db = array();
    while ($row = mysqli_fetch_array($sql))
    {
        $reservations_in_db[] = $row['slot'];

    }

    while ($tNow <= $tEnd)
    {
        $date_available = date("d F Y", $timestamp) . date(" h:i A", $tNow);

        if (!in_array($date_available, $reservations_in_db, true))
        {
?>

   <b>
   
   <option  value="<?php echo $date_available; ?>"> <?php echo $date_available; ?> </b>
   
   
	
    <?php
        }
        $tNow = strtotime('+3 hours', $tNow);

        echo '<br/>';
    }
}
?></option>
  </optgroup>
  <optgroup label="<?php
for ($i = 4;$i < 5;$i++)
{

    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D", $timestamp) . " ";
    echo date("d", $timestamp) . " ";
    $date = date("D F Y", $timestamp);

    $start = "00:00";
    $end = "22:00";

    $tStart = strtotime($start);
    $tEnd = strtotime($end);
    $tNow = $tStart;
?> ">
      <?php
    $sql = mysqli_query($con, "SELECT slot FROM reservations");
    $reservations_in_db = array();
    while ($row = mysqli_fetch_array($sql))
    {
        $reservations_in_db[] = $row['slot'];

    }

    while ($tNow <= $tEnd)
    {
        $date_available = date("d F Y", $timestamp) . date(" h:i A", $tNow);

        if (!in_array($date_available, $reservations_in_db, true))
        {
?>

   <b>
   
   <option  value="<?php echo $date_available; ?>"> <?php echo $date_available; ?> </b>
   
   
	
    <?php
        }
        $tNow = strtotime('+3 hours', $tNow);

        echo '<br/>';
    }
}
?></option>
  </optgroup>
  <optgroup label="<?php
for ($i = 5;$i < 6;$i++)
{

    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    echo date("D", $timestamp) . " ";
    echo date("d", $timestamp) . " ";
    $date = date("D F Y", $timestamp);

    $start = "00:00";
    $end = "22:00";

    $tStart = strtotime($start);
    $tEnd = strtotime($end);
    $tNow = $tStart;
?> ">
      <?php
    $sql = mysqli_query($con, "SELECT slot FROM reservations");
    $reservations_in_db = array();
    while ($row = mysqli_fetch_array($sql))
    {
        $reservations_in_db[] = $row['slot'];

    }

    while ($tNow <= $tEnd)
    {
        $date_available = date("d F Y", $timestamp) . date(" h:i A", $tNow);

        if (!in_array($date_available, $reservations_in_db, true))
        {
?>

   <b>
   
   <option  value="<?php echo $date_available; ?>"> <?php echo $date_available; ?> </b>
   
   
	
    <?php
        }
        $tNow = strtotime('+3 hours', $tNow);

        echo '<br/>';
    }
}
?></option>
  </optgroup>
  <optgroup label="<?php
for ($i = 6;$i < 7;$i++)
{
    $today_date = date("D d F");
    $days[] = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    $before_or_after_date = date("D d F", $timestamp);
    echo date("D", $timestamp) . " ";
    echo date("d", $timestamp) . " ";

    $start = "00:00";
    $end = "22:00";

    $tStart = strtotime($start);
    $tEnd = strtotime($end);
    $tNow = $tStart;
?> ">
      <?php
    $sql = mysqli_query($con, "SELECT slot FROM reservations");
    $reservations_in_db = array();
    while ($row = mysqli_fetch_array($sql))
    {
        $reservations_in_db[] = $row['slot'];

    }

    while ($tNow <= $tEnd)
    {
        $date_available = date("d F Y", $timestamp) . date(" h:i A", $tNow);

        if (!in_array($date_available, $reservations_in_db, true))
        {
?>

   <b>
   
   <option  value="<?php echo $date_available; ?>"> <?php echo $date_available; ?> </b>
   
   
	
    <?php
        }
        $tNow = strtotime('+3 hours', $tNow);

        echo '<br/>';
    }
}
?></option>
  </optgroup>
</select> 
  	

	<div>
    <button  class="button" type="submit" id="submit" name="submit"   value="Submit">Submit</button>
  </div>
         
   <script src="script.js"></script>
<br></br>
 
   <p style="background:white; font-size: 15px; color: black;"> Need help? <a style="text-decoration: none; font-size: 15px; color: white; background: black; border-radius: 10px;" target="_blank" href="contact.php">Contact us.</a> <br></br> <a style="text-decoration: none; color: white; font-size: 15px; background: grey; border-radius: 10px;" href="logout.php">Logout</a></p>
   
    </div>
	

  </body>
</html>
