<!DOCTYPE html>
<html lang="pl">
  <head>
  	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
  	<title>Prosty kalkulator w PHP</title>
  	<link type="text/css" href="assets/css/style.css" rel="stylesheet"></link>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
  </head>
  <body>
    <div class="header">
      <h1>Prosty kalkulator</h1>
    </div>
    <div class="main">
      <form method="POST" action="index.php">
        <input type="text" name="liczba1" size="10" value="<?php echo $_POST["liczba1"] ?>" required>
        <?php
          (isset($_POST["znak"])) ? $znak = $_POST["znak"] : $znak="+ (plus)";
        ?>
        <select name="znak">
          <option disabled="disabled">zdecyduj...</option>
          <option <?php if($znak=="+ (plus)") echo "selected" ?> value="+ (plus)">+ (plus)</option>
          <option <?php if($znak=="- (minus)") echo "selected" ?> value="- (minus)">- (minus)</option>
          <option <?php if($znak=="* (razy)") echo "selected" ?> value="* (razy)">* (razy)</option>
          <option <?php if($znak=="/ (podzielić przez)") echo "selected" ?> value="/ (podzielić przez)">/ (podzielić przez)</option>
          <option <?php if($znak=="√ (pierwiastek stopnia)") echo "selected" ?> value="√ (pierwiastek stopnia)">√ (pierwiastek stopnia)</option>
        </select>
        <input type="text" name="liczba2" size="10" value="<?php echo $_POST["liczba2"] ?>" required>
        <input type="submit" value="Oblicz">
        <output name="wynik" for="liczba1 liczba2"></output>
      </form>
      <p>
        <span class="resultLabel">
          Twój wynik to:
        </span>
        <span class="result">
          <?php
            $liczba1=$_POST["liczba1"];
            $liczba2=$_POST["liczba2"];
            $znak=$_POST["znak"];
            $wynik="";

            switch($znak) {
             case "+ (plus)":
               $wynik=$liczba1+$liczba2;
               break;
             case "- (minus)":
               $wynik=$liczba1-$liczba2;
               break;
             case "* (razy)":
               $wynik=$liczba1*$liczba2;
               break;
             case "/ (podzielić przez)":
               $wynik=$liczba1/$liczba2;
               break;
             case "^ (do potęgi)":
               $wynik=pow($liczba1,$liczba2);
               break;
             case "√ (pierwiastek stopnia)":
               $wynik=pow($liczba1,1/$liczba2);
               break;
            }

            echo $wynik;
          ?>
        </span>
      </p>
    </div>
    <div class="footer">
      Mariusz Mazepa © 2020
    </div>
  </body>
</html>
