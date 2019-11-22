

<!DOCTYPE html>
<html>
<head>
	<title>getmethod</title>
</head>
<body style="background-image: url(pic3.jpg);background-repeat: no-repeat;background-size: cover;">
<center>
<div style="border:5px solid black; height: 500px; width: 500px; border-radius: 12px; background-color: transparent;">
<h1>

	<?php echo "Mysite";?>
	
</h1>
<br>
<br>
<form action="displaymethod" method = "GET">
 <h3 style="color: white"> Name:<input style="display: inline-block;padding: 4px;;border: 1px solid none;border-radius:5px;border-color: white;margin-left: 25px; background: transparent;" type="text" name="lastname"/></h3><br>
  Age:<input style="margin-left: 35px" type="text" name="Age"/><br>
  Password:<input style="margin-left: 1px" type="password" name="pass"/><br>

  <input style="border-radius: 5px; border-width: 5px; font-size: 15px;" type="submit" value="login">
  </div>
</center>
</form>
</body>
</html>
