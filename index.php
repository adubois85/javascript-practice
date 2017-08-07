<!DOCTYPE HTML>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<!-- A custom CSS stylesheet-->
			<link rel="stylesheet" href="css/style.css" type="text/css" />
			<!--A custom Javascript file-->
			<script type="text/javascript" src="scripts/script.js"></script>
			<title>Some Fun With Javascript!</title>
		</head>
		<body>
			<h1>A basic webpage to be manipulated by javascript.  More to be added later.</h1>
			<p id="color-change" onmouseenter="fontChangeColorMouseOver()" onmouseleave="fontChangeColorMouseOut()">The color of this text will change when moused over!</p><br>
			<p id="font-change" ondblclick="fontChangeFamilyDoubleClick()">The font face of this text will change when double-clicked!</p><br>
			<img id="image-change" src="images/starry-night.jpg" onclick="imageChange()" alt="The Starry Night" />
			<p>This image will change to a different one when clicked!</p>
		</body>
	</html>