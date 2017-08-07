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

/**
 * Changes the image from one to another when clicked
 */
function imageChange() {
	var images = ["images/guernica.jpg", "images/starry-night.jpg"];
	var num = Math.floor(Math.random() * 2);
	document.getElementById("image-change").src = images[num];
}