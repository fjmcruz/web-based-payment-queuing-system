<?php
    session_start();
    require "credentials.php";
    $username = $_SESSION['username'];
    $accounts = "accounts";
    $monday = "monday";
    $tuesday = "tuesday";
    $wednesday = "wednesday";
    $thursday = "thursday";
    $friday = "friday";
    $saturday = "saturday";
    $test = "test";
?>

<?php
    $db1 = mysql_connect($host, $user, $password);
    $db2 = mysql_connect($host, $user, $password, true);
    mysql_select_db($accounts, $db1);
    mysql_select_db($test, $db2);
    $sql1 = "UPDATE loginform SET Day = NULL, Session = NULL WHERE Username = '$username'";
    $sql2 = "DELETE FROM morningsession WHERE Username = '$username'";
    $sql3 = "DELETE FROM afternoonsession WHERE Username = '$username'";
    mysql_query($sql1, $db1);
    mysql_query($sql2, $db2);
    mysql_query($sql3, $db2); 
    header('Location: home.php');
?>

<?php
    $db1 = mysql_connect($host, $user, $password);
    $db2 = mysql_connect($host, $user, $password, true);
    mysql_select_db($accounts, $db1);
    mysql_select_db($monday, $db2);
    $sql1 = "UPDATE loginform SET Day = NULL, Session = NULL WHERE Username = '$username'";
    $sql2 = "DELETE FROM morningsession WHERE Username = '$username'";
    $sql3 = "DELETE FROM afternoonsession WHERE Username = '$username'";
    mysql_query($sql1, $db1);
    mysql_query($sql2, $db2);
    mysql_query($sql3, $db2); 
    header('Location: home.php');
?>

<?php
    $db1 = mysql_connect($host, $user, $password);
    $db2 = mysql_connect($host, $user, $password, true);
    mysql_select_db($accounts, $db1);
    mysql_select_db($tuesday, $db2);
    $sql1 = "UPDATE loginform SET Day = NULL, Session = NULL WHERE Username = '$username'";
    $sql2 = "DELETE FROM morningsession WHERE Username = '$username'";
    $sql3 = "DELETE FROM afternoonsession WHERE Username = '$username'";
    mysql_query($sql1, $db1);
    mysql_query($sql2, $db2);
    mysql_query($sql3, $db2); 
    header('Location: home.php');
?>

<?php
    $db1 = mysql_connect($host, $user, $password);
    $db2 = mysql_connect($host, $user, $password, true);
    mysql_select_db($accounts, $db1);
    mysql_select_db($wednesday, $db2);
    $sql1 = "UPDATE loginform SET Day = NULL, Session = NULL WHERE Username = '$username'";
    $sql2 = "DELETE FROM morningsession WHERE Username = '$username'";
    $sql3 = "DELETE FROM afternoonsession WHERE Username = '$username'";
    mysql_query($sql1, $db1);
    mysql_query($sql2, $db2);
    mysql_query($sql3, $db2); 
    header('Location: home.php');
?>

<?php
    $db1 = mysql_connect($host, $user, $password);
    $db2 = mysql_connect($host, $user, $password, true);
    mysql_select_db($accounts, $db1);
    mysql_select_db($thursday, $db2);
    $sql1 = "UPDATE loginform SET Day = NULL, Session = NULL WHERE Username = '$username'";
    $sql2 = "DELETE FROM morningsession WHERE Username = '$username'";
    $sql3 = "DELETE FROM afternoonsession WHERE Username = '$username'";
    mysql_query($sql1, $db1);
    mysql_query($sql2, $db2);
    mysql_query($sql3, $db2); 
    header('Location: home.php');
?>

<?php
    $db1 = mysql_connect($host, $user, $password);
    $db2 = mysql_connect($host, $user, $password, true);
    mysql_select_db($accounts, $db1);
    mysql_select_db($friday, $db2);
    $sql1 = "UPDATE loginform SET Day = NULL, Session = NULL WHERE Username = '$username'";
    $sql2 = "DELETE FROM morningsession WHERE Username = '$username'";
    $sql3 = "DELETE FROM afternoonsession WHERE Username = '$username'";
    mysql_query($sql1, $db1);
    mysql_query($sql2, $db2);
    mysql_query($sql3, $db2); 
    header('Location: home.php');
?>

<?php
    $db1 = mysql_connect($host, $user, $password);
    $db2 = mysql_connect($host, $user, $password, true);
    mysql_select_db($accounts, $db1);
    mysql_select_db($saturday, $db2);
    $sql1 = "UPDATE loginform SET Day = NULL, Session = NULL WHERE Username = '$username'";
    $sql2 = "DELETE FROM morningsession WHERE Username = '$username'";
    mysql_query($sql1, $db1);
    mysql_query($sql2, $db2);
    header('Location: home.php');
?>