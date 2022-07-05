<!DOCTYPE html>

<head>
    <title>Student Accounts</title>
    <link rel="stylesheet" type="text/css" href="/statusdesign.css">
</head>

<body>
    <div>
        <h2>STUDENTS:</h2>
        <table>
            <tr>
                <th>USERNAME:</th>
                <th>REMOVE:</th>
            </tr>
            <?php
                require "credentials.php";
                $accounts = "accounts";
                mysql_connect($host, $user, $password);
                mysql_select_db($accounts);
                $sql = "SELECT * FROM loginform ORDER BY ID ASC";
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["Username"] . "</td>" .
                    "<td>" . "<a href='removeemployee.php?id=".$row["ID"]."'>REMOVE</a>" . "</td></tr>";
                }      
            ?>
        </table>
    </div>
</body>

</html>