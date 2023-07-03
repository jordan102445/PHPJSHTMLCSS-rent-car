<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <title>BMW</title>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="koli/css/bmw1.css">
</head>
<body>

    <form method="POST" action="uplata.php">
    <div id="container">
        <div id="navbar">
            <ul>
                <li><a href="index.php">Почетна</a></li>
                <li><a href="registracija.php">Регистрација</a></li>
                <li><a href="zanas.php">За нас</a></li>
            </ul>
            <div id="logo">
                <img src="sliki/logo2.png" alt="" id="logopozadina">
            </div>
            <ol>
                <li><a href="index.php#listanakoli">Автомобили</a></li>
                <li><a href="kontakt.html">Контакт</a></li>
                <li><a href="najava.php">Најава</a></li>
            </ol>
        </div>


        <?php
        require_once "конекцијаБАЗА.php";
        session_start();
        $id=$_GET['id'];
        $query = "SELECT * FROM `карактеристикиколи` WHERE id='$id'";


        $queryfire = mysqli_query($con,$query);

        $num = mysqli_num_rows($queryfire);

        if($num > 0){

          while($kola = mysqli_fetch_array($queryfire)){




          ?>



        <div id="sideImg">
            <img src= "<?php echo $kola['сликакола'];?>" alt="">
        </div>
        <div id="contentSection">
            <h4><?php echo $kola['целоимекола']; ?></h4>
            <p>Марка : <?php echo $kola['марка']; ?>
              <br>
              Модел : <?php echo $kola['модел']; ?>
              <br>
              Генерација : <?php echo $kola['генерација']; ?>
              <br>
              Мотор : <?php echo $kola['мотор']; ?>
              <br>
              Време на производство : <?php echo $kola['датапроизводство']; ?>
              <br>
              Тип на кола : <?php echo $kola['типкола']; ?>
              <br>
              Седишта : <?php echo $kola['седишта']; ?>
              <br>
              Врати : <?php echo $kola['врати']; ?>
             </p>

            <h5><?php echo $kola['цена']; ?> денари / ден</h5>


            <br>


             <?php
           }
         }
           ?>


             <br>




             <button onclick="window.location.href='../uplata.php?<?php echo $kola['цена']; ?>;">ИЗНАЈМЕТЕ  АВТОМОБИЛ</button><br><br><br><br><br>
             <button onclick="window.location.href='../index.php';">ВРАТИ СЕ НА ПОЧЕТНА</button>







            <img src="sliki/logo2.png" alt="">
        </div>



</body>
</html>
