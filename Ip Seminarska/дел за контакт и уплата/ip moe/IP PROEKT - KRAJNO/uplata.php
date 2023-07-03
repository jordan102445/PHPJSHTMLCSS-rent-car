<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Уплата</title>
        <link rel="stylesheet" href="./css/stylezauplata.css">
    </head>
    <body class="bg bg-image">
        
        <form class="border" action="validacija.php" method="POST">
            <b>Податоци за платежна картичка</b><br><br>
           <label for="imeprez" class="inline">Име и презиме</label>
           <input type="text" id="imeprez" name="imeprez" required><br><br>

           <label for="brkarticka" class="inline">Број на картичка</label>
           <input type="text" id="brkarticka" name="brkarticka" required maxlength="16"><br><br>

           <label for="cvv" class="inline">CVV2/CVC2</label>
           <input type="password" id="cvv" name="cvv" required maxlength="3"><br><br>

           <label for="rok" class="inline">Рок на важност</label>
           <select id="rok" name="rokdata" required>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>

           </select> &nbsp; <b>/</b> &nbsp;
           <select id="rok" name="rokgodina" required>
               <option value="2022">2022</option>
               <option value="2023">2023</option>
               <option value="2024">2024</option>
               <option value="2025">2025</option>
               <option value="2026">2026</option>
               <option value="2027">2027</option>
               <option value="2028">2028</option>
               <option value="2029">2029</option>
               <option value="2030">2030</option>

           </select><br><br>

           <label for="denovi" class="inline"><b>Денови</b></label>
           <input type="number" id="denovi" name="denovi" min="1" value="1" required><br><br>

           <label for="iznos" class="inline"><b>Износ</b></label>
           <input type="text" id="iznos" name="iznos" value="<?=$_GET['price']?>" disabled="disabled"><br><br><br>

           <input type="hidden" id="iznosVkupno" name="iznosVkupno" value="<?=$_GET['price']?>">

           <img src="sliki/mastercard.png" class="inline cards">
           <img src="sliki/visa.jpg" class="cards inline">

           <div class="margin-left">
           <input type="reset" value="Откажи" class="inline">
           <input type="submit" value="Потврди">
           </div>



        

           
        </form>
    </body>

<script>
    window.addEventListener('load', (event) => {
        var denoviInput = document.getElementById('denovi');
        var iznosInput = document.getElementById('iznos');
        var hiddenInput = document.getElementById('iznosVkupno')

        var pocetenIznos = parseInt(iznosInput.value);
        var denovi = parseInt(denoviInput.value);

        denoviInput.addEventListener('change', function (event){
            iznosInput.value = denoviInput.value * pocetenIznos;
            hiddenInput.value = denoviInput.value * pocetenIznos;
        })
    });
</script>
</html>