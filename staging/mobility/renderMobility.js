function extractMobility() {
	var country = document.getElementById('variable1').value;
	var x = document.getElementsByClassName('country_profile');
	for (var i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace(" w3-show", "");
	}
	if (country) {
		document.getElementById(country).className += " w3-show";
		if (country=='japan') {
			document.getElementById('no2_container').innerHTML += "<div class='w3-content w3-section' style='max-width:500px'><span class='mySlides'>Start</span><img class='mySlides' src='no2/japan/1.png' style='width:100%'><img class='mySlides' src='no2/japan/2.png' style='width:100%'><img class='mySlides' src='no2/japan/3.png' style='width:100%'><img class='mySlides' src='no2/japan/4.png' style='width:100%'><img class='mySlides' src='no2/japan/5.png' style='width:100%'><img class='mySlides' src='no2/japan/6.png' style='width:100%'><img class='mySlides' src='no2/japan/7.png' style='width:100%'><img class='mySlides' src='no2/japan/8.png' style='width:100%'></div>"
			var myIndex = 0;
			carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
			    x[i].style.display = "none";
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}
			  x[myIndex-1].style.display = "block";
			  setTimeout(carousel, 750); // Change image every 2 seconds
			}
		}
	} else {
		document.getElementById('defaultcountry').className += " w3-show";
	}
}


function loadDefaultCountryPro() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('country_container').innerHTML = this.responseText;
			document.getElementById('defaultcountry').className += " w3-show";
		} else {
			document.getElementById('country_container').innerHTML = "<div class=\"w3-display-container\" style=\"height: 400px;\"><div class=\"lds-heart w3-display-middle\"><div></div></div></div>";
		}
	}
	xmlhttp.open("GET", "images/loadMobility.php", true);
	xmlhttp.send();
}
