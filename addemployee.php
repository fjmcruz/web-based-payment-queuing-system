<!DOCTYPE html>

<head>
    <title>Add Employee</title>
    <link rel="stylesheet" type="text/css" href="formdesign.css">
</head>

<body>
    <div>
        <form action="addemployeeaction.php" class="form" method="POST">
            <h1>ADD EMPLOYEE FORM</h1>
            <table>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="text" name="password" required></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>
                        <input type="radio" name="type" value="Administrator" required>Administrator
                        <input type="radio" name="type" value="Cashier">Cashier
                    </td>
                </tr>
            </table>
            <input type="submit" name="submit" class="button" value="SUBMIT">
        </form>
    </div>
</body>

</html>