<?php

function showMethodology() {
?>


<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
  <div class="w3-col l10" style="padding-left:10em; padding-right:10em; padding-top:1em; padding-bottom:20px;">
    <h2 class="din-bold w3-margin-top">METHODOLOGY</h2>
    <h3 class="din-bold">TECHNICAL SOLUTION DETAILS</h3>
    The grading of Manageable, Moderate, and Critical comes from GIDEON's algorithm that models from 4 major variables: covid-19 growth, night light imagery, nitrogen dioxide, and human mobility. Pre-processing of the raw datasets is done to make it ready for the model.
    <p>The model made use of ordinary least squares regression from the variables.</p>
    <h4 class="din-bold">Data Preparation for Night Light Imagery (Proxy for Economic Activity)</h4>
    We captured screenshots of night light from Worldview EOS. Then we processed to extract the colors (RGB values) and then took the ratio of white (light). We took the values of light intensity from HSV. Then we calculated the change in light intensity values from before and during covid-19 pandemic onset.
    <h4 class="din-bold">Data Preparation for GDP Data</h4>
    We encoded the GDP values manually (historical) from 2018 to 2020 from Trading Economics website then plugged it in the model.
    <h4 class="din-bold">Data Preparation for Nitrogen Dioxide (Environmental Impact)</h4>
    With Sentinel as our main image source for offline nitrogen dioxide, the data collection started from July 2018 to the present quarter. We took quarterly screenshots and then processed to extract the colors (RGB values). We separate the R, G, and B bands. We took percent change of the three bands and plugged it in the model.
    <h4 class="din-bold">Data Preparation for Human Mobility (Human Activity)</h4>
    To match the other variables in the study, we aggregated the human mobility data of Google per quarter. Two quarters of data were captured. The available dataset was only from the period of the pandemic from February 15, 2020 to present day.
    <h4 class="din-bold">R<sup>2</sup> Values</h4>
    R<sup>2</sup> values derived from our initial run of the GIDEON model are indicative with values ranging from 0.7 to 0.9.
    <h4 class="din-bold">RELATED LITERATURE</h4>
      <i class="fas fa-rocket"></i> Night-Time Light Data: A Good Proxy Measure for Economic Activity https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4619681/
      <br/>
      <i class="fas fa-rocket"></i> WHO Guidelines for Indoor Air Quality: Selected Pollutants: https://www.ncbi.nlm.nih.gov/books/NBK138707/
  </div>
  <div class="w3-col l2">&nbsp;</div>
  <div class="w3-col l10">
    <footer>
			<div class="w3-padding w3-black">
				NASA Space Apps Challenge - Team Gideon
			</div>
		</footer>
</div>




<?php
}
