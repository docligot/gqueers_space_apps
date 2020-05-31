function extractMobility() {
	var country = document.getElementById('variable1').value;
	var x = document.getElementsByClassName('country_profile');
	for (var i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace(" w3-show", "");
	}
	var y = document.getElementsByClassName('mobile_text');
	for (var j=0; j<y.length; j++) {
		y[j].className = y[j].className.replace(" w3-show", "");
	}
	var z = country + "_mobile_text";
	if (country) {
		document.getElementById(country).className += " w3-show";
		document.getElementById(z).className += " w3-show";
	}
}


function loadDefaultCountryPro() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('country_container').innerHTML = this.responseText;
			document.getElementById('defaultmap').className += " w3-show";
		} else {
			document.getElementById('country_container').innerHTML = "<div class=\"w3-display-container\" style=\"height: 400px;\"><div class=\"lds-heart w3-display-middle\"><div></div></div></div>";
		}
	}
	xmlhttp.open("GET", "images/loadMobility.php", true);
	xmlhttp.send();
}

function loadDefaultMobileText() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('mobile_text_container').innerHTML = this.responseText;
		}
	}
	xmlhttp.open("GET", "loadMobilityText.php", true);
	xmlhttp.send();
}
