<?php
    session_start();
    require "credentials.php";
	$accounts = "accounts";
    $username = $_SESSION['username'];
    $sql = "SELECT Type 
            FROM employeeform 
            WHERE Username = '".$username."'";
    mysql_connect($host, $user, $password);
    mysql_select_db($accounts);
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
    $_SESSION['type'] = $row["Type"];
?>

<!DOCTYPE html>

<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="formdesign.css">
</head>

<body>
    <div>
        <form action="employeechangepasswordaction.php" class="form" method="POST">
            <h2>New login, please change your password.</h2>
            <table>
                <tr>
                    <th>New Password:</th>
                    <td><input type="password" name="newpassword" id="newpassword" required></td>
                </tr>
                <tr>
                    <th>Verify Password:</th>
                    <td><input type="password" name="verifypassword" id="verifypassword" oninput="check(this)" required></td>
                </tr>
            </table>
            <script language='javascript' type='text/javascript'>
            function check(input) {
                if (input.value != document.getElementById('newpassword').value) {
                    input.setCustomValidity('The password must match!');
                } else {
                    input.setCustomValidity('');
                }
            }
            </script>
            <input type="submit" name="submit" class="button" value="SUBMIT">
        </form>
    </div>
</body>

</html>