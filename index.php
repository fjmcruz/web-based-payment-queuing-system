<?php
	session_start();
	require "credentials.php";
	$accounts = "accounts";
	mysql_connect($host, $user, $password);
	mysql_select_db($accounts);
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$_SESSION['username'] = $username;
		$sql = "SELECT Username, Password, Type, New FROM loginform
				WHERE Username = '".$username."' AND Password = '".$password."'
				UNION
				SELECT Username, Password, Type, New FROM employeeform
				WHERE Username = '".$username."' AND Password = '".$password."'";
		$result = mysql_query($sql);
		$value = mysql_fetch_assoc($result);
		if (mysql_num_rows($result) == 1) {
			if ($value["Type"] == 'Student') {
				if ($value["New"] == 1) {
					header('Location: studentchangepassword.php');
					exit();
				} else {
					header('Location: home.php');
					exit();
				}
			} else if ($value["Type"] == 'Administrator') {
				if ($value["New"] == 1) {
					header('Location: employeechangepassword.php');
					exit();
				} else {
					header('Location: administratorsdashboard.php');
					exit();
				}
			} else if ($value["Type"] == 'Cashier') {
				if ($value["New"] == 1) {
					header('Location: employeechangepassword.php');
					exit();
				} else {
					header('Location: cashiersdashboard.php');
					exit();
				}
			}
		} else {
			header('Location: loginfailed.php');
			exit();	
		}
	}
?>

<!DOCTYPE html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="indexdesign.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <form class="form" method="POST" action="#">
        <h1>LOGIN</h1>
        <input type="text" name="username" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder='Username'">
        <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'">
        <input type="submit" name="submit" value="LOGIN" class="button-login">
    </form>
</body>

</html>