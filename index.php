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
			<h1>Test header to see if I configured my Windows computer correctly.</h1>
			<h1>A basic webpage to be manipulated by javascript.  More to be added later.</h1>
			<p id="color-change" onmouseenter="fontChangeColorMouseOver()" onmouseleave="fontChangeColorMouseOut()">
				The color of this text will change when moused over! Every day is taco ipsum tuesday. Tacos al pastor made with adobada meat. Tacos Al pastor/De Adobada are made of thin pork steaks seasoned with adobo seasoning, then skewered and overlapped on one another on a vertical rotisserie cooked and flame-broiled as it spins. CARNE ASADA!! Tacos for breakfast, lunch and dinner. Does guac cost extra? TACOS!! Tacos al pastor made with adobada meat. Josh’s taco shack is the best taco shack. Yeah, apparently the taco shack was robbed. They left the money but took the tacos.
			</p>
			<p id="font-change" ondblclick="fontChangeFamilyDoubleClick()">
				The font face of this text will change when double-clicked! Burritos are very tasty. Give me all the tacos, immediately. It’s long been rumored that the chupacabra is really just a crazed man who’s local taco shop went out of business. Does guac cost extra? Tacos, again? This will be 5 times this week and it’s only Tuesday. How do you feel about hard shelled tacos? TACOS!! Let’s do a beef and a chicken, and one with both. It’s taco Tuesday Monday. Give me all your tacos.
			</p><br>
			<img id="image-change" src="images/starry-night.jpg" onclick="imageChange()" alt="The Starry Night" />
			<p>This image will change back and forth between two images when clicked!</p>
			<div>
				<label>Enter your heart's desire and submit<input type="text" id="input-field" placeholder="I desire..."></label>
				<button id="button" onclick="submitButton()">Submit</button>
			</div>
		</body>
	</html>