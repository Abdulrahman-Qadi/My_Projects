<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href = "Login.css">
</head> 

<body oncontextmenu="return false">
<div class = "body"></div> 
	<div class ="grad"></div>
	<div class = "header">
		<div>Biology<span>Revision</span></div>
	</div>
	<br>
	<form action = 'process.php' method = 'POST'>
	<div class = "login">
		<input type="text" placeholder="username" name="userid"><br>
		<input type="password" placeholder="password" name="pswrd"><br>
		<input type="button"  value="login"/>
	</div>	
	</form>


</body>
</html>