<!DOCTYPE HTML>
	<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- A custom CSS stylesheet-->
		<link rel="stylesheet" href="css/style.css" type="text/css" />

		<title>Some Fun With Javascript!</title>
	</head>
	<body>
		<section>
			<div class="jumbotron">
				<div class="container">
					<h1>Test header to see if I configured my Windows computer correctly.</h1>
					<p>A basic webpage to be manipulated by javascript.  More to be added later.</p>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<p id="color-change" onmouseenter="fontChangeColorMouseOver()" onmouseleave="fontChangeColorMouseOut()">
					The color of this text will change when moused over! Every day is taco ipsum tuesday. Tacos al pastor made with adobada meat. Tacos Al pastor/De Adobada are made of thin pork steaks seasoned with adobo seasoning, then skewered and overlapped on one another on a vertical rotisserie cooked and flame-broiled as it spins. CARNE ASADA!! Tacos for breakfast, lunch and dinner. Does guac cost extra? TACOS!! Tacos al pastor made with adobada meat. Josh’s taco shack is the best taco shack. Yeah, apparently the taco shack was robbed. They left the money but took the tacos.
				</p>
				<p id="font-change" ondblclick="fontChangeFamilyDoubleClick()">
					The font face of this text will change when double-clicked! Burritos are very tasty. Give me all the tacos, immediately. It’s long been rumored that the chupacabra is really just a crazed man who’s local taco shop went out of business. Does guac cost extra? Tacos, again? This will be 5 times this week and it’s only Tuesday. How do you feel about hard shelled tacos? TACOS!! Let’s do a beef and a chicken, and one with both. It’s taco Tuesday Monday. Give me all your tacos.
				</p>
			</div>
		</section>
		<section>
			<div class="container">
				<img class="img-responsive" height="400" width="400" id="image-change" src="images/starry-night.jpg"
					  onclick="imageChange()"
					  alt="The
				Starry Night" />
				<p>This image will change back and forth between two images when clicked!</p>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="kitty-button-container">
					<p>This button will find all instances of the word "taco" and replace it with kitten.</p>
					<button class="btn btn-lg btn-danger" id="kitty-button" onclick="kittyButton()">Kitty!</button>
				</div>
				<div class="desire-input-container">
					<label>Enter your heart's desire and submit<input type="text" id="input-field" placeholder="I desire..."></label>
					<button class="btn btn-lg btn-default" id="button" onclick="submitButton()">Submit</button>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="bacon">
					<button id="bacon-button">Mmm, bacon</button>
					<div id="bacon-container">
					</div>
				</div>
			</div>
		</section>
		<!-- linking the jQuery library-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!--A custom Javascript file-->
		<script type="text/javascript" src="scripts/script.js"></script>
		</body>
</html>