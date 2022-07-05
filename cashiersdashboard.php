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
   $limit = 10;
?>

<!DOCTYPE html>

<head>
    <title>Cashier's Dashboard</title>
    <link rel="stylesheet" type="text/css" href="/cashierdesign.css">
</head>

<body>
    <div>
        <h2>CASHIER'S DASHBOARD</h2>
        <table>
            <tr>
                <td>
                    <div class="dropdown">
                        <button class="dropdownbutton">&#11167</button>
                        <div class="content">
                            <a href="employeechangepassword.php">Change Password</a>
                        </div>
                    </div>
                </td>
                <td>
                    <?php echo "<h2>Welcome [$username]!</h2>"; ?>
                </td>
            <tr>
        </table>
        <b>MORNING SERVICE PANEL:</b>
        <form method="POST" action=''>
            <th><input type="button" name="service" class="button" value="MON" onclick="window.open('cashierservice/morning/monday.php', 'servemorningmonday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="TUE" onclick="window.open('cashierservice/morning/tuesday.php', 'servemorningtuesday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="WED" onclick="window.open('cashierservice/morning/wednesday.php', 'servemorningwednesday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="THU" onclick="window.open('cashierservice/morning/thursday.php', 'servemorningthursday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="FRI" onclick="window.open('cashierservice/morning/friday.php', 'servemorningfriday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="SAT" onclick="window.open('cashierservice/morning/saturday.php', 'servemorningsaturday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="TEST" onclick="window.open('cashierservice/morning/test.php', 'servemorningtest', 'width = 600, height = 200')"></th>
        </form>
        <br>
        <b>AFTERNOON SERVICE PANEL:</b>
        <form method="POST" action=''>
            <th><input type="button" name="service" class="button" value="MON" onclick="window.open('cashierservice/afternoon/monday.php', 'serveafternoonmonday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="TUE" onclick="window.open('cashierservice/afternoon/tuesday.php', 'serveafternoontuesday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="WED" onclick="window.open('cashierservice/afternoon/wednesday.php', 'serveafternoonwednesday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="THU" onclick="window.open('cashierservice/afternoon/thursday.php', 'serveafternoonthursday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="FRI" onclick="window.open('cashierservice/afternoon/friday.php', 'serveafternoonfriday', 'width = 600, height = 200')"></th>
            <th><input type="button" name="service" class="button" value="TEST" onclick="window.open('cashierservice/afternoon/test.php', 'serveafternoontest', 'width = 600, height = 200')"></th>
        </form>
        <table class="queue">
            <h4>QUEUE STATUS OF THE WEEK:</h4>
            <tr>
                <th>SESSION:</th>
                <th><a href="" target="popup" onclick="window.open('clickevents/mondayclick.php', 'clickeventmonday', 'width = 600, height = 720')">MON</a></th>
                <th><a href="" target="popup" onclick="window.open('clickevents/tuesdayclick.php', 'clickeventtuesday', 'width = 600, height = 720')">TUE</a></th>
                <th><a href="" target="popup" onclick="window.open('clickevents/wednesdayclick.php', 'clickeventwednesday', 'width = 600, height = 720')">WED</a></th>
                <th><a href="" target="popup" onclick="window.open('clickevents/thursdayclick.php', 'clickeventthursday', 'width = 600, height = 720')">THU</a></th>
                <th><a href="" target="popup" onclick="window.open('clickevents/fridayclick.php', 'clickeventfriday', 'width = 600, height = 720')">FRI</a></th>
                <th><a href="" target="popup" onclick="window.open('clickevents/saturdayclick.php', 'clickeventsaturday', 'width = 600, height = 720')">SAT</a></th>
                <th><a href="" target="popup" onclick="window.open('clickevents/testclick.php', 'clickeventtest', 'width = 600, height = 720')">TEST</a></th>
            </tr>
            <tr>
                <td>MORNING:</td>
                <td>
                    <!-- MONDAY -->
                    <?php
                        mysql_connect($host, $user, $password);
                        mysql_select_db($monday);
                        $sql = "SELECT COUNT(1) FROM morningsession";
                        $result = mysql_query($sql);
                        $row = mysql_fetch_array($result);
                        $total = $row[0];
                        echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- TUESDAY -->
                    <?php
                        mysql_connect($host, $user, $password);
                        mysql_select_db($tuesday);
                        $sql = "SELECT COUNT(1) FROM morningsession";
                        $result = mysql_query($sql);
                        $row = mysql_fetch_array($result);
                        $total = $row[0];
                        echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- WEDNESDAY -->
                    <?php
                        mysql_connect($host, $user, $password);
                        mysql_select_db($wednesday);
                        $sql = "SELECT COUNT(1) FROM morningsession";
                        $result = mysql_query($sql);
                        $row = mysql_fetch_array($result);
                        $total = $row[0];
                        echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- THURSDAY -->
                    <?php
                        mysql_connect($host, $user, $password);
                        mysql_select_db($thursday);
                        $sql = "SELECT COUNT(1) FROM morningsession";
                        $result = mysql_query($sql);
                        $row = mysql_fetch_array($result);
                        $total = $row[0];
                        echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- FRIDAY -->
                    <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($friday);
                    $sql = "SELECT COUNT(1) FROM morningsession";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $total = $row[0];
                    echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- SATURDAY -->
                    <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($saturday);
                    $sql = "SELECT COUNT(1) FROM morningsession";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $total = $row[0];
                    echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- TEST -->
                    <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($test);
                    $sql = "SELECT COUNT(1) FROM morningsession";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $total = $row[0];
                    echo "$total/$limit";
                    ?>
                </td>
            </tr>
            <tr>
                <td>AFTERNOON:</td>
                <td>
                    <!-- MONDAY -->
                    <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($monday);
                    $sql = "SELECT COUNT(1) FROM afternoonsession";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $total = $row[0];
                    echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- TUESDAY -->
                    <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($tuesday);
                    $sql = "SELECT COUNT(1) FROM afternoonsession";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $total = $row[0];
                    echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- WEDNESDAY -->
                    <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($wednesday);
                    $sql = "SELECT COUNT(1) FROM afternoonsession";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $total = $row[0];
                    echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- THURSDAY -->
                    <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($thursday);
                    $sql = "SELECT COUNT(1) FROM afternoonsession";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $total = $row[0];
                    echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- FRIDAY -->
                    <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($friday);
                    $sql = "SELECT COUNT(1) FROM afternoonsession";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $total = $row[0];
                    echo "$total/$limit";
                    ?>
                </td>
                <td>
                    <!-- SATURDAY -->
                    -
                </td>
                <td>
                    <!-- TEST -->
                    <?php
                    mysql_connect($host, $user, $password);
                    mysql_select_db($test);
                    $sql = "SELECT COUNT(1) FROM afternoonsession";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $total = $row[0];
                    echo "$total/$limit";
                    ?>
                </td>
            </tr>
        </table>
        <form method="POST" action=''>
            <th><input type="button" name="logout" class="button" value="LOGOUT" onclick="window.location.href = '/index.php'"></th>
            <th><input type="button" name="displayview" class="button" value="DISPLAY VIEW" onclick="window.open('/cashierservice/displayview.php', 'displayview', 'width = 600, height = 720')"></th>
        </form>
    </div>
</body>

</html>