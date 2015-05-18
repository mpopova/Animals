<?php
// include('animals.html');

$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$res = mysql_query($sql);
	if (mysql_num_rows($res) == 1){
		echo "You have success logged in!";
		header( 'Location: animalsHomePage.php' );

	}
	else{
		echo "Invalid login information!";
		exit();
	}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="login.php">
Username: <input type="text" name="username" /><br /><br />
Password: <input type="password" name="password" /><br /><br />
<input type="submit" name="submit" value="Log in" /><br /><br />
</form>
</body>
</html>