<?php

    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="keywords" content="GoldeRoX, GoldeRoX DEV, Gold dev, Gold, GoldeRoX Games, GoldeRoX GitHub">
    <meta name="author" content="GoldeRoX Dev">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldeRoX DEV-log in</title>
    <link rel="Stylesheet" type="text/css" href="sign_in.css">

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

<div id="sign">
    <form action="signin.php" method="POST">

<div id="left_sign"><p>E-mail:<span style="color:red">*</span> </p><input type="email" name="new_email_1" required>
    <p>Password:<span style="color:red">*</span> </p><input type="password" name="new_password_1" required>
    <p>Username:</p><input type="text" name="username">
    <p>First name</p><input type="text" name="first_name">
</div>

<div id="right_sign"><p>Repeat e-mail:<span style="color:red">*</span> </p><input type="email" name="new_email_2" required>
    <p>Repeat password:<span style="color:red">*</span></p><input type="password" name="new_password_2" required>
    <p>Phone-number:</p> <input type="tel" name="phone-number" pattern="[0-9]{9}">
    <p>Last name</p><input type="text" name="last_name">
</div>
    
<br>
       

        <br><br>
        <button type="submit">Sign in</button>
        <br>
    
    </form>


<?php

if(isset($_SESSION['blad_repeat']))    echo $_SESSION['blad_repeat'];

?>
</div>

<div id="github_2"><a href="https://github.com/GoldeRoX" target="blank"><img src="images/github.png"></a></div>

</body>
</html>