<?php

function showInsights() {
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
		<div class="w3-small">The pollution, lockdown index, covid-19 growth rate, and GDP values collectively build the model of GIDEON's nowcasting tool for GDP and indicate drastic changes in some countries. An exemplary country to follow is Singapore or Japan whose GDP has remained resilient despite the blows of the pandemic. Italy needs to watch out and take some action before the next GDP quarterly report.</div>
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