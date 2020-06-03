<?php

function showInsights() {
?>
<script src="profiles/renderProfiles.js"></script>

<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10">
		<h2 class="w3-xlarge w3-padding din-bold">Country Profiles</h2>

	<div class="w3-row">
			<div class="w3-col l3 w3-padding">
				<select id="variable1" class="w3-select" onchange="extractProfiles();">
					<option value="defaultcountry">Select Specific Country:</option>
					<option value="philippines">Philippines</option>
					<option value="japan">Japan</option>
					<option value="Singapore">Singapore</option>
					<option value="Italy">Italy</option>
					<option value="Sweden">Sweden</option>
				</select>
		<hr/>
		<div class="w3-medium">The night lights and NO2 data indicates drastic changes in some countries. An exemplary country to follow is Italy whose GDP has remained resilient despite the blows of the pandemic. Japan needs to watch out and take some action before the next GDP quarterly report. Other countries like Singapore, Sweden, and Philippines have moderate change.</div>
		</div>
		<div class="w3-col l9 w3-padding">
				<div id="country_container"></div>
			</div>
		</div>

</div>
</div>
<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10">
		<footer>
			<div class="w3-padding w3-black" style="position:fixed; bottom:0; width:100%">
				NASA Space Apps Challenge - Powered by Team Gideon
			</div>
		</footer>
	</div>
</div>

<script>
function loadDefaultCountryPro() {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('country_container').innerHTML = this.responseText;
			document.getElementById('defaultcountry').className += " w3-hide";
		} else {
			document.getElementById('country_container').innerHTML = "<div class=\"w3-display-container\" style=\"height: 400px;\"><div class=\"lds-heart w3-display-middle\"><div></div></div></div>";
		}
	}
	xmlhttp.open("GET", "images/loadProfiles.php", true);
	xmlhttp.send();
}
loadDefaultCountryPro();

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
  setTimeout(carousel, 500); // Change image every 2 seconds
}
</script>


<?php
}
