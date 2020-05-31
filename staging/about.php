<?php

function showGideon() {
?>

<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10">
		<h2 class="w3-xlarge w3-padding din-bold">TEAM GIDEON FOR THE NASA SPACE APPS CHALLENGE</h2>
		<div class="w3-padding">
			<p>General Impact Detection using Emitted Light, Onset of Covid-19, and Nitrogen Dioxide<br>The odds of the pandemic to the economy are against us.<br>Let's beat the odds with satellite data using GIDEON's nowcast tool. </p>

			<p>Many impacts of COVID-19 are reflected in socio-economic and epidemiologic data (e.g. unemployment statistics, infection rates, and mobility and transportation data). However, combining socio-economic data with Earth Observation (EO) data can enhance our understanding of and generate new insights regarding the effects of COVID-19.</p>

			<p>At the time of this writing, over 5.9 million people tested positive with Covid-19. Only 43% have recovered.</p>

			<p>While most solutions are looking at direct health impact, the economy is also taking a hit from the pandemic.</p>

			<p>Countries with the most economic damage risk need to take more informed action to save their GDP even before the GDP quarterly reports are out. Low GDP countries do not typically have strong statistical analysis of their economy. Policy makers need to make quicker decisions in the face of the crisis. As such, non-traditional GDP parameters need to be used.</p> 

			<h3 class="w3-large din-bold">THE SOLUTION</h3>
			<p>Instead of the traditional way that waits for quarterly updates to see the integrated generic economic health of a country, we nowcast GDP.</p>
			<p>Satellite data updates more frequently than traditional GDP predictors. Policy makers can take quicker action with insights derived. Project G.I.D.E.O.N. (General Impact Detection using Emitted Light, Onset of Covid-19, and Nitrogen Dioxide) makes use of historical quarterly GDP, emitted light (proxy variable for income), onset of covid-19 growth, and environmental factors (nitrogen dioxide content in a country) to predict GDP values sooner.</p>
			<p>Nowcasting GDP means the countries no longer have to wait until the official GDP quarterly data has been posted before they take action.</p>
			<h3 class="w3-large din-bold">THIS DASHBOARD PROTOTYPE</h3>
			<p>Our dashboard mainly indicates a health status of a country's upcoming GDP change in the next quarter into three categories: Manageable, Moderate, and Critical. It also allows zooming in on factors of social mobility, economics, and environment damage.</p>
			<p>The "traffic light" system produced by our solution can inform policy makers about certain economic decisions. If the dip in the GDP is caused by mobility, for example, easing lockdown may be essential to jumpstart the economic activity of the country and have the GDP recovery.</p>
			<h3 class="w3-large din-bold">FUTURE DEVELOPMENTS</h3>
			<p><b>Gideon Insights</b> will produce additional historical information and overlay additional variables to improve the data modeling for GDP nowcasting. Due to the limited time of the hackathon, only a few countries' satellite imagery data were reasonably collected to study the indicative relationships. We will also make a more sophisticated geospatial analysis beyond the prototyping stage if given the chance to develop the project.</p>
			<h3 class="w3-large din-bold">DATA SOURCES</h3>
			<ol>Suomi NPP/VIIRS Nighttime Imagery from https://worldview.earthdata.nasa.gov/</ol>
			<ol>Sentinel 5P Offline Nitrogen Dioxide from https://developers.google.com/earth-engine/datasets/catalog/COPERNICUS_S5P_OFFL_L3_NO2</ol>
			<ol>GDP from Trading Economics https://tradingeconomics.com/country-list/gdp-growth-rate</ol>
			<ol>[Map] Satellite Imagery of MODIS thermal hotspots from ArcGIS Online</ol>
			<ol>[Map] AirNow Air Quality Monitoring Site Data from ArcGIS Online</ol>
			<ol>[Map] AirPollutant Concentration Data from ArcGIS Online</ol>
			<ol>Google's Mobility Data during Global Lockdowns https://www.google.com/covid19/mobility/</ol>
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