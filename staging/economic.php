<?php

function showEconomic() {
?>

<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l9">
		<h1 class="w3-xlarge w3-padding din-bold">Economic Factors</h1>
		<div class="w3-padding"><select id="country_economic" class="w3-select" onchange="change()">
			<option value="" selected disabled hidden>Choose country</option>
			<option value="Philippines">Philippines</option>
			<option value="Japan">Japan</option>
			<option value="Singapore">Singapore</option>
			<option value="Italy">Italy</option>
			<option value="Sweden">Sweden</option>
		</select></div>
		<div class="chartWithMarkerOverlay w3-col l7 w3-padding">
			<div id="country_graph" style="height:350px;">
				<p class="w3-padding">With lockdowns in place in many places in the globe and travel industry hampered in its general operations, coronavirus has become one of the biggest challenges to the economy since the World War II and Spanish pandemic of 1918. Each country has its own respective flavors of impacts in its GDP as contributed by changes in human mobility in places, changes in the environment, and changes in the way work is being done. This section demonstrates the nowcast of GDP growth rate from GIDEON Insights tool and related news articles about the economy of the countries of interest.
				<br/>
				<br/>

				Choose a country in the dropdown above to see nowcasted GDP.
				</p>
			</div>
		</div>
		<div class="w3-col l5" style="padding-right:10px; padding-left:10px; padding-bottom:20px;">
			<h4>News Aggregator</h4>
			<div id="news_aggregator"></div>

		</div>
	</div>
	<div class="w3-col l1">&nbsp;</div>
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
function loadDefaultNews() {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('news_aggregator').innerHTML = this.responseText;
			document.getElementById('default_news').className += " w3-show";
		} else {
			document.getElementById('news_aggregator').innerHTML = "<div class=\"lds-ring\"><div></div><div></div><div></div><div></div></div>";
		}
	}
	xmlhttp.open("GET", "loadNews.php", true);
	xmlhttp.send();
}
loadDefaultNews();

function retrieveNews() {
	console.log('this ran');
	var x = document.getElementsByClassName('newsclass');
	for (var i = 0; i < x.length; i++) {
	x[i].className = x[i].className.replace(" w3-show", "");
}
	var country = document.getElementById('country_economic').value;
	if (country) {
		var ctry_news_id = country + '_news';
		document.getElementById(ctry_news_id).className += " w3-show";
	}
}
</script>




<script>
google.charts.load("current", {packages: ["corechart"]});

function change() {
	retrieveNews();
	var country = document.getElementById('country_economic').value;

	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Quarter'); // Implicit domain column.
		data.addColumn('number', 'Actual GDP'); // Implicit data column.
		data.addColumn('number', 'Predicted GDP');
		data.addColumn({type:'string', role:'annotation'}); // annotation role col.
		data.addRows([
			['2018Q4',2,1.42,null],
			['2019Q1',0.6,0.68,null],
			['2019Q2',1.2,0.72,null],
			['2019Q3',2.3,3.32,null],
			['2019Q4',1.8,1.39,null],
			['2020Q1',-5.1,-4.74,null],
			['2020Q2',,5,'R^2: 0.951']
		]);

		var japan = google.visualization.arrayToDataTable([
			['Quarter', 'Actual GDP', 'Predicted GDP', {type: 'string', role: 'annotation'}],
			['2018Q4',0.6,0.72,null],
			['2019Q1',0.6,0.47,null],
			['2019Q2',0.5,0,null],
			['2019Q3',0,-0.32,null],
			['2019Q4',-1.9,-1.87,null],
			['2020Q1',-0.9,-0.09,'R^2: 0.799'],
			['2020Q2',,-0.51,null]
		]);

		var italy = google.visualization.arrayToDataTable([
			['Quarter', 'Actual GDP', 'Predicted GDP',{type: 'string', role: 'annotation'}],
			['2018Q4',0.1,-1.43,null],
			['2019Q1',0.2,-0.04,null],
			['2019Q2',0.1,0.08,null],
			['2019Q3',0.1,0.59,null],
			['2019Q4',-0.3,0.33,null],
			['2020Q1',-4.7,-4.03,null],
			['2020Q2',,12.37,'R^2: 0.815']
		]);

		var sweden = google.visualization.arrayToDataTable([
			['Quarter', 'Actual GDP', 'Predicted GDP',{type: 'string', role: 'annotation'}],
			['2018Q4',1.3,1.11,null],
			['2019Q1',0.6,0.2,null],
			['2019Q2',-0.2,-0.04,null],
			['2019Q3',0.5,0.85,null],
			['2019Q4',0.1,0.16,null],
			['2020Q1',-0.3,-0.28,null],
			['2020Q2',,0.33,'R^2: 0.806']
		]);

		var singapore = google.visualization.arrayToDataTable([
			['Quarter', 'Actual GDP', 'Predicted GDP',{type: 'string', role: 'annotation'}],
			['2018Q4',-0.8,-1.47,null],
			['2019Q1',2.3,1.41,null],
			['2019Q2',-0.8,-0.47,null],
			['2019Q3',2.2,2.95,null],
			['2019Q4',0.6,0.64,null],
			['2020Q1',-4.7,-4.27,null],
			['2020Q2',,2.17,'R^2: 0.937']
		]);


		var options = {
			title: country,
			legend: { position: 'bottom' },
			annotations: {
				stem: {
					color: 'transparent'
				},
				textStyle: {
					color: 'black',
					bold: true,
					fontName: 'Roboto',
					fontSize: 16
				}
			}
		};
		var chart = new google.visualization.LineChart(document.getElementById('country_graph'));

		switch (country) {
			case 'Philippines':
				chart.draw(data,options);
				break;
			case 'Japan':
				chart.draw(japan,options);
				break;
			case 'Singapore':
				chart.draw(singapore,options);
				break;
			case 'Italy':
				chart.draw(italy,options);
				break;
			case 'Sweden':
				chart.draw(sweden,options);
				break;
			default:
				chart.draw(philippines,options);
				break;
		}
	}
}

</script>

<?php
}
