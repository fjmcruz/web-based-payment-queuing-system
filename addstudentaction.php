<?php
    require "credentials.php";
    $accounts = "accounts";
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    mysql_connect($host, $user, $password);
    mysql_select_db($accounts);
    $sql = "INSERT INTO loginform (Username, Password, Type, New) 
    VALUES ('$Username', '$Password', 'Student', '1')";
    mysql_query($sql);
    header('Location: administratorsdashboard.php');
    exit();
?>