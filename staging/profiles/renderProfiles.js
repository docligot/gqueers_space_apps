
function extractProfiles() {
	var country = document.getElementById('variable1').value;
	var x = document.getElementsByClassName('country_profile');
	for (var i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace(" w3-show", "");
	}
	if (country) {
		document.getElementById(country).className += " w3-show";
	} else {
		document.getElementById('defaultcountry').className += " w3-show";
	}
}


function loadDefaultCountryPro() {
	console.log("hello loaddef");
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('country_container').innerHTML = this.responseText;
			document.getElementById('defaultcountry').className += " w3-show";
		} else {
			document.getElementById('country_container').innerHTML = "<div class=\"w3-display-container\" style=\"height: 400px;\"><div class=\"lds-heart w3-display-middle\"><div></div></div></div>";
		}
	}
	xmlhttp.open("GET", "images/loadProfiles.php", true);
	xmlhttp.send();
}
