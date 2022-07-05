<?php
    require "credentials.php";
    $accounts = "accounts";
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $Type = $_POST['type'];
    mysql_connect($host, $user, $password);
    mysql_select_db($accounts);
    $sql = "INSERT INTO employeeform (Username, Password, Type, New) 
            VALUES ('$Username', '$Password', '$Type', '1')";
    mysql_query($sql);
    header('Location: administratorsdashboard.php');
    exit();
?>