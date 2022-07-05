<?php
    session_start();
    require "credentials.php";
	$accounts = "accounts";
    $username = $_SESSION['username'];
    $newpassword = $_POST['newpassword'];
    $sql = "UPDATE loginform 
            SET Password = '".$newpassword."', New = '0'
            WHERE Username = '".$username."'"; 
    mysql_connect($host, $user, $password);
    mysql_select_db($accounts);
    mysql_query($sql);
    header('Location:home.php');
?>