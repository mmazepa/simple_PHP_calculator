<!DOCTYPE html>
<html lang="pl">
  <head>
  	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
  	<title>Prosty kalkulator w PHP</title>
  	<link type="text/css" href="assets/css/style.css" rel="stylesheet"></link>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
  </head>
  <body>
    <?php require "partials/variables.php"; ?>
    <div class="header">
      <h1><?php echo $title ?></h1>
    </div>
    <div class="main">
      <form method="POST" action="index.php">
        <input  type="number"
                name="liczba1"
                size="10"
                value="<?php if(isset($_POST["liczba1"])){ echo $_POST["liczba1"]; } ?>"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                required>
        <?php
          (isset($_POST["znak"])) ? $znak = $_POST["znak"] : $znak=$signs[0];
        ?>
        <select name="znak">
          <option disabled="disabled">zdecyduj...</option>
          <?php
            for ($i = 0; $i < count($signs); $i++) {
          ?>
            <option
            <?php if($znak==$signs[$i]) echo "selected" ?>
              value="<?php echo $signs[$i] ?>">
                <?php echo $signs[$i] ?>
            </option>
          <?php
            }
          ?>
        </select>
        <input  type="number"
                name="liczba2"
                size="10"
                value="<?php if(isset($_POST["liczba2"])) { echo $_POST["liczba2"]; } ?>"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                required>
        <input type="submit" value="Oblicz">
        <output name="wynik" for="liczba1 liczba2"></output>
      </form>
      <p>
        <span class="resultLabel">
          <?php echo $resultLabel ?>
        </span>
        <span class="result">
          <?php require "partials/calculator.php"; ?>
        </span>
      </p>
    </div>
    <div class="footer">
      Mariusz Mazepa © 2020
    </div>
  </body>
</html>
