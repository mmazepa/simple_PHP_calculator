<?php
  isset($_POST["liczba1"]) ? $liczba1=$_POST["liczba1"] : $liczba1=0;
  isset($_POST["liczba2"]) ? $liczba2=$_POST["liczba2"] : $liczba2=0;
  isset($_POST["znak"]) ? $znak=$_POST["znak"] : $znak=$signs[0];
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
