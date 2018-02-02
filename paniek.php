<!DOCTYPE html>
<html>
<head>
	<title>madlibs-php</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>Mad libs</header>	
	<nav>
		<ul>
			<li><a href="index.html">Er heerst paniek...</a></li>
			<li><a href="onkunde.html">Onkunde</a></li>
		</ul>
	</nav>
	<main>
		<h2>Er heerst paniek...</h2>		
		<p>Er heerst paniek in het koningrijk <?php echo $_POST["3"] ?>, Koning <?php echo $_POST["6"] ?> is ten einde raad en als koning <?php echo $_POST["6"] ?> ten einde raad is, roept hij zijn ten-einde-raadsheer <?php echo $_POST["2"] ?></p>
		<p>"<?php echo $_POST["2"] ?>! Het is een ramp! Het is een schande!"</p>
		<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
		<p>"Mijn <?php echo $_POST["1"] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["5"] ?> voor hem gekocht!"</p>
		<p>"Majesteit, uw <?php echo $_POST["1"] ?> komt vast vanzelf weer terug?"</p>
		<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["8"] ?> leren?"</p>
		<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["7"] ?> voor gebruiken."</p>
		<p>"<?php echo $_POST["2"] ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
		<p>"<?php echo $_POST["4"] ?>, Sire."</p>
	</main>
	<footer>Deze website is gemaakt door Merijn</footer>
</body>
</html>