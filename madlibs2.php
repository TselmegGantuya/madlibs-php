<!DOCTYPE html>
<html>
<head>
<link href = "style.css" type = "text/css" rel = "stylesheet">
<title>Madlibs</title>
</head>
<body>
	<h1 >Mad Libs</h1>
	<div id="ma">
		<a href = "MADLIBS.php">Er heerst paniek...</a>
		<a href = "onkunde.php">Onkunde</a>
	</div>
	<div id = "list">
	 	<p>Er heerst paniek in koninkrijk <?php echo $_POST["three"]; ?>. Koning <?php echo$_POST["sex"]; ?>is ten einde raad en als koning <?php echo $_POST["sex"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["two"]; ?>.</p>
	 	<p>"<?php echo $_POST["two"]; ?>! Het is een ramp! Het is een schande!" </p>
	 	<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
	 	<p>"Mijn <?php echo $_POST["one"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["five"]; ?> voor hem gekocht!"</p>
	 	<p>"Majesteit, uw <?php echo $_POST["one"]; ?> komt vast vanzelf weer terug?"<p>
	 	<p>"Ja, da's leuk en aardig, maar  hoe moet ik  in de  tussentijd <?php echo $_POST["eight"]; ?> leren?"</p>
	 	<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["seven"]; ?> voor gebruiken." </p>
	 	<p>"<?php echo $_POST["two"]; ?>, je hebt helemaal gelijk! wat zou ik doen als ik jou niet had."</p>
	 	<p>"<?php echo $_POST["four"]; ?>, Sire."</p>
 	</div>
 	<p id="ha"> Deze website is gemaakt door Tselmeg </p>
</body>
</html>