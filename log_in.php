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
    <title>GoldeRoX DEV-log in</title>
    <link rel="Stylesheet" type="text/css" href="log_in.css">

</head>
<body>
<div id="LOGO">
            <br>
            <h1><i><a href="index.php"><pre>GoldeRoX DEV</pre></a></i></h1>
        </div>

<div id="HOME"><br><br><a href="index.php">HOME</a></div>
<div id="INFO"><br><br><a href="info.php">INFO</a></div>
<div id="CONTACT"><br><br><a href="contact.php">CONTACT</a></div>


<div id="clock">
            <h2>The time is now</h2>
            <div id="time">
            <!-- Zegar -->
                <div><span id="hour">00</span><span>Hours</span></div>
                <div><span id="minutes">00</span><span>Minutes</span></div>
                <div><span id="seconds">00</span><span>Seconds</span></div>

            </div>
</div>
        <script src="scripts/clock.js"></script>



<div id="github_1"><a href="https://github.com/GoldeRoX" target="blank"><img src="images/github.png"></a></div>

<div id="login">
    <form action="login.php" method="POST">
<br>
<p>E-mail: </p><input type="text" name="email">
        
        <p>Password: </p><input type="password" name="password">
        <br><br>
        <button type="submit">Log in</button>

    </form>





<?php

if(isset($_SESSION['blad']))    echo $_SESSION['blad'];

?>
</div>

<div id="github_2"><a href="https://github.com/GoldeRoX" target="blank"><img src="images/github.png"></a></div>

</body>
</html>