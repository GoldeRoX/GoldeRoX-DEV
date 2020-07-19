<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="GoldeRoX, GoldeRoX DEV, Gold dev, Gold, GoldeRoX Games, GoldeRoX GitHub">
    <meta name="author" content="GoldeRoX Dev">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldeRoX DEV</title>
    <link rel="Stylesheet" type="text/css" href="info.css">
</head>
<body>
    <div id="LOGO">
        <br>
        <h1><i><a href="index.php"><pre>GoldeRoX DEV</pre></a></i></h1>
    </div>
    <!-- Zegar -->
    <div id="clock">
        <h2>The time is now</h2>
        <div id="time">
            <div><span id="hour">00</span><span>Hours</span></div>
            <div><span id="minutes">00</span><span>Minutes</span></div>
            <div><span id="seconds">00</span><span>Seconds</span></div>
        </div>
    </div>
    <!-- Odnośniki --> 

    <script src="scripts/clock.js"></script>
    <div id="LOG"><br><br><a href="log_in.php">LOG IN</a>/<a href="sign_in.php">SIGN IN</a></div>
    <div id="CONTACT"><br><br><a href="contact.php">CONTACT</a></div>
    <div id="INFO"><br><br><a href="info.php">INFO</a></div>
    <div id="HOME"><br><br><a href="index.php">HOME</a></div>

    <div id="information">
    <!-- Opis -->
        <div>
            <h1>Hi!</h1>
            <p>My name is Christopher, I'm a <span id="y_old">20</span> year old computer enthusiast.<br>
            I'm currently studying Computer Science in Wrocław, Poland. <br>
            I have a Github profile, where I show my projects, code lines <br>
            of my games and other programming related content. </p>
        </div>

        <script src="scripts/y_old.js"></script>
        <?php

            unset($_SESSION['blad']);
            unset($_SESSION['blad_email']);
            unset($_SESSION['blad_repeat']);

        ?>
                 
    </div>

    <footer>&copy; <span id='footer'>2020</span> GoldeRoXDev</footer>
    
    <?php
            if(isset($_SESSION['log_in']))    echo '<span id="footer1">'.$_SESSION['log_in'].'</span>';
    ?>
    <script src="scripts/date.js"></script>
</body>
</html>