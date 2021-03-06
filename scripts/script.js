/**
 * Changes the color of the font when moused over
 */
function fontChangeColorMouseOver() {
	document.getElementById("color-change").style.color = "red";
}

/**
 * Changes the color of the font back when the mouse leaves
 */
function fontChangeColorMouseOut() {
	document.getElementById("color-change").style.color = "#FFFFFF";
}

/**
 * Changes the family of the font when double clicked
 */
function fontChangeFamilyDoubleClick() {
	var fontFamily = ["Comic Sans MS", "Times", "Courier", "Cursive"];
	var num = Math.floor(Math.random() * 4);
	document.getElementById("font-change").style.fontFamily = fontFamily[num];
}

// I normally wouldn't leave dead code in, but I thought it important to see the progression in this case.
// function imageChange() {
// 	var images = ["images/guernica.jpg", "images/starry-night.jpg"];
// 	var num = Math.floor(Math.random() * 2);
// 	document.getElementById("image-change").src = images[num];
// }

/**
 * Changes the image from one to another when clicked
 */

var imageChangeCounter = 0;
function imageChange() {
	if (imageChangeCounter === 0) {
		imageChangeCounter = 1;
		document.getElementById("image-change").src = "images/guernica.jpg";
	} else {
		imageChangeCounter = 0;
		document.getElementById("image-change").src = "images/starry-night.jpg";
	}
}

/**
 * Alerts the user to enter text
 */
function submitButton() {
	window.alert("Really?  Talk about silly.");
}

/**
 * This function will find and replace instaces of the word taco with kitten
 */

function kittyButton() {
	document.body.innerHTML = document.body.innerHTML.replace(/taco/gi, "kitten");
}

// $('.bacon').click(function(){
// 	$.ajax({
// 		type: 'GET',
// 		url: 'https://baconipsum.com/api/?type=all-meat&paras=1',
// 		success: function (data){
// 				$('.bacon').append('<p>'. data .'</p>')
// 			});
// 		}
// 	});
// });

// $baconGet(function(){
// 	var $bacon = $('#bacon-container');
// 	$.ajax({
// 		method: 'GET',
// 		url: 'https://baconipsum.com/api/?type=all-meat&paras=1',
// 		success: function(data) {
// 				$bacon.append('<p>' + data + '</p>');
// 		}
// 	});
// });

// Let's try to do this with flat javascript
// var baconContainer = document.getElementById("bacon-container");
// var baconButton = document.getElementById("bacon-button");
//
// baconButton.addEventListener("click", function() {
// 	var request = new XMLHttpRequest();
// 	request.open('GET', 'https://baconipsum.com/api/?type=all-meat&paras=1');
// 	request.onload = function() {
// 		var data = JSON.parse(request.responseText);
// 		renderHTML(data);
// 	};
// 	request.send();
// });
//
// function renderHTML(jsonData) {
// 	baconContainer.insertAdjacentHTML('beforeend', jsonData);
// }

// Copied from Rochelle's example
/* jQuery AJAX Request */
// This one wasn't working, then I took it to code pen and tried again, and now it works.
// Because of course it does.

$(document).ready(function() {
	$("#bacon-button").click(function() {
		$.ajax({
			method: "GET",
			url: "https://baconipsum.com/api/?type=all-meat&paras=1"
		}).done(function(reply) {
			$("#bacon-container").html(reply);
			console.log("you have jquery flavored bacon!");
		});
	});
});

function makeTacoReplacer(replace) {
	return function() {
		document.body.innerHTML = document.body.innerHTML.replace(/taco/gi, replace);
	}
}

var replaceKitten = makeTacoReplacer("kitten");
var replacePuppy = makeTacoReplacer("puppy");
var replaceKoi = makeTacoReplacer("koi");
var replacePlatypus = makeTacoReplacer("platypus");