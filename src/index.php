<!DOCTYPE html>
<html lang="pl">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
	<title>mmazepa(first_php)</title>
	<link type="text/css" href="assets/css/style.css" rel="stylesheet"></link>
</head>
<body>

<header>
	<center>
		<p><b>Prosty kalkulator</b><br>
		(<font size=2>pierwszy projekt w PHP</font>)</p>
	</center>
</header>

<center>
	<section>
		<article>
			<form method="POST" action="first_php.php">
				<input type="text" name="liczba1" size="10" value="<php echo @liczba1 ?>">
				<br>
				<select name="znak">
					<option disabled="disabled">zdecyduj...</option>
					<option selected value="+ (plus)">+ (plus)</option>
					<option value="- (minus)">- (minus)</option>
					<option value="* (razy)">* (razy)</option>
					<option value="/ (podzielić przez)">/ (podzielić przez)</option>
				</select>
				<br>
				<input type="text" name="liczba2" size="10" value="<php echo @liczba2 ?>"><br>
				<input type="submit" value="Kalkuluj">
				<br>
				<output name="wynik" for="liczba1 liczba2"></output>
			</form>
		</article>
	</section>
</center>

<br>
<center><b>Twój wynik to:</b>
	<?php
		$liczba1=$_POST['liczba1'];
		$liczba2=$_POST['liczba2'];
		$znak=$_POST['znak'];
		$wynik="";
		switch($znak)
		{
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
		 case "-v/''| (pierwiastek stopnia)":
		   $wynik=pow($liczba1,1/$liczba2);
		   break;
		}
		echo $wynik;
	?>
</center>

<footer>
	<center>
		<p>
			Mariusz Mazepa<br>
			<font size=2>
				(<a href="mailto:mariusz.t.mazepa@gmail.com">mariusz.t.mazepa@gmail.com</a>)
			</font>
		</p>
	</center>
</footer>

</body>
</html>
