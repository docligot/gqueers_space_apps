<?php

function showMobility() {
?>
<script src="mobility/renderMobility.js"></script>


<div>
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10">
		<h2 class="w3-xlarge w3-padding din-bold">Social Mobility</h2>

	<div class="w3-container w3-padding w3-mobile" >

				<select id="variable1" class="w3-select" onchange="extractMobility();">
          <option value="" selected disabled hidden>Select country to get started</option>
					<option value="Philippines">Philippines</option>
					<option value="Japan">Japan</option>
					<option value="Singapore">Singapore</option>
					<option value="Italy">Italy</option>
					<option value="Sweden">Sweden</option>
				</select>
  </div>
  <hr/>
  <div id="country_container" class="w3-col l8 w3-padding">


  </div>

  <div id="mobile_text_container" class="w3-col l3 w3-padding">

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

loadDefaultCountryPro();
loadDefaultMobileText();



</script>


<?php
}
