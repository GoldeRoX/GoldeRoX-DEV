<!DOCTYPE html>
<html>
    <HEAD>
        <title>test log</title>
        <link rel="Stylesheet" type="text/css" href="login.css">
    </HEAD>
    <body>

<?php

    session_start();

    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }
    else
    {
        $haslo = $_POST["password"];
        $email = $_POST["email"];
        

        $sql = "SELECT * FROM uzytkownicy WHERE email='$email' AND pass='$haslo'";


        if($rezultat = @$polaczenie->query($sql))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                

                $wiersz = $rezultat->fetch_assoc();
                //wyciąga wiersz z tabeli o nazwie "name"
                $_SESSION['name'] = $wiersz['name'];
                $_SESSION['surname'] = $wiersz['surname'];

                unset($_SESSION['blad']);
                $rezultat->free_result();

                
                echo '<div id="hello"> Hello <b>'.$_SESSION['name'].' '.$_SESSION['surname'].'</b>!</div>';
            }else
            {

                $_SESSION['blad'] = '<span style="color:red">Invalid login or password!</span>';
                header('Location: log_in.php');

            }
        }


        $polaczenie->close();
    }

?>
</body>
</html>