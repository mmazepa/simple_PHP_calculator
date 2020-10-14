<!DOCTYPE html>
<html lang="pl">
  <head>
  	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
  	<title>Prosty kalkulator w PHP</title>
  	<link type="text/css" href="assets/css/style.css" rel="stylesheet"></link>
  </head>
  <body>
    <div class="header">
      <h1>Prosty kalkulator</h1>
    </div>
    <div class="main">
      <form method="POST" action="index.php">
        <input type="text" name="liczba1" size="10" value="<php echo @liczba1 ?>">
        <select name="znak">
          <option disabled="disabled">zdecyduj...</option>
          <option selected value="+ (plus)">+ (plus)</option>
          <option value="- (minus)">- (minus)</option>
          <option value="* (razy)">* (razy)</option>
          <option value="/ (podzielić przez)">/ (podzielić przez)</option>
          <option value="√ (pierwiastek stopnia)">√ (pierwiastek stopnia)</option>
        </select>
        <input type="text" name="liczba2" size="10" value="<php echo @liczba2 ?>"><br>
        <input type="submit" value="Oblicz">
        <output name="wynik" for="liczba1 liczba2"></output>
      </form>
      <p>
        <span class="resultLabel">
          Twój wynik to:
        </span>
        <span class="result">
          <?php
            $liczba1=$_POST['liczba1'];
            $liczba2=$_POST['liczba2'];
            $znak=$_POST['znak'];
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
