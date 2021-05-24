
<?php
session_start();

?>

<?php

if($_SESSION["username"]) {
?>
<?php
$con = mysqli_connect('localhost', 'root', 'root', 'laundry') or die('Unable To connect');
$username = $_SESSION["username"] ;
$slot = isset($_POST["slot"]) ? $_POST["slot"] : '';

$result = mysqli_query($con,"SELECT username, slot FROM reservations WHERE username = '".$username."'");

	if (!empty($result) ){
	$delete_reservation  = "DELETE FROM reservations WHERE username = '".$username."'" ;
	
	mysqli_query($con,$delete_reservation);
	echo '<script type="text/javascript">alert("Reservation cancelled. Feel free to make a new reservation for a different time.");window.location=\'reservation.php\';</script>';

}}

?>

