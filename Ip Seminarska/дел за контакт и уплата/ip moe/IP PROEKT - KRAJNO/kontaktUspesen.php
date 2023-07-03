<?php


session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $imeprezime = $_POST['imeprezime'];
    $email = $_POST['email'];
    $poraka = $_POST['poraka'];

    if(strlen($imeprezime) < 1)
    {
        $_SESSION['imeprezime_error'] = "Внеси име и презиме";
        header("Location: kontakt.php");
        die();
    }

    else if(strlen($email) < 10)
    {
        $_SESSION['email_error'] = "Внеси email";
        header("Location: kontakt.php");
        die();
    }

    else if(strlen($poraka) < 1)
    {
        $_SESSION['poraka_error'] = "Внеси име и презиме";
        header("Location: kontakt.php");
        die();
    }

    else
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kontaktbaza";
        
        $conn = mysqli_connect($servername,$username,$password,$dbname);
         
        $sql = "INSERT INTO `kontakt`(`ID`, `imeprezime` , `email` , `poraka`)
                VALUES ('0', '$imeprezime', '$email' , '$poraka')";
        if(mysqli_query($conn, $sql))
        {
            header("Location: poraka.php");
            die();
            
            
        }
        else
        {
            echo '<script type="text/javascript">';
            echo 'alert("Неуспешна конекција")';
            echo '</script>';
        }
    }
}

mysqli_close($conn);


?>