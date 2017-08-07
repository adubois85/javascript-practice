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
	var fontFamily = ["Comic Sans", "Helvetica", "Courier", Cursive]
	num = Math.floor(Math.random() * 4)
	document.getElementById("font-change").style.fontFamily = fontFamily[num];
}