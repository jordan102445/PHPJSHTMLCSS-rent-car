<html>
<head>
  <link rel="stylesheet" href="boostrap/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="boostrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="css/styletabela.css">
</head>
<body>

    <div id="navbar">
        <ul>
            <li><a href="tabela.php">Почетна</a></li>
            <li><a href="registracija.php">Регистрација</a></li>
            <li><a href="zanas.php">За нас</a></li>
        </ul>
        <div id="logo">
            <img src="sliki/logo.png" alt="">
        </div>
        <ol>
            <li><a href="#listanakoli">Автомобили</a></li>
            <li><a href="kontakt.php">Контакт</a></li>
            <li><a href="najava.php">Најава</a></li>
        </ol>
    </div>
<br><br><br><br><br><br><br><br>









<?php


require_once "конекцијаБАЗА.php";
      $result = mysqli_query($con,"SELECT * FROM резервација");
                  echo "<table border='1'>
                  <tr>
                     <th>korisnikid:</th>
                     <th>kolaid:</th>

                  </tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['korisnikid'] . "</td>";
echo "<td>" . $row['kolaid'] . "</td>";

}
echo "</table>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$result = mysqli_query($con,"SELECT * FROM карактеристикиколи");
            echo "<table border='1'>
            <tr>
               <th>ИМЕ НА ИЗНАЈМЕНА КОЛА:</th>
               <th>registrirankorisnikid:</th>
               <th>uplatizakorisnikid:</th>

            </tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['целоимекола'] . "</td>";
echo "<td>" . $row['регистер_id'] . "</td>";
echo "<td>" . $row['uplatiid'] . "</td>";

}
echo "</table>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$result = mysqli_query($con,"SELECT * FROM izvrseniuplati");
            echo "<table border='1'>
            <tr>
               <th>ИМЕ ПРЕЗИМЕ КОРИСНИК:</th>
               <th>ИЗНОС ЗА АВТОМОБИЛОТ:</th>
               <th>ИЗНАЈМЕНА КОЛА id:</th>

            </tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['imeprez'] . "</td>";
echo "<td>" . $row['iznosVkupno'] . "</td>";
echo "<td>" . $row['kolaid'] . "</td>";

}
echo "</table>";
?>
<br><br>
<div id="logo1">
    <img src="sliki/logo2.png" alt="">
</div>
</body>
</html>
