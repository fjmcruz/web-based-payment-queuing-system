<?php
    session_start();
    require "credentials.php";
	$accounts = "accounts";
    $username = $_SESSION['username'];
    $type = $_SESSION['type'];
    $newpassword = $_POST['newpassword'];
    $sql = "UPDATE employeeform 
            SET Password = '".$newpassword."', New = '0'
            WHERE Username = '".$username."'"; 
    mysql_connect($host, $user, $password);
    mysql_select_db($accounts);
    mysql_query($sql);
    if ($type == 'Administrator') {
        header('Location: administratorsdashboard.php');
    } else if ($type == 'Cashier') {
        header('Location: cashiersdashboard.php');
    }
?>