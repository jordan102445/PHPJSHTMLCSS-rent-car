<?php

include "конекцијаБАЗА.php";
session_start();
error_reporting(0);
if(isset($_POST['Испрати']))
{

  $кориме = $_POST['Корисничкоиме'];
  $лоз = md5($_POST['Лозинка']);

  if(strlen($кориме) > 20)
      {
          $_SESSION['Корисничкоиме_error'] = "Внеси корисничко име";
          header("Location: najava.php");
      }
    else if(strlen($лоз) > 20)
      {
          $_SESSION['Лозинка_error'] = "Внесете лозинка";
          header("Location: najava.php");
      }






  $query = "SELECT * FROM регистердел WHERE Корисничкоиме = '$кориме'  AND  Лозинка = '$лоз'  ";
  $result = mysqli_query($con,$query);
  if ($result ->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['Корисничкоиме'] = $row['Корисничкоиме'];
    header("Location: index.php");
}
} 



?>

<html>
<head>
<title>Најава</title>
  <link rel="stylesheet" type="text/css" href="css/stylenajava.css">
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="loginbox">
    <img src="sliki/logo.png" class="logo">
      <h1>Најавете се подолу</h1><br>
          <form action="" method="POST">
            <p>Корисничко име:</p>
            <input type="text" name="Корисничкоиме" placeholder="Внеси корисничко име"value="<?php echo $кориме ?>" required>

            <p>Лозинка:</p>
            <input type="password" name="Лозинка" placeholder="Внеси лозинка"value="<?php echo $лоз ?>" required>

            <input type="submit" name="Испрати" value="Логирај се">

            <center>
            <a href="registracija.php">Креирај сметка!</a> </center>
        </form>
    </div>
</body>
</html>
