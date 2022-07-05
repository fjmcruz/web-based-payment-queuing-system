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
   $checker = 0;
   $limit = 10;
?>


<!DOCTYPE html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="homedesign.css">
</head>

<body>
    <div>
        <table class="status">
            <tr>
                <td>
                    <div class="dropdown">
                        <button class="dropdownbutton">&#11167</button>
                        <div class="content">
                            <a href="studentchangepassword.php">Change Password</a>
                        </div>
                    </div>
                </td>
                <td>
                    <?php echo "<h2>Welcome [$username]!</h2>"; ?>
                </td>
            <tr>
        </table>
        <table class="status">
            <tr>
                <td>
                    <?php
                        include "rankaction.php";
                    ?>
                </td>
                <td>
                    <?php
                        mysql_connect($host, $user, $password);
                        mysql_select_db($accounts);
                        $sql = "SELECT Day, Session FROM loginform WHERE Username = '$username'";
                        $result = mysql_query($sql);
                        while ($value = mysql_fetch_array($result)) {
                            if (!empty($value['Day'])) {
                                echo "<h2>ON {$value['Day']} {$value['Session']}</h2>"; 
                                $checker = 1;
                            }
                            else {
                                echo "<h2>You are not yet queued :(</h2>";
                                $checker = 0;
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
        <nav>
            <input type="button" name="queuenow" class="button" value="QUEUE NOW" <?php
                    if ($checker == 1) {
                ?> disabled <?php } ?> onclick="window.location.href = 'queue.php'">
            <input type="button" name="removequeue" class="button" value="REMOVE QUEUE" onclick="window.location.href = 'removeaction.php'">
        </nav>
        <table class="queue">
            <h4>QUEUE STATUS OF THE WEEK:</h4>
            <tr>
                <th>SESSION:</th>
                <th>MON</th>
                <th>TUE</th>
                <th>WED</th>
                <th>THU</th>
                <th>FRI</th>
                <th>SAT</th>
                <th>TEST</th>
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
        <input type="button" name="logout" class="button" value="LOGOUT" onclick="window.location.href = 'index.php'">
    </div>
</body>

</html>