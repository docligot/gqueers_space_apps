function retrieveMap() {
	var region = document.getElementById('region').value;
	var indicator = document.getElementById('indicator').value;
	if (region) {
		var x = document.getElementsByClassName('detail');
		for (var i = 0; i < x.length; i++) {
			if (region == 'regional') {
				x[i].className = x[i].className.replace(" w3-show", "");
			} else {
				if (x[i].className.indexOf("w3-show") == -1) {
					x[i].className += " w3-show";
				}
			}
		}
	}
	var x = document.getElementsByClassName('maps');
	for (var i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace(" w3-show", "");
	}	
	if (region && indicator) {
		var id = '20200421'+region+indicator; 
		document.getElementById(id).className += " w3-show";
	} else {
		document.getElementById('defaultmap').className += " w3-show";		
	}
}

function loadDefaultMap() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('mapcontainer').innerHTML = this.responseText;
			document.getElementById('defaultmap').className += " w3-show";		
		} else {
			document.getElementById('mapcontainer').innerHTML = "<div class=\"w3-display-container\" style=\"height: 400px;\"><div class=\"lds-heart w3-display-middle\"><div></div></div></div>";
		}
	}
	xmlhttp.open("GET", "resources/maps/loadMap.php", true);
	xmlhttp.send();
}

