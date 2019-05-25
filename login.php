<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div id="fm">
		<form action="process.php" method="POST">
			
			<p>
				<label>Username: </label>
				<input type="text" id= "user" name="user">
			</p>
			<p>
				<label>Password: </label>
				<input type="password" id= "pass" name="pass">
			</p>
			<p>
				<input type="Submit" id= "btn" value="Login">
			</p>

		</form>

		
	</div>
</body>
</html>