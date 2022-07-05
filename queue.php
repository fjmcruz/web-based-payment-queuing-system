<?php
    session_start();
    require "credentials.php";
    $username = $_SESSION['username'];
    if (isset($_POST['day'])) {
        if ($_POST['day'] == 'test') {
            if ($_POST['session'] == 'morning') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("test", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO morningsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'TEST', Session = 'MORNING' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
            if ($_POST['session'] == 'afternoon') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("test", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO afternoonsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'TEST', Session = 'AFTERNOON' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
        }
        if ($_POST['day'] == 'monday') {
            if ($_POST['session'] == 'morning') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("monday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO morningsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'MONDAY', Session = 'MORNING' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
            if ($_POST['session'] == 'afternoon') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("monday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO afternoonsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'MONDAY', Session = 'AFTERNOON' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
        }
        if ($_POST['day'] == 'tuesday') {
            if ($_POST['session'] == 'morning') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("tuesday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO morningsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'TUESDAY', Session = 'MORNING' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
            if ($_POST['session'] == 'afternoon') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("tuesday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO afternoonsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'TUESDAY', Session = 'AFTERNOON' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
        }
        if ($_POST['day'] == 'wednesday') {
            if ($_POST['session'] == 'morning') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("wednesday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO morningsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'WEDNESDAY', Session = 'MORNING' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
            if ($_POST['session'] == 'afternoon') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("wednesday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO afternoonsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'WEDNESDAY', Session = 'AFTERNOON' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
        }
        if ($_POST['day'] == 'thursday') {
            if ($_POST['session'] == 'morning') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("thursday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO morningsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'THURSDAY', Session = 'MORNING' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
            if ($_POST['session'] == 'afternoon') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("thursday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO afternoonsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'THURSDAY', Session = 'AFTERNOON' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
        }
        if ($_POST['day'] == 'friday') {
            if ($_POST['session'] == 'morning') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("friday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO morningsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'FRIDAY', Session = 'MORNING' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
            if ($_POST['session'] == 'afternoon') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("friday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO afternoonsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'FRIDAY', Session = 'AFTERNOON' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
        }
        if ($_POST['day'] == 'saturday') {
            if ($_POST['session'] == 'morning') {
                $db1 = mysql_connect($host, $user, $password);
                $db2 = mysql_connect($host, $user, $password, true);
                mysql_select_db("saturday", $db1);
                mysql_select_db("accounts", $db2);
                $sql1 = "INSERT INTO morningsession (Username) VALUES ('$username')";
                $sql2 = "UPDATE loginform SET Day = 'SATURDAY', Session = 'MORNING' WHERE Username = '$username'";
                mysql_query($sql1, $db1);
                mysql_query($sql2, $db2);
                header('Location: home.php');
                exit();
            }
            if ($_POST['session'] == 'afternoon') {
                header('Location: home.php');
                exit();
            }           
        }
    }   
?>

<!DOCTYPE html>

<head>
    <title>Queue</title>
    <link rel="stylesheet" type="text/css" href="queuedesign.css">
</head>

<body>
    <div>
        <form class="form" method="POST">
            <h1>QUEUE FORM </h1>
            <table>
                <tr>
                    <th>SELECT QUEUE DAY:</th>
                    <td>
                        <input type="radio" name="day" value="test">Test<br>
                        <input type="radio" name="day" value="monday">Monday<br>
                        <input type="radio" name="day" value="tuesday">Tuesday<br>
                        <input type="radio" name="day" value="wednesday">Wednesday<br>
                        <input type="radio" name="day" value="thursday">Thursday<br>
                        <input type="radio" name="day" value="friday">Friday<br>
                        <input type="radio" name="day" value="saturday">Saturday<br>
                    </td>
                </tr>
                <tr>
                    <th>SELECT QUEUE SESSION:</th>
                    <td>
                        <input type="radio" name="session" value="morning">Morning
                        <input type="radio" name="session" value="afternoon">Afternoon
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" name="submit" class="button" value="SUBMIT">
            <input type="button" name="goback" value="GO BACK" class="button" onclick="window.location.href = 'home.php'">
        </form>
    </div>
</body>

</html>