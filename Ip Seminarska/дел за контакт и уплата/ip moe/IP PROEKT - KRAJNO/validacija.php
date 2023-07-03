<?php




session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $imeprez = $_POST['imeprez'];
    $brkarticka = $_POST['brkarticka'];
    $cvv = $_POST['cvv'];
    $iznosVkupno = $_POST['iznosVkupno'];
    
    // Ako denovi e prazno, staj go da bide 1 den.
    if (strlen($_POST['denovi']) == 0){
        $denovi = 1;
    }
    

    if(strlen($imeprez) < 1)
    {
        $_SESSION['imeprez_error'] = "Внеси име и презиме";
        header("Location: uplata.php");
        die();
    }
    else if(strlen($brkarticka) < 16)
    {
        $_SESSION['brkarticka_error'] = "Внеси број на картичка";
        header("Location: uplata.php");
        die();
    }
    else if(strlen($cvv) < 3)
    {
        $_SESSION['cvv_error'] = "Внеси CVV";
        header("Location: uplata.php");
        die();
    }
    else
    {   
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "prilivnasredstva";
        
        $conn = mysqli_connect($servername,$username,$password,$dbname);
         
        $sql = "INSERT INTO `izvrseniuplati`(`ID`, `imeprez` , `brkarticka` , `iznosVkupno`)
                VALUES ('0', '$imeprez', '$brkarticka' , '$iznosVkupno')";
        if(mysqli_query($conn, $sql))
        {
            header("Location: uspesnaUplata.php"); 
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







