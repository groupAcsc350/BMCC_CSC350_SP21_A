<?php
session_start();

?>

<?php
if ($_SESSION["username"])
{
?>
<?php
    $con = mysqli_connect('localhost', 'root', 'root', 'laundry') or die('Unable To connect');
    $test = $_SESSION["username"];
    $slot = isset($_POST["slot"]) ? $_POST["slot"] : '';

    $result = mysqli_query($con, "SELECT username, slot FROM reservations WHERE username = '" . $test . "' and slot = '" . $slot . "'");

    if (!empty($result))
    {
        $delete_reservation = "DELETE FROM reservations WHERE username = '" . $test . "' and slot = '" . $slot . "'";
        // $delete_reservation = "DELETE FROM reservations WHERE username = '".$test."'";
        mysqli_query($con, $delete_reservation);
        echo "deleted."
    }

?>
