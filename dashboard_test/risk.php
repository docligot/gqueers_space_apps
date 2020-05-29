<?

function showRisk() {
?>	
	<script>
	MathJax = {
		tex: {inlineMath: [['$', '$'], ['\\(', '\\)']]}
	};
	</script>
	<script id="MathJax-script" async src="resources/es5/tex-chtml.js"></script>
	<script src="resources/risk.js"></script>
	<div id="riskMaps"></div>
	<div class="spacer">&nbsp;</div>
	<div class="w3-row">
		<section id="navBar" class="montserrat w3-sidebar w3-col l2 ambient w3-bar-block w3-hide-medium w3-hide-small">
			<br/>
			<a href="#riskMaps"><div class="w3-bar-item w3-button w3-padding"><i class="far fa-map"></i>&nbsp; Risk Heat Maps</div></a>
			<a href="#aboutThis"><div class="w3-bar-item w3-button w3-padding"><i class="fas fa-book"></i>&nbsp; About</div></a>
			<a href="#modelFramework"><div class="w3-bar-item w3-button w3-padding"><i class="fas fa-square-root-alt"></i>&nbsp; Framework</div></a>
			<a href="#modelIndicators"><div class="w3-bar-item w3-button w3-padding"><i class="fas fa-superscript"></i>&nbsp; Indicators</div></a>
		</section>
		<section id="mainBody" class="w3-row">
			<div class="w3-col l2">&nbsp;</div>
			<div class="w3-col l10">
				<div class="w3-row w3-mobile">
					<div class="w3-half w3-padding">
						<select class="w3-select" id="region" onchange="retrieveMap();">
							<option value="">Select Aggregation:</option>
							<option value="regional">Regional Level</option>
							<option value="provincial">Provincial Level</option>
							<option value="ncr">NCR Level</option>
						</select>
						<select class="w3-select" id="indicator" onchange="retrieveMap();">
							<option value="">Select Indicator:</option>
							<option value="coinform">CO-INFORM Risk</option>
							<option value="hazard">Hazard and Exposure</option>
							<option value="vulnerability">Vulnerability</option>
							<option value="resilience">Lack of Resilience</option>
							<!--<option value="capacity">Resilience Capacity</option>-->
							<option value="covid">Covid Cases</option>
							<option value="critical">Critical Care Bed Demand</option>
							<option value="health">Health Expenditure</option>
							<option value="outbreak">Outbreak</option>
							<option value="fatalities">Potential Fatalities</option>
							<option value="poverty">Poverty Incidence</option>
						</select>
						<h3>CO-INFORM Risk Heat Maps</h3>
						<p>Please select aggregation level and indicators to generate map.</p>
					</div>
					<div class="w3-half">
						<div id="mapcontainer"></div>
					</div>
				</div>
				<div id="aboutThis"></div><br/>
				<hr/>
				<div class="w3-row">
					<div class="w3-center"><h3 class="monteserrat">The CO-INFORM Risk Scoring Dashboard</h3></div>
					<div class="w3-padding">
						<p><b>Lead</b>: Michael Promentilla, PhD and Jomar Rabajante, PhD</p>
						<p><b>Collaborators</b>: Geminn Louis Apostol, MD, MBA; Dominic Ligot, April Anne Tigue, MSc</p>
						<p><b>Description</b>:<br/>
						The COVID-19 risk index is defined as a function of the following dimensions namely: Hazard & Exposure, Vulnerability, and Resilience. This conceptual framework is adapted from the InfoRM model developed by the European Commission’s Joint Research Commission (JRC), which is a global multi-hazard disaster risk assessment tool to identify countries at risk of disaster and humanitarian crisis. The risk concepts used in the model are based on several publications in scientific literature and considers the three dimensions of risk: Hazards & Exposure, Vulnerability, and Lack of Coping Capacity. However, this index is non-specific and some of the indicators may not be available or even relevant to the needs of decision-makers in the context of the COVID-19 epidemic in the country. Thus, we propose a conceptual framework to measure the COVID-19 risk index as shown in Figure 1. This approach is modular and allows for a simple and transparent calculation of epidemic risk using a composite index methodology. Each dimension includes different categories where each category can be broken down by a reliable set of indicators. Geometric aggregation is used to compute the composite index or risk score as shown by the following equation: </p>
						<div class="w3-center"><p>COVID-19 Risk Index $ = {{H^{w1}} \times {V^{w2}} \times {L^{w3}}} $</p></div>
						<ul>
							<li>$ {H^{w1}} $ := Hazard and Exposure</li>
							<li>$ {V^{w2}} $ := Vulnerability</li>
							<li>$ {L^{w3}} $ := Lack of Resilience</li>
						</ul>
						<p>In theory, there is no risk from the COVID-19 epidemic, if there is no exposure, no matter how severe the hazard event is. If there are physical exposure and physical vulnerability, the “hard” risk can be computed and it is considered hazard dependent. The risk is also very low if the person or community is not vulnerable or the resilience to cope and recover is ideal. The “soft” risk can be computed from this second dimension using the concept of vulnerability due to the fragility of the socio-economic system including the susceptibility associated with the low level of awareness, nutritional and health status. These are the social determinants of health and are hazard independent. Likewise, resilience is operationalized and defined by physical infrastructure, health systems capacity, and also institutional and management capacity. Conceptually, better epidemic management to absorb, recover and adapt means higher resilience capacity, which reduces the level of risk from the vulnerability and exposure from this hazard. Likewise, the lack of resilience translates to higher risk overall.</p>
						<p><b>Value to the LGU</b>:</p>
						<p>As a novel risk reduction exercise concurrently developed with the pandemic response, this tool offers numerous utility for decision-makers in the Philippines.</p>
						<ul>
							<li>Risk index comparisons and visualization may potentially accelerate not only national but also district-level actions to the developing pandemic. And when the situation has settled, the risk index could be used as a guide for reducing risks and drafting preparedness plans to mitigate future impacts of such health emergencies.</li>
							<li>Information from the CO-INFoRM index could nudge multi-sectoral actions to aptly respond to the complexity and the nuances of the crisis.</li>
							<li>Proactive communication, such as through a regularly updated visualization, strategically aligns the perceived expectations of the public and the media closer to the actual risks. This communication control mitigates potential negative impressions, ensures accountability, and promotes public trust to preserve an institutions brand equity.</li>
						</ul>
						<div id="modelFramework"></div><br/>
						<p><b>Model Framework</b>:</p>
						<img src="resources/images/coinform_framework.png" style="width: 100%;" />
					</div>
				</div>
				<div class="w3-row">
					<div id="modelIndicators"></div><br/>
					<div class="w3-padding"><b>Notes on the Initial Set of Indicators:</b></div>
					<table class="w3-small w3-table w3-striped w3-bordered w3-hoverable">
						<tr>
							<th>Dimension</th>
							<th>Indicator</th>
							<th>Description and data processing requirement</th>
						</tr>
						<tr>
							<td>$ {H^{w1}} $ <br/>Hazard & Exposure</td>
							<td>Outbreak threshold (Number)</td>
							<td>A number of infected cases that will potentially lead to an outbreak in the area. A lower number means a higher risk. Data were obtained from Epid. Model of <i>Rabajante (R = 2, c = 0.01)</i>. The index is then computed from rescaling the data to a score ranging from 0 to 10 using max-min normalization and inversion. The Min value is 2 and the Max value is set to 100. </td>
						</tr>
						<tr>
							<td>$ {H^{w1}} $ <br/>Hazard & Exposure</td>
							<td>COVID-19 cases (Number per 100,000 population)
							<td>The projected number of infected cases (population-density adjusted) throughout the epidemic period in the area. A higher number means a higher risk. Data were obtained from Epid. Model of <i>Rabajante (R = 2, peak at 25%, base)</i>. It was first normalized with the population of the region and presented as number of cases per 100,000 population. The index is then computed from rescaling the data to a score ranging from 0 to 10 using max-min normalization. The Min value is 0 cases per 100,000 and Max value is the largest value in the data set.</td>
						</tr>
						<tr>
							<td>$ {V^{w2}} $ <br/>Vulnerability</td>
							<td>Poverty incidence (%)</td>
							<td>Proportion of poor in the total number of households in the area as a proxy data for the social vulnerability. A higher number means a higher risk. Raw data were obtained from Rabajante. The index is then computed from rescaling the data to a score ranging from 0 to 10 using max-min normalization. The Min value is 0 and Max value is 50%.</td>
						</tr>
						<tr>
							<td>$ {V^{w2}} $ <br/>Vulnerability</td>
							<td>Number of potential fatalities (Number per a million population)</td>
							<td>Projected number of fatalities considering the age structure of the population and its corresponding case fatality rates. A higher number means a higher risk. It was first normalized with the population of the region and presented as number of cases per a million population. Raw data were obtained from Rabajante. The index is then computed from rescaling the data to a score ranging from 0 to 10 using max-min normalization. The Min value is 0 per million and Max value is the largest value in the data set.</td>
						</tr>
						<tr>
							<td>$ {L^{w3}} $ <br/>Lack of Resilience</td>
							<td>LGU Health expenditure (%)</td>
							<td>The percentage of LGU budget allocated to health. A proxy data for effective governance to respond against health-related crisis. A higher number translates to higher resilience to reduce risk level. Raw data were obtained from Apostol. The index is then computed from rescaling the data to a score ranging from 0 to 10 using max-min normalization and inversion. The Min value is 0 % and Max value is 15%.</td>
						</tr>
						<tr>
							<td>$ {L^{w3}} $ <br/>Lack of Resilience</td>
							<td>Critical care bed demand (number per a million population)</td>
							<td>The projected number of critical cared beds needed by healthcare during peak. A lower demand translates to higher resilience to reduce risk level. The data (ICU beds for critical case, R=2, peak at 25%, base) were obtained from the epid. model of Rabajante. It was first normalized with the population of the region and presented as number of critical care bed per a million population.  The index is then computed from rescaling the data to a score ranging from 0 to 10 using max-min normalization. The Min value is 0 and Max value is the largest value in the data set.</td>
						</tr>
					</table>
					<div class="w3-padding w3-small">
						<p>Reference: <a href="https://sites.google.com/up.edu.ph/initialcovid19phestimates/home" target="_blank"><b>Initial COVID-19 Philippine Provincial Estimates and Projections</b></a></p>
					</div>
				</div>
				<section class="w3-bar w3-black w3-padding-16">
					<div class="w3-padding montserrat w3-xlarge"> 
						<div class="w3-bar-item">Contact Us:</div>
						<a href="https://web.facebook.com/LEADS.HSR" target="_blank"><div class="w3-bar-item"><i class="fab fa-facebook-f"></i></div></a>
						<a href="https://twitter.com/@LEADSconsortium" target="_blank"><div class="w3-bar-item"><i class="fab fa-twitter"></i></div></a>
						<a href="mailto:LEADS.consortium@gmail.com" target="_blank"><div class="w3-bar-item"><i class="fas fa-envelope"></i></div></a>
					</div>
				</section>				
				<footer class="l4hblue w3-bar">
					<a href="./"><div class="w3-small montserrat w3-button w3-bar-item w3-mobile w3-padding-xlarge">&copy; 2020 LEADS Consortium</div></a>
					<a href="./?page=ter#privacy"><div class="w3-small montserrat w3-bar-item w3-mobile w3-button w3-padding-xlarge ">Privacy Policy</div></a>
					<a href="./?page=ter#terms"><div class="w3-small montserrat w3-bar-item w3-mobile w3-button w3-padding-xlarge ">Terms of Use</div></a>
					<a href="https://cirrolytix.com" target="_blank"><div class="w3-small montserrat w3-bar-item w3-mobile w3-padding-xlarge w3-button w3-right">Powered by <b>CirroLytix</b></div></a>
				</footer>	
			</div>
		</section>
	</div>
	<script>
		loadDefaultMap();
	</script>
<?
}