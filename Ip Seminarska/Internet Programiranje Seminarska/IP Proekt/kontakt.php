<?php

require_once "конекцијаБАЗА.php";

session_start();

if (isset($_POST['Испрати']))
{
      $ime = $_POST['ime'];
      $email = $_POST['email'];
      $poraka = $_POST['poraka'];


      if(strlen($ime) > 20)
      {
          $_SESSION['ime_error'] = "Внесете го вашето име ";
          header("Location: kontakt.php");

      }
      else if(strlen($email) > 20)
      {
          $_SESSION['email_error'] = "Внесете ја вашета емаил адреса";
          header("Location: kontakt.php");

      }
      else if(strlen($poraka) > 2000)
      {
          $_SESSION['poraka_error'] = "Внесете ја вашата порака";
          header("Location: kontakt.php");

      }


$sql = "INSERT INTO `контакт`(`имепрезимеклиент`, `емаиладресаклиент`, `поракаклиент`)
VALUES ('$ime','$email','$poraka')";

}






?>



  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <<title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/stylekontakt.css">
   </head>
<body>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Адреса:</div>
          <div class="text-one"><B>ул. Цвета јованова бр. 13</B></div>

        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Телефонски број:</div>
          <div class="text-one"><B>+389/78-317-712</B></div>

        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one"><B>
jordan.102445@studen.ugd.edu.mk
aleksandar.102421@student.ugd.edu.mk
andrej.102469@student.ugd.edu.mk</B></div>

        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Испрати порака до нас:</div>

        <div class="input-box">
          <input type="text" name="ime" placeholder="Внеси име и презиме">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Внеси емаил адреса">
        </div>
        <div class="input-box">
          <input type="text" name = "poraka" placeholder="Напиши ја овде пораката">
        </div>
        <div class="input-box message-box">Ви благодариме за пораката! Одговор ќе добиете во период од 2-3 денови.
        </div>
        <div class="button">
          <form>
          <input type="submit" name = "Испрати" value="Испрати порака" >
</form>
  </div>
        <div class="button">
          <form>
            <input type="button" onclick="window.location.href='index.php';" value="Врати се назад">
          </form>
      </div>
      </form>



    </div>
    </div>
  </div>
</body>
</html>
