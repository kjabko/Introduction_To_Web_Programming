<?php
session_start();
define('USERNAME', 'Krzysztof');
define('PASSWORD', '1234');

//if (isset($_POST['loginForm'])) {
//	echo 'posted';
//}
//else {echo 'not posted';}

$username = $_POST['username'];
$password = $_POST['password'];


	if ($username === USERNAME && $password === PASSWORD) {
		$_SESSION['username'] = $username;
		header('location: admin.php');
	}
	else {
		$status = 'Incorrect Login Credentials';
	}




?>
<!doctype html>
<html>
<head>
	<title></title>
</head>

<h1>Login</h1>
<form action= 'login.php' method= 'post'>
	<ul>
		<li>

			<label for= 'username'>Username:</label>
			<input type= 'text' name= 'username'>
		</li>
		<li>
			<p>
			<label for= 'password'>Password:</label>
			<input type= 'password' name= 'password'>
		</p>
		</li>
		<li>
		
			<input type= 'submit' value= 'Login' name= 'loginForm'>
		</li>
	</ul>

	<?php if (isset($status)) {
		echo $status;
	}
	?>
</form>
</body>
</html>