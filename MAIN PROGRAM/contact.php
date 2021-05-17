
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <title>Laundry Room Sign up</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

  
  <?php
$fullName = $email = $subject ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["fullName"])) {
    $fullNameErr = "Required"; 
	}
	else {
  $fname = test_input($_POST["fullName"]);
	}
	
	if (empty($_POST["email"])) {
    $emailErr = "Required"; 
	}
	else {
	$mail = test_input($_POST["email"]);
	}
	
	if (empty($_POST["subject"])) {
    $subject = ""; 
	}
	else {
  $sub = test_input($_POST["subject"]);
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    

    <div class="box">
      <h1> <img src="https://i.ibb.co/6WndSY1/Pin-Clipart-com-machines-clipart-739756.png" height="60px" width="50px"><br></br> Laundry Room Sign up </h1>
      <p> Need help? Feel free to contant management.</p>
  
  <form  name="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return myFunction()" method="post" required>
    <label for="fullName"></label>
    <input type="text" id="fullName" name="fullName" placeholder="Full name">

    <label for="email"></label>
    <input type="email" id="email" name="email" placeholder="Email"  >


    <label for="subject"><p style="background:white; color: black;">Subject</p></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px" ></textarea>

    <input type="submit" onclick="myFunction()" value="Submit"> 
	
  <script src="script.js"></script>
  </form>
    </div>
  </body>
</html>
