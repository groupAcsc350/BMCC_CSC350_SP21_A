<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="HandheldFriendly" content="true">
    <title>Laundry Room Sign up</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    

    <div class="box">
      <h1> <img src="https://i.ibb.co/6WndSY1/Pin-Clipart-com-machines-clipart-739756.png" height="60px" width="50px"><br></br> Laundry Room Sign up </h1>
      <p> Please enter your apartment number and password assigned</p>

      <form  name="login" action="authenticate.php" onsubmit="return validateLogin();" method="post">
     <label for="username"><br></br></label>
    <input class="username"  placeholder="Apartment number" name="username" id="username" required="required">

    <label for="password"><br></br></label>
    <input class="password" type="password" placeholder="Password" name="password" id="password" required="required">

    <input  class="button"   type="submit" value="Login"></a><br></br>

	
	 <p style="background:white; font-size: 15px; color: black;">Forgot your username or password? Click <a style="text-decoration: none; font-size: 15px; color: white; background: black; border-radius: 10px;" target="_blank" href="credentials.html">here.</a> <br></br></p>
   
	
  
  </div></div></form>
    </div>
  </body>
</html>
