function navbar() {
	var x = document.getElementById("mainNavbar");
	if (x.className === "navbar") {
		x.className += " responsive";
	} else {
		x.className = "navbar";
	}
}