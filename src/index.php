<!DOCTYPE html>
<html lang="pl">
  <head>
  	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
  	<title>Simple calculator | PHP</title>
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
                name="number1"
                size="10"
                value="<?php if(isset($_POST["number1"])){ echo $_POST["number1"]; } ?>"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                required>
        <?php
          (isset($_POST["sign"])) ? $sign = $_POST["sign"] : $sign=$signs[0];
        ?>
        <select name="sign">
          <option disabled="disabled">decide...</option>
          <?php
            for ($i = 0; $i < count($signs); $i++) {
          ?>
            <option
            <?php if($sign==$signs[$i]) echo "selected" ?>
              value="<?php echo $signs[$i] ?>">
                <?php echo $signs[$i] ?>
            </option>
          <?php
            }
          ?>
        </select>
        <input  type="number"
                name="number2"
                size="10"
                value="<?php if(isset($_POST["number2"])) { echo $_POST["number2"]; } ?>"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                required>
        <input type="submit" value="Calculate">
        <output name="wynik" for="number1 number2"></output>
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
