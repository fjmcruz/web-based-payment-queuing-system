<!-- CLICK EVENT THURSDAY CLICK -->

<?php
   require $_SERVER['DOCUMENT_ROOT']."/credentials.php";
   $accounts = "accounts";
   $monday = "monday";
   $tuesday = "tuesday";
   $wednesday = "wednesday";
   $thursday = "thursday";
   $friday = "friday";
   $saturday = "saturday";
   $test = "test";
?>

<!DOCTYPE html>

<head>
    <title>Thursday Queue</title>
    <link rel="stylesheet" type="text/css" href="/statusdesign.css">
</head>

<body>
    <div>
        <h3> THURSDAY QUEUE: </h3>
        <table>
            <h3> MORNING QUEUE STATUS: </h3>
            <tr>
                <th>QUEUE#:</th>
                <th>Username:</th>
            </tr>
            <tr>
                <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($thursday);
                    $sql = "SELECT @rank := @rank + 1 AS RANK, m. * FROM morningsession m,
                    (SELECT @rank := 0) R ORDER By ID ASC";
                    $result = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($result)) {
                        echo "<tr><td> # {$row['RANK']}</td><td>{$row['Username']}</td></tr>";
                    }
                ?>
            </tr>
        </table>
        <br>
        <table>
            <h3> AFTERNOON QUEUE STATUS: </h3>
            <tr>
                <th>QUEUE#:</th>
                <th>Username:</th>
            </tr>
            <tr>
                <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($thursday);
                    $sql = "SELECT @rank := @rank + 1 AS RANK, m. * FROM afternoonsession m,
                    (SELECT @rank := 0) R ORDER By ID ASC";
                    $result = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($result)) {
                        echo "<tr><td> # {$row['RANK']}</td><td>{$row['Username']}</td></tr>";
                    }
                ?>
            </tr>
        </table>
    </div>
</body>

</html>