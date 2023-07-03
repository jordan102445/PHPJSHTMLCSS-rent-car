<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="css/stylezanas.css">
  <link rel="stylesheet" href="boostrap/bootstrap.min.css">
  <script src="boostrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">



  <title> За нас</title>
  <link rel= "stylesheet" type="text/css" href="stylezanas.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>

   <?php

   require_once "конекцијаБАЗА.php";
   session_start();

   $query = "SELECT * FROM занас";


   $queryfire = mysqli_query($con,$query);

    $zanas = mysqli_fetch_array($queryfire)



   ?>
  <section class="about">
    <div class="main">
      <img src="sliki/logobeltekst.png">
      <div class="about-text">
        <h1><?php echo $zanas['накраткозанас'];?></h1><br>
        <h5><span><?php echo $zanas['именафирма'];?></span></h5>
        <p><?php echo $zanas['описзанас'];?></p><br>
        <form method="get" action="index.php">
        <button type="submit">Врати се назад</button>
      </form>
      </div>
    </div>


  </section>
</body>
</html>
