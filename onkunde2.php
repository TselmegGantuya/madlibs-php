<!DOCTYPE html>
<html>
<head>
<link href = "style.css" type = "text/css" rel = "stylesheet">
<title>Madlibs</title>
</head>
<body>
	<h1>Mad Libs</h1>
	<div id="ma">
		<a href = "MADLIBS.php">Er heerst paniek...</a>
		<a href = "onkunde.php">Onkunde</a>
	</div>
	<div id = "list">
		<p>Er zijn veel mensen die niet kunnnen <?php echo $_POST["one"]; ?>. Neem nou <?php echo $_POST["two"]; ?>. Zelfs met de hulp van een <?php echo $_POST["four"]; ?>of zelfs <?php echo $_POST["three"]; ?> kan <?php echo $_POST["two"]; ?> niet <?php echo $_POST["one"]; ?>. Dat heeft niet te maken meteen gebrek aan <?php echo $_POST["five"]; ?>, maar met een te veel aan <?php echo $_POST["sex"]; ?>. Te veel <?php echo $_POST["sex"]; ?> leidt tot <?php echo $_POST["seven"]; ?> en dat is niet goed als je wilt <?php echo $_POST["one"]; ?>. Helaas voor <?php echo $_POST["two"]; ?>.
		</p>
	</div>
<p id="ha"> Deze website is gemaakt door Tselmeg </p>
</body>
</html>