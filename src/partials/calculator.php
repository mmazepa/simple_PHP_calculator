<?php
  isset($_POST["number1"]) ? $number1=$_POST["number1"] : $number1=0;
  isset($_POST["number2"]) ? $number2=$_POST["number2"] : $number2=0;
  isset($_POST["sign"]) ? $sign=$_POST["sign"] : $sign=$signs[0];
  $result="";

  switch($sign) {
   case $signs[0]:
     $result=$number1+$number2;
     break;
   case $signs[1]:
     $result=$number1-$number2;
     break;
   case $signs[2]:
     $result=$number1*$number2;
     break;
   case $signs[3]:
     $result=$number1/$number2;
     break;
   case $signs[4]:
     $result=pow($number1,$number2);
     break;
   case $signs[5]:
     $result=pow($number1,1/$number2);
     break;
  }

  echo $result;
?>
