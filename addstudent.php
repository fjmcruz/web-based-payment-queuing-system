<!DOCTYPE html>

<head>
    <title>Add Student</title>
    <link rel="stylesheet" type="text/css" href="formdesign.css">
</head>

<body>
    <div>
        <form action="addstudentaction.php" class="form" method="POST">
            <h1>ADD STUDENT FORM</h1>
            <table>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="text" name="password" required></td>
                </tr>
            </table>
            <input type="submit" name="submit" class="button" value="SUBMIT">
        </form>
    </div>
</body>

</html>