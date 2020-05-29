<?php

function showProfiles() {
?>

<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10">
		<h2 class="w3-xlarge w3-padding din-bold">Country Profiles</h2>
		
	<div class="w3-row">
			<div class="w3-col l3 w3-padding">
				<select id="variable1" class="w3-select" onchange="extractProfiles();">	
					<option value="Philippines">Philippines</option>
					<option value="Japan">Japan</option>
					<option value="Singapore">Singapore</option>
					<option value="Italy">Italy</option>
					<option value="Sweden">Sweden</option>
				</select>
		<hr/>
		<div class="w3-small">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>
		</div>
		<div class="w3-col l9 w3-padding">
				<canvas id="canvas" style="width:100%; height: 460px;"></canvas>
			</div>
		</div>
		<footer>
			<div class="w3-padding w3-black">
				NASA Space Apps Challenge - Team Gideon by CirroLytix
			</div>
		</footer>
	
</div>
</div>


<?php
}