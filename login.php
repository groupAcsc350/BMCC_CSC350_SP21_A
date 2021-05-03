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
    

    <div class="box2">
      <h1> <img src="https://i.ibb.co/6WndSY1/Pin-Clipart-com-machines-clipart-739756.png" height="60px" width="50px"><br></br> Laundry Room Sign up </h1>
      <p> Please enter your apartment number and password assigned</p>
      <h2>Sign in</h2>
      <form  name="login" action="authenticate.php" onsubmit="return validateLogin();" method="post">
     <label for="username"><br></br></label>
    <input class="username" type="ext" placeholder="Apartment number" name="username" id="username" required="required">

    <label for="password"><br></br></label>
    <input class="password" type="password" placeholder="Password" name="password" id="password" required="required">

    <input  class="button"   type="submit" value="Login"></a>
	<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
	
  
  </div></div></form>
    </div>
  </body>
</html>


