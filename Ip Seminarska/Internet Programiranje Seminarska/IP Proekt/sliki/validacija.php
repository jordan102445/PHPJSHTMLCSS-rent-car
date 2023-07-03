<?php
require_once "конекцијаБАЗА.php";
session_start();

if(isset($_POST['Потврди']))
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
    else{

        $sql = "INSERT INTO `izvrseniuplati`(`ID`, `imeprez` , `brkarticka` , `iznosVkupno`)
                VALUES ('0', '$imeprez', '$brkarticka' , '$iznosVkupno')";
        if(mysqli_query($con, $sql))
        {
            header("Location: uspesnaUplatavvvvv.php");
            die();


        }


    }
}
  ?>
