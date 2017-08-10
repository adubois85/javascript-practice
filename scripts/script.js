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

$(function (){
	var $baconDiv = $('.bacon');
	$.ajax({
		type: 'GET',
		url: 'https://baconipsum.com/api/?type=all-meat&paras=1',
		success: function (raw){
			$.each(raw, function(i, bacon){
				$baconDiv.append('<p> bacon[i] </p>')
			});
		}
	});
});