<?php

include "конекцијаБАЗА.php";
error_reporting(0);

if (isset($_POST['Испрати']))
{
  $имепрезиме=$_POST['ИмеПрезиме'];
  $емаил=$_POST['Емаил'];
  $корисничкоиме=$_POST['Корисничкоиме'];
  $телброј=$_POST['Телброј'];
  $лозинка=md5($_POST['Лозинка']);
  $плозинка=md5($_POST['Плозинка']);

  if(strlen($имепрезиме) > 20)
      {
          $_SESSION['ИмеПрезиме_error'] = "Внеси име и презиме";
          header("Location: registracija.php");
      }
  else if(strlen($емаил) > 22)
    {
        $_SESSION['Емаил_error'] = "Внесете го вашиот емаил";
        header("Location: registracija.php");
    }
    else if(strlen($корисничкоиме) > 16)
      {
          $_SESSION['Корисничкоиме_error'] = "Внесете го вашето корисничко име";
          header("Location: registracija.php");
      }
      else if(strlen($телброј) > 14)
        {
            $_SESSION['Телброј_error'] = "Внесете го вашиот телефонски број";
            header("Location: registracija.php");
        }
        else if(strlen($лозинка) > 20)
          {
              $_SESSION['Лозинка_error'] = "Внесете лозинка";
              header("Location: registracija.php");
          }
          else if(strlen($плозинка) > 20)
            {
                $_SESSION['Плозинка_error'] = "Повторете ја лозинката лозинка";
                header("Location: registracija.php");
            }







if($лозинка == $плозинка)
{


$sql="SELECT * FROM регистердел WHERE  Корисничкоиме='$корисничкоиме'";
$rez = mysqli_query($con, $sql);
if (!$rez->num_rows > 0) {
$sql = "INSERT INTO регистердел (ИмеПрезиме,Емаил,Корисничкоиме,Телброј,Лозинка) VALUES('$имепрезиме','$емаил','$корисничкоиме','$телброј','$лозинка')";
$result = mysqli_query($con, $sql);

if ($result) {

  echo '<script>alert("Успешна регистрација")</script>';
$имепрезиме = "";
$емаил = "";
$корисничкоиме = "";
$телброј = "";
$_POST['Лозинка'] = "";
$_POST['Плозинка'] = "";

}  else {
    echo "<script>alert('Не успешна регистрација, Внесовте погрешни информации.')</script>";

}
} else  {
			echo "<script>alert('Внесовте постоечки емаил')</script>";
		}

  }  else  {
		echo "<script>alert('Пасвордот не се совпаѓа')</script>";
	}
}


?>
<html>
<head>
<title>Регистрација</title>
  <link rel="stylesheet" type="text/css" href="css/styleregistracija.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="loginbox">
    <img src="sliki/logo.png" class="logo">
      <h1>Регистрирај се</h1><br>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <p>Име и презиме:</p>
            <input type="text" name="ИмеПрезиме" placeholder="Внеси име и презиме" value="<?php echo $имепрезиме ?>" required>

            <p>Email адреса:</p>
            <input type="text" name="Емаил" placeholder="Внеси email адреса" value="<?php echo $емаил?>" required>

            <p>Корисничко име:</p>
            <input type="text" name="Корисничкоиме" placeholder="Внеси корисничко име" value="<?php echo $корисничкоиме?>" required>


            <p>Телефонски број:</p>
            <input type="text" name="Телброј" placeholder="Внеси телефонски број" value="<?php echo $телброј ?>" required>

            <p>Лозинка:</p>
            <input type="password" name="Лозинка" placeholder="Внеси лозинка" value="<?php echo $лозинка ?>" required>

            <p>Повтори лозинка:</p>
            <input type="password" name="Плозинка" placeholder="Повтори ја лозинката" value="<?php echo $плозинка ?>" required>

            <input type="submit" name="Испрати" value="Регистрирај се">
            <center>
            <a href="najava.php">Врати се назад до најава!</a> </center>

        </form>
    </div>
</body>
</html>
