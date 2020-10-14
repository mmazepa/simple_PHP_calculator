<!DOCTYPE html>
<html lang="pl">
  <head>
  	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
  	<title>Prosty kalkulator w PHP</title>
  	<link type="text/css" href="assets/css/style.css" rel="stylesheet"></link>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
  </head>
  <body>
    <?php
      $title = "Prosty kalkulator";
      $signs = [
        "+ (plus)",
        "- (minus)",
        "* (razy)",
        "/ (podzielić przez)",
        "^ (do potęgi)",
        "√ (pierwiastek stopnia)"
      ];
      $resultLabel = "Twój wynik to:";
    ?>
    <div class="header">
      <h1><?php echo $title ?></h1>
    </div>
    <div class="main">
      <form method="POST" action="index.php">
        <input type="number" name="liczba1" size="10" value="<?php echo $_POST["liczba1"] ?>" required>
        <?php
          (isset($_POST["znak"])) ? $znak = $_POST["znak"] : $znak=$signs[0];
        ?>
        <select name="znak">
          <option disabled="disabled">zdecyduj...</option>
          <option
            <?php if($znak==$signs[0]) echo "selected" ?>
            value="<?php echo $signs[0] ?>">
              <?php echo $signs[0] ?>
            </option>
          <option
            <?php if($znak==$signs[1]) echo "selected" ?>
            value="<?php echo $signs[1] ?>">
              <?php echo $signs[1] ?>
            </option>
          <option
            <?php if($znak==$signs[2]) echo "selected" ?>
            value="<?php echo $signs[2] ?>">
              <?php echo $signs[2] ?>
            </option>
          <option
            <?php if($znak==$signs[3]) echo "selected" ?>
            value="<?php echo $signs[3] ?>">
              <?php echo $signs[3] ?>
            </option>
          <option
            <?php if($znak==$signs[4]) echo "selected" ?>
            value="<?php echo $signs[4] ?>">
              <?php echo $signs[4] ?>
            </option>
          <option
            <?php if($znak==$signs[5]) echo "selected" ?>
            value="<?php echo $signs[5] ?>">
              <?php echo $signs[5] ?>
            </option>
        </select>
        <input type="number" name="liczba2" size="10" value="<?php echo $_POST["liczba2"] ?>" required>
        <input type="submit" value="Oblicz">
        <output name="wynik" for="liczba1 liczba2"></output>
      </form>
      <p>
        <span class="resultLabel">
          <?php echo $resultLabel ?>
        </span>
        <span class="result">
          <?php
            $liczba1=$_POST["liczba1"];
            $liczba2=$_POST["liczba2"];

            $znak=$_POST["znak"];
            $wynik="";

            switch($znak) {
             case $signs[0]:
               $wynik=$liczba1+$liczba2;
               break;
             case $signs[1]:
               $wynik=$liczba1-$liczba2;
               break;
             case $signs[2]:
               $wynik=$liczba1*$liczba2;
               break;
             case $signs[3]:
               $wynik=$liczba1/$liczba2;
               break;
             case $signs[4]:
               $wynik=pow($liczba1,$liczba2);
               break;
             case $signs[5]:
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
