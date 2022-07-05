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
    <title>Administrator's Dashboard</title>
    <link rel="stylesheet" type="text/css" href="/administratorsdashboarddesign.css">
</head>

<body>
    <div>
        <h2>ADMINISTRATOR'S DASHBOARD</h2>
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
        <form method="POST" action=''>
            <th><input type="button" name="employees" class="button" value="EMPLOYEE'S" onclick="window.open('administratoremployees.php', 'employees', 'width = 400, height = 800')"></th>
            <th><input type="button" name="addemployee" class="button" value="ADD EMPLOYEE" onclick="window.location.href = 'addemployee.php'"></th>
            <th><input type="button" name="students" class="button" value="STUDENT'S" onclick="window.open('administratorstudents.php', 'students', 'width = 400, height = 800')"></th>
            <th><input type="button" name="addemployee" class="button" value="ADD STUDENT" onclick="window.location.href = 'addstudent.php'"></th>
        </form>
        <table class="queue">
            <h4> QUEUE STATUS OF THE WEEK: </h4>
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
            <th><input type="button" name="logout" class="button" value="LOGOUT" onclick="window.location.href = 'index.php'"></th>
        </form>
    </div>
</body>

</html>