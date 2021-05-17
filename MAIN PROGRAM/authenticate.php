<?php
session_start();

if (count($_POST) > 0)
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_username = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'laundry';

    $con = mysqli_connect($DATABASE_HOST, $DATABASE_username, $DATABASE_PASS, $DATABASE_NAME) or die('Unable To connect');

    $username = isset($_POST["username"]) ? $_POST["username"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';

    $sql = "select username, password from users where username = '" . $username . "'";

    $result = mysqli_query($con, $sql) or die(mysqli_error($con));

    $row = mysqli_fetch_array($result);

    if ($row["username"] == $username && $row["password"] == $password)
    {
        $_SESSION["username"] = $row['username'];
        $_SESSION["password"] = $row['password'];
        header("Location:reservation.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Wrong username or password. If you are having problems with your login credentials please contact us (000) 000-0000 or try again.");window.location=\'login.php\';</script>';

    }
}

?>
