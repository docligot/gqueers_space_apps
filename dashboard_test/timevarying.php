<?

function showTime() {
?>	
	<script src="resources/chart.bundle.js"></script>
	<script src="resources/chartjs-plugin-annotation.js"></script>
	<script src="resources/timevarying.js"></script>
	<script>
	MathJax = {
		tex: {inlineMath: [['$', '$'], ['\\(', '\\)']]}
	};
	</script>
	<script id="MathJax-script" async src="resources/es5/tex-chtml.js"></script>
	<div id="timeVarying"></div>
	<div class="spacer">&nbsp;</div>
	<div class="w3-row">
		<section id="navBar" class="montserrat w3-sidebar w3-col l2 ambient w3-bar-block w3-hide-medium w3-hide-small">
			<br/>
			<a href="#timeVarying"><div class="w3-bar-item w3-button w3-padding">$ R_t $&nbsp; Reproductive Number</div></a>
			<a href="#cfr"><div class="w3-bar-item w3-button w3-padding"><i class="fas fa-book-dead"></i>&nbsp; Case Fatality Rate</div></a>
			<a href="#crr"><div class="w3-bar-item w3-button w3-padding"><i class="far fa-heart"></i>&nbsp; Recovery Rate</div></a>
			<a href="#reportCases"><div class="w3-bar-item w3-button w3-padding"><i class="	fas fa-briefcase-medical"></i>&nbsp; Confirmed Cases</div></a>
			<a href="#reportDeaths"><div class="w3-bar-item w3-button w3-padding"><i class="fas fa-skull"></i>&nbsp; Reported Deaths</div></a>
			<a href="#reportRecov"><div class="w3-bar-item w3-button w3-padding"><i class="fas fa-heartbeat"></i>&nbsp; Reported Recoveries</div></a>
			<a href="#caseCounts"><div class="w3-bar-item w3-button w3-padding"><i class="fas fa-poll"></i>&nbsp; Case Counts</div></a>
			<a href="#aboutThis"><div class="w3-bar-item w3-button w3-padding"><i class="fas fa-book"></i>&nbsp; About</div></a>
		</section>
		<section id="mainBody" class="w3-row">
			<div class="w3-col l2">&nbsp;</div>
			<div class="w3-col l10">
				<div class="w3-row">
					<div class="w3-padding">
						<div class="w3-center"><h3 class="montserrat">Time-Varying Reproductive Number ($ R_t $)</h3></div>
						<div id="covidRtChartContainer"></div>
						<p class="w3-small">Target value is below 1.0, wherein if for consecutive days this is estimated <1.0 then it may suggest that the community has started to effectively control the spread of COVID-19.</p>
						<p class="w3-small">Source: Data current as of <span id="currentDate">recent date</span> sourced from John Hopkins University. Rt based on Cori et. al. (2013).</p>
					</div>
					<div id="cfr" class="spacer"></div>
					<div class="w3-padding">
						<div class="w3-center"><h3 class="montserrat">Case Fatality Rate ($ CFR_t $)</h3></div>
						<div id="cfrChartContainer"></div>
						<p class="w3-small">This is synonymous to the risk of death of a confirmed case in real-time adjusted for the expected time-delay between case confirmation date and actual death. No actual target value, but the hope is to observe this gradually declining towards a rate that can be comparable to the lower end of global estimates (from 0.14% in SG to 14.58% in BEL, Source: <a href="https://www.cebm.net/covid-19/global-covid-19-case-fatality-rates/" target="_blank"><b>Global Covid 19 Case Fatality Rates</b></a>). If for consecutive days we observe this to be decreasing, then this may suggest that the community is able to provide sufficient quality care to severe cases leading to less deaths than expected.</p>
						<p class="w3-small">Source: Data current as of <span id="currentDate1">recent date</span> sourced from John Hopkins University. CFR calculations based on Nishura et. al. (2020), Garske, et al. (2009), and Shim et. al. (2020).</p>
					</div>
					<div id="crr" class="spacer"></div>
					<div class="w3-padding">
						<div class="w3-center"><h3 class="montserrat">Crude Recovery Rate</h3></div>
						<div id="recovChartContainer"></div>
						<p class="w3-small">Source: Data current as of <span id="currentDate2">recent date</span> sourced from John Hopkins University.</p>
					</div>
				</div>
				<br/>
				<div id="reportCases"></div></br>
				<hr/>
				<div class="w3-row">
					<div class="w3-center"><h3 class="montserrat">Confirmed Cases</h3></div>
					<div class="w3-padding w3-half">
						<div class="w3-center"><h4>Growth Rate Cases</h4></div>
						<div id="pchangeCasesContainer"></div>
						<p class="w3-small">Growth of 2.34% or lower (equivalent to 30 day doubling time) shows slowing down of outbreak.</p>
					</div>
					<div class="w3-padding w3-half">
						<div class="w3-center"><h4>Doubling Time Cases</h4></div>
						<div id="doublingCasesContainer"></div>
						<p class="w3-small">Doubling time of 30 days or higher is ideal to show slowing down of outbreak.</p>
					</div>
				</div>
				<br/><div class="w3-small w3-padding">Source: Data current as of <span id="currentDate3">recent date</span> sourced from John Hopkins University.</div>
				<div id="reportDeaths"></div><br/>
				<hr/>				
				<div class="w3-row">
					<div class="w3-center"><h3 class="montserrat">Reported Deaths</h3></div>
					<div class="w3-padding w3-half">
						<div class="w3-center"><h4>Growth Rate Deaths</h4></div>
						<div id="pchangeDeathsContainer"></div>
						<p class="w3-small">Growth of 2.34% or lower (equivalent to 30 day doubling time) shows slowing down of outbreak.</p>
					</div>
					<div class="w3-padding w3-half">
						<div class="w3-center"><h4>Doubling Time Deaths</h4></div>
						<div id="doublingDeathsContainer"></div>
						<p class="w3-small">Doubling time of 30 days or higher is ideal to show slowing down of outbreak.</p>
					</div>
				</div>
				<br/><div class="w3-small w3-padding">Source: Data current as of <span id="currentDate4">recent date</span> sourced from John Hopkins University.</div>
				<div id="reportRecov"></div><br/>
				<hr/>					
				<div class="w3-row">
					<div class="w3-center"><h3 class="montserrat">Reported Recoveries</h3></div>
					<div class="w3-padding w3-half">
						<div class="w3-center"><h4>Growth Rate Recoveries</h4></div>
						<div id="pchangeRecovContainer"></div>
						<p class="w3-small">Recoveries growth should be higher than deaths.</p>
					</div>
					<div class="w3-padding w3-half">
						<div class="w3-center"><h4>Doubling Time Recoveries</h4></div>
						<div id="doublingRecovContainer"></div>
						<p class="w3-small">Recoveries doubling should be as low as possible to show health sector ability to nurse cases back to health.</p>
					</div>
				</div>
				<br/><div class="w3-small w3-padding">Source: Data current as of <span id="currentDate5">recent date</span> sourced from John Hopkins University.</div>
				<div id="caseCounts"></div><br/>
				<hr/>
				<div class="w3-row">
					<div class="w3-center"><h3 class="montserrat">Philippines Case Counts</h3></div>
					<div class="w3-padding w3-half">
						<div id="countCasesContainer"></div>
						<p class="w3-small">Confirmed cases is total cumulative cases reported. Active cases excludes deaths and recoveries.</p>
					</div>
					<div class="w3-padding w3-half">
						<div id="countDeathRecovContainer"></div>
						<p class="w3-small">Deaths and recoveries are total cumulative reported. </p>
					</div>
				</div>
				<div class="w3-row">
					<div class="w3-padding w3-half">
						<div id="diffCasesContainer"></div>
						<p class="w3-small">Daily cases is net new cases reported. Active cases excludes deaths and recoveries reported. </p>
					</div>
					<div class="w3-padding w3-half">
						<div id="diffDeathRecovContainer"></div>
						<p class="w3-small">Daily deaths and recoveries are net new deaths and recoveries reported.</p>
					</div>
				</div>
				<div class="w3-small w3-padding">Source: Data current as of <span id="currentDate6">recent date</span> sourced from John Hopkins University.</div>
				<div id="aboutThis"></div><br/>
				<hr/>
				<div class="w3-row">
					<div class="w3-center"><h3 class="monteserrat">The COVID-19 Time Series Dashboard</h3></div>
					<div class="w3-padding">
						<p><b>Lead</b>: Peter Julian Cayton, PhD</p>
						<p><b>Collaborators</b>: Robert Leong, MSc, PhD(c), Dominic Ligot, Jan Gil Sarmiento</p>
						<p><b>Description</b>:<br/>
						These are time series data on the developments of the COVID-19 in the country. It provides up-to-date information on the trends in infections, movements as reaction to policies, and targets for flattening the curve. More importantly, it can provide valuable insights about the community control of COVID-19.</p>
						<p><b>Value to the LGU</b>:</p>
						<p>If provided with data from the LGUs, we can provide data that will give insights on the state of COVID-19 in the local area. In particular, the metrics to be displayed can provide a real-time evaluation of how transmissible is COVID-19 in the locality subject to control measures and testing practices imposed as data are collected. The key metrics currently available at the moment (and their utility):</p>
						<ul>
							<li><b>Effective (real-time) reproduction number</b> - measures the current transmissibility, on average, of a single infection in a community (i.e., how many people, on average, will be infected by a single infection under the prevailing community conditions). This is technically defined as the average number of secondary cases that each infected individual would infect if the conditions remained as they were instantaneously, and is computed as (Cori et al., 2013):
								<p class="w3-hide-small">$$R_t = {{E[\Delta]} \over {\sum \Delta I_{t-s} \omega_s}}$$</p>
								<p class="w3-hide-large w3-hide-medium">$R_t = {{E[\Delta]} \over {\sum \Delta I_{t-s} \omega_s}}$</p>
								<ul>
									<li>$ {E[\Delta]} $ := expected number of new infections in day <i>t</i></li>
									<li>$ {\sum \Delta I_{t-s} \omega_s} $ := weighted average of the number of secondary cases caused by previous new infections, weighted by the probability distribution of the serial interval</li>
								</ul>
								<p>The serial interval (SI) is the time between the onset of symptom of the first infected to the onset of symptoms of the secondary cases. Assumed in our calculations is that SI follows a lognormal distribution with mean 4.8 days and standard deviation 2.3 days (from Nishiura et al., 2020).</p>
							</li>				
							<li><b>Delay-adjusted confirmed case fatality (CFR) rate</b> - measures the risk of death of a confirmed case in real-time adjusted for the expected time-delay between case confirmation date and actual death (i.e. to reflect the average time it takes between reporting of confirmation of cases up to reporting of death if it happens). This is computed as (Nishiura et al., 2010):
								<p class="w3-hide-small">$$ CFR_t = {{D_t} \over {{{\sum \Delta I_u F (t-u) } \over C_t } \times (C_t - R_t - D_t) + R_t + D_t } } $$</p>
								<p class="w3-hide-large w3-hide-medium">$ CFR_t $ = $ D_t $ / (($ {\sum \Delta I_u F (t-u) } $ / $ C_t $ </sub>) x $ (C_t - R_t - D_t) + R_t + D_t) $
								<ul>
									<li>$ D_t $ := total number of deaths at time <i>t</i></li>
									<li>$ R_t $ := total number of recoveries at time <i>t</i></li>
									<li>$ C_t $ := total number of confirmed cases at time <i>t</i></li>
									<li>$ {{\sum \Delta I_u F (t-u) } \over C_t } $ := delay-adjustment factor applied to cases not yet reported to be closed (either recovered or died) at time t which provides how many cases are expected to  have been closed by t considering they have reported as confirmed in time <i>t - u</i> (as not all closed cases, especially recoveries, may have been completely reported)</li>
								</ul>
								<p>The delay distribution F in our calculations assumed a gamma distribution with mean 10.1 days and standard deviation 5.4 days (Shim, et. al. 2020).</p>
							</li>
							<li><b>Crude Recovery Rate</b> - is the ratio of the total cumulative recoveries $ R_t $ and the cumulative number of infected cases $ I_t $.
								<p class="w3-hide-small">$$ RecovRate = {R_t \over I_t} $$ </p> 
								<p class="w3-hide-large w3-hide-medium">RecovRate = $ R_t $ / $ I_t $</p>
							</li>
							<li><b>Percent Change</b> $ p_t $ - is the daily growth in cases, deaths, and recoveries. For $ Y_t $ time series, the percent change series $ p_{t,Y} $ is
								<p class="w3-hide-small">$$ p_{t,Y} = {{Y_t - Y_{t-1}} \over {Y_{t-1}}} $$</p>					
								<p class="w3-hide-large w3-hide-medium">$ p_{t,Y} $ = $ Y_t - Y_{t-1} $ / $ Y_{t-1} $</p>
							</li>
							<li><b>Implied Doubling Rate</b> $ d_t $ - is the defined length of time for the present value of variable to double given the prevailing rate of increase. It is based on the compound accumulation model. Suppose $ A_0 $ is the starting value, $ p $ is the percent change of increase for every time period, and <i>d</i> is the doubling rate, measured in units of the time period. Then, the compound accumulation model for doubling is:
								<p class="w3-hide-small">$$ 2A_0 = {A_0(1+p)^d} $$</p>
								<p class="w3-hide-large w3-hide-medium">$ 2A_0 $ = $ A_0(1 + p) $</p>
							<p>Solving for $ d $ in terms of $ p $ is:</p>
								<p class="w3-hide-small">$$ d = {{ln(2)} \over {ln(1+p)}} $$</p>
								<p class="w3-hide-large w3-hide-medium">$ ln(2) $ / $ ln(1 + p) $</p>
							<p>Since there is a time series $ p_{t,Y} $ from time series $ Y_t $, then the implied doubling rate for $ Y_t $ is:</p>
								<p class="w3-hide-small">$$ d_{t,Y} = {{ln(2)} \over {ln(1+p_{t,Y})}} $$</p>
								<p class="w3-hide-medium w3-hide-large">$ d_{t,Y} $ = $ ln(2) / ln(1 + p_{t,Y}) $</p>
							<p>The two time series $ p_{t,Y} $ and $ d_{t,Y} $ are similar in terms of information, but both are presented for interested readers. Since doubling time is related to growth rate, calculating for equivalent percentage growth from doubling rate:</p>
								<p class="w3-hide-small">$$ p_{t,Y} = {e^{ln(2) \over d_{t,Y}}-1} $$</p>
								<p class="w3-hide-large w3-hide-medium">$ p_{t,Y} $ = $ {e^{{ln(2)} / d_{t,Y}}-1} $</p>
							</li>
						</ul>
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
		getDate('covid_rt');
		getChart('covid_rt', 'covidRtChartContainer', 'covidRtChart', 'Time Varying Reproductive Number', 'line');
		getChart('cfr4_ci', 'cfrChartContainer', 'cfrChart', 'Case Fatality Rate', 'line');
		getChart('recov_rate', 'recovChartContainer', 'recovChart', 'Crude Recovery Rate', 'line');
		getChart('pchange_cases', 'pchangeCasesContainer', 'pchangeCasesChart', '% Change in Cases', 'line');
		getChart('pchange_deaths', 'pchangeDeathsContainer', 'pchangeDeathsChart', '% Change in Deaths', 'line');
		getChart('pchange_recov', 'pchangeRecovContainer', 'pchangeRecovChart', '% Change in Recoveries', 'line');
		getChart('doubling_cases', 'doublingCasesContainer', 'doublingCasesChart', 'Implied Doubling Times - Cases', 'line');
		getChart('doubling_deaths', 'doublingDeathsContainer', 'doublingDeathsChart', 'Implied Doubling Times - Deaths', 'line');
		getChart('doubling_recov', 'doublingRecovContainer', 'doublingRecovChart', 'Implied Doubling Times - Recoveries', 'line');
		getChart('active_cases', 'countCasesContainer', 'countCasesChart', 'Cumulative Confirmed and Active Cases', 'line');
		getChart('count_death_recov', 'countDeathRecovContainer', 'countDeathRecovChart', 'Cumulative Deaths vs. Recoveries', 'line');
		getChart('diff_active', 'diffCasesContainer', 'diffCasesChart', 'Daily Confirmed vs. Net Active Cases', 'bar');
		getChart('diff_death_recov', 'diffDeathRecovContainer', 'diffDeathRecovChart', 'Daily Deaths vs. Recoveries', 'bar');
	</script>
<?
}