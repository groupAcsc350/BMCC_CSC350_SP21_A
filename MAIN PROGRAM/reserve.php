<?php
session_start();

?>
<html>
<head>
<title>RESERVATION PAGE</title>
</head>
<body>

<?php
if ($_SESSION["username"])
{
?>


<?php

    $con = mysqli_connect('localhost', 'root', 'root', 'laundry') or die('Unable To connect');
    $test = $_SESSION["username"];


    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $slot = isset($_POST["slot"]) ? $_POST["slot"] : '';

        // $result = mysqli_query($con,"SELECT username FROM reservations WHERE username = '".$test."'");
        $result2 = mysqli_query($con, "SELECT slot FROM reservations WHERE username =  '" . $test . "'");

        $row = mysqli_fetch_assoc($result2);
        // $selected_slot = "You already have a reservation: " . $row['slot'] . " Would you like to cancel this reservation? Click 'OK' to cancel or 'Cancel' to keep your reservation.";

        if (mysqli_num_rows($result2) == 0)
        {
            $sql = "INSERT INTO reservations (username, slot) VALUES ('" . $test . "', '" . $slot . "')";

        }
        else
        {
			        $selected_slot = "You already have a reservation: " . $row['slot'] . " Would you like to cancel this reservation? Click 'OK' to cancel or 'Cancel' to keep your reservation.";

            echo '<script type="text/javascript">confirm( "' . $selected_slot . '");window.location=\'cancelreservation.php\';</script>';

        }

        if (mysqli_query($con, $sql))
        {
            echo '<script type="text/javascript">alert("Your reservation is confirmed! ");window.location=\'reservation.php\';</script>';

        }
        else
        {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        } ?>
<?php
    }
    else echo "<h1>Please login first .</h1>";
}

?>


	
</body>
</html>
