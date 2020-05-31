<?php

function showMethodology() {
?>

<div class="w3-row">
	<div class="w3-col l3 w3-hide-small w3-hide-medium">&nbsp;</div>
  <div class="w3-col l8 w3-margin-left w3-margin-right" style="padding-top:1.5em; padding-bottom:30px; padding-right:10px;">
    <h2 class="din-bold w3-margin-top">METHODOLOGY</h2>
    <h3 class="din-bold">TECHNICAL SOLUTION DETAILS</h3>
    <p>The grading of Manageable, Moderate, and Critical comes from GIDEON's algorithm that models from 4 major variables: covid-19 growth, night light imagery, nitrogen dioxide, and human mobility. Pre-processing of the raw datasets is done to make it ready for the model.</p>
    <p>The model made use of ordinary least squares regression from the variables.</p>
    <h4 class="din-bold">Data Preparation for Night Light Imagery (Proxy for Economic Activity)</h4>
    <p>We captured screenshots of night light from Worldview EOS. Then we processed to extract the colors (RGB values) and then took the ratio of white (light). We took the values of light intensity from HSV. Then we calculated the change in light intensity values from before and during covid-19 pandemic onset.</p>
    <h4 class="din-bold">Data Preparation for GDP Data</h4>
    <p>We encoded the GDP values manually (historical) from 2018 to 2020 from Trading Economics website then plugged it in the model.
    <h4 class="din-bold">Data Preparation for Nitrogen Dioxide (Environmental Impact)</h4>
    <p>With Sentinel as our main image source for offline nitrogen dioxide, the data collection started from July 2018 to the present quarter. We took quarterly screenshots and then processed to extract the colors (RGB values). We separate the R, G, and B bands. We took percent change of the three bands and plugged it in the model.
    <h4 class="din-bold">Data Preparation for Human Mobility (Human Activity)</h4>
    <p>To match the other variables in the study, we aggregated the human mobility data of Google per quarter. Two quarters of data were captured. The available dataset was only from the period of the pandemic from February 15, 2020 to present day.
    <h4 class="din-bold">R<sup>2</sup> Values</h4>
    R<sup>2</sup> values derived from our initial run of the GIDEON model are indicative with values ranging from 0.7 to 0.9.
    <h4 class="din-bold">RELATED LITERATURE</h4>
      <i class="fas fa-rocket"></i> <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4619681/" target="_blank" class="w3-text-blue">Night-Time Light Data: A Good Proxy Measure for Economic Activity </a>
      <br/>
      <i class="fas fa-rocket"></i> <a href="https://www.ncbi.nlm.nih.gov/books/NBK138707/" target="_blank" class="w3-text-blue">WHO Guidelines for Indoor Air Quality: Selected Pollutants</a>
			<br/>
			<i class="fas fa-rocket"></i> <a href="https://www.researchgate.net/publication/332974696_VIIRS_Nighttime_Lights_in_the_Estimation_of_Cross-Sectional_and_Time-Series_GDP" target="_blank" class="w3-text-blue">VIIRS Nighttime Lights in the Estimation of Cross-Sectional and Time-Series GDP</a>
			<br/>
			<i class="fas fa-rocket"></i> <a href="https://doi.org/10.1016/j.scitotenv.2018.04.435" target="_blank" class="w3-text-blue">Long-term trends in NO2 columns related to economic developments and air quality policies from 1997 to 2016 in China</a>
			<br/>
			<i class="fas fa-rocket"></i> <a href="https://doi.org/10.1016/j.atmosenv.2007.09.042" target="_blank" class="w3-text-blue">	Correlation of nitrogen dioxide with other traffic pollutants near a major expressway</a>
			<br/>
			<i class="fas fa-rocket"></i> <a href="https://doi.org/10.1016/j.scitotenv.2015.11.113" target="_blank" class="w3-text-blue">Estimating nitrogen oxides emissions at city scale in China with a nightlight remote sensing model</a>
			<br/>
			<i class="fas fa-rocket"></i> <a href="https://doi.org/10.1016/j.scitotenv.2020.138820" target="_blank" class="w3-text-blue">COVID-19 pandemic and environmental pollution: A blessing in disguise?</a>
			<br/>
			<i class="fas fa-rocket"></i> <a href="https://doi.org/10.1016/j.atmosenv.2014.03.046" target="_blank" class="w3-text-blue">Impact of maritime transport emissions on coastal air quality in Europe, Atmospheric Environment</a>

  </div>


	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10">
	  <footer>
	    <div class="w3-padding w3-black">
	      NASA Space Apps Challenge - Powered by Team Gideon
	    </div>
	  </footer>
	</div>




<?php
}
