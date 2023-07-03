<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/stylekontakt.css">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Адреса:</div>
          <div class="text-one"><B>ул. Цвета јованова</B></div>
          <div class="text-two"><B>бр. 13</B></div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Телефонски број:</div>
          <div class="text-one"><B>+389/78-317-712</B></div>
          <div class="text-two"><B>+389/78-394-457</B></div>
          <div class="text-one"><B>+389/71-996-983</B></div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one"><B>trajkov.jordan18@gmail.com</B></div>
          <div class="text-two"><B>aleksandarpetrov18@yahoo.com</B></div>
          <div class="text-one"><B>andrejstojanov101@gmail.com</B></div>

        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Испрати порака до нас:</div>
      <form action="kontaktUspesen.php" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Внеси име и презиме" name="imeprezime" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Внеси емаил адреса" name="email" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Напиши ја овде пораката" name="poraka" required>
        </div>
        <input type="submit" value="Испрати порака" >
        <input type="button" onclick="window.location.href='index.php';" value="Врати се назад">
        
        
      </form>



    </div>
    </div>
  </div>
</body>
</html>
