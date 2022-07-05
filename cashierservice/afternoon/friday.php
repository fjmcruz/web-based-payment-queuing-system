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
    $limit = 5;
?>

<!DOCTYPE html>

<head>
    <title>Cashier's Service</title>
    <link rel="stylesheet" type="text/css" href="/cashierservice/servicedesign.css">
</head>

<body>
    <div>
        <?php
            mysql_connect($host, $user, $password);
            mysql_select_db($friday);
            $sql = "SELECT COUNT(1) FROM afternoonsession";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            $total = $row[0];
            session_start();
            if (isset($_POST["call"])) {
                if ($_SESSION['queuenumber'] < $total) {
                    $_SESSION['queuenumber'] += 1;
                }
            } else if (isset($_POST["reset"])) {
                $_SESSION['queuenumber'] = 0;
            } else {
                $_SESSION['queuenumber'] = 0;
            }
            echo "<h4> YOU ARE NOW SERVING: </h4>";
            echo "<h4>" . "#" . $_SESSION['queuenumber'] . "</h4>";
        ?>
        <form method="POST" action=''>
            <th><input type="submit" name="call" class="button" value="CALL"></th>
            <th><input type="submit" name="reset" class="button" value="RESET"></th>
        </form>
    </div>
</body>

</html>