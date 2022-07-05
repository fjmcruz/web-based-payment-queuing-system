<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($test);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM morningsession )
        ) AS RANK
        FROM morningsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($test);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM afternoonsession )
        ) AS RANK
        FROM afternoonsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($monday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM morningsession )
        ) AS RANK
        FROM morningsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($monday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM afternoonsession )
        ) AS RANK
        FROM afternoonsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($tuesday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM morningsession )
        ) AS RANK
        FROM morningsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($tuesday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM afternoonsession )
        ) AS RANK
        FROM afternoonsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($wednesday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM morningsession )
        ) AS RANK
        FROM morningsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($wednesday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM afternoonsession )
        ) AS RANK
        FROM afternoonsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($thursday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM morningsession )
        ) AS RANK
        FROM morningsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($thursday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM afternoonsession )
        ) AS RANK
        FROM afternoonsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($friday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM morningsession )
        ) AS RANK
        FROM morningsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($friday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM afternoonsession )
        ) AS RANK
        FROM afternoonsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>

<?php
    mysql_connect($host, $user, $password);
    mysql_select_db($saturday);
    $sql = "SELECT Username, FIND_IN_SET( ID, (
        SELECT GROUP_CONCAT( ID
        ORDER BY ID ASC )
        FROM morningsession )
        ) AS RANK
        FROM morningsession
        WHERE Username = '$username'";
    $result = mysql_query($sql);
    $value = mysql_fetch_array($result);
    if (!empty($value['RANK'])) {
        echo "<h2>You are queued: #{$value['RANK']}</h2>";
        if ($value['RANK'] > $limit) {
            header('Location: removeaction.php');
        }
    }
?>