<!DOCTYPE html>

<head>
    <title>Display View</title>
    <meta http-equiv="refresh" content="0.5"> 
</head>

<body>
    <div align = "center">
        <h1 style = "font-size:600%; font-family:sans-serif;"> NOW SERVING: <h1>
        <?php
            session_start();
            $queuenumber = $_SESSION['queuenumber'];
            echo "<h1 style = 'font-size:1000%; font-family:sans-serif;'>" . "#" . $_SESSION['queuenumber'] . "</h1>";
        ?>
    </div>
</body>

</html>