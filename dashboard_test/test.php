<link rel="stylesheet" href="resources/w3.css" />
<script src="resources/chart.bundle.js"></script>
<script src="resources/chartjs-plugin-annotation.js"></script>

<p>Enter file:</p>
<p><input id="file" type="text"></input></p>
<p><button onclick="getData();">Extract</button>
<hr />
<div id="chart-container"></div>
<div id="output" style="height: 300px; overflow: auto;"></div>

<script>

function getData() {
    var file = document.getElementById('file').value;
    if (file) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var dataArray = JSON.parse(this.responseText);
                console.log(dataArray);
				var dates = [];
                var rt = [];
                var rt_low = [];
                var rt_high = [];
				var series1 = dataArray[0][2];
				var series2 = dataArray[0][3];
				var series3 = dataArray[0][4];				
                for (i = 1; i < dataArray.length - 1; i++) {
                	dates.push(dataArray[i][1]);
                	rt.push(Number(dataArray[i][2]).toFixed(2));
                	rt_low.push(Number(dataArray[i][3]).toFixed(2));
					rt_high.push(Number(dataArray[i][4]).toFixed(2));
                }
				console.log(dates);
				console.log(rt);
				console.log(rt_low);
				console.log(rt_high);
                createTable(series1, series2, series3, dates, rt, rt_low, rt_high);
                drawChart(series1, series2, series3, dates, rt, rt_low, rt_high, 'line');
            } else {
                document.getElementById('output').innerHTML = "Loading...";
            }
        };
        xmlhttp.open("GET", "resources/data/extractData.php?file=" + file, true);
        xmlhttp.send();
    }
}

function createTable(series1, series2, series3, dates, rt, rt_low, rt_high) {
    var output = '<table class="w3-table w3-striped">';
    output += '<tr><th>date</th><th>' + series1 + '</th><th>' + series2 + '</th><th>' + series3 + '</th></tr>';
    for (var i in dates) {
        output += '<tr><td>' + dates[i] + '</td><td>' + Number(Number(rt[i]).toFixed(2)).toLocaleString() + '</td><td>' + Number(Number(rt_low[i]).toFixed(2)).toLocaleString() + '</td><td>' + Number(Number(rt_high[i]).toFixed(2)).toLocaleString() + '</td></tr>';
    }
    output += '</table>';
    document.getElementById('output').innerHTML = output;
}

function loadColors() {
    window.chartColors = {
        black: 'rgba(128, 128, 128, 1)',
        white: 'rgba(255, 255, 255, 1)',
        red: 'rgba(255, 128, 128, 1)',
        lime: 'rgba(128, 255, 128, 1)',
        blue: 'rgba(128, 128, 255, 1)',
        yellow: 'rgba(255, 255, 128, 1)',
        cyan: 'rgba(128, 255, 255, 1)',
        magenta: 'rgba(255, 128, 255, 1)',
        ltblack: 'rgba(128, 128, 128, 0.2)',
        ltwhite: 'rgba(255, 255, 255, 0.2)',
        ltred: 'rgba(255, 128, 128, 0.2)',
        ltlime: 'rgba(128, 255, 128, 0.2)',
        ltblue: 'rgba(128, 128, 255, 0.2)',
        ltyellow: 'rgba(255, 255, 128, 0.2)',
        ltcyan: 'rgba(128, 255, 255, 0.2)',
        ltmagenta: 'rgba(255, 128, 255, 0.2)'
    };
}

function drawChart(series1, series2, series3, dates, rt, rt_low, rt_high, chart_type) {
    document.getElementById('chart-container').innerHTML = '<canvas id="myChart" style="height:500px;"></canvas>';
  
	var name = JSON.parse('["' + dates + '"]');
    var data1 = JSON.parse('[' + rt + ']');
    var data2 = JSON.parse('[' + rt_low + ']');
    var data3 = JSON.parse('[' + rt_high + ']');

	loadColors();
    var chartdata = {
        labels: dates,
        datasets: [{
            label: series1,
			fill: false, 
            backgroundColor: window.chartColors.ltblue,
            borderColor: window.chartColors.blue,
            data: rt,
            borderWidth: 2,
            yAxisID: 'y1'
        }, {
            label: series2,
			fill: false, 
            backgroundColor: window.chartColors.ltred,
            borderColor: window.chartColors.red,
            data: rt_low,
            borderWidth: 2,
            yAxisID: 'y1'
        }, {
            label: series3,
			fill: false, 
            backgroundColor: window.chartColors.ltred,
            borderColor: window.chartColors.red,
            data: rt_high,
            borderWidth: 2,
            yAxisID: 'y1'
        }]
    };
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: chart_type,
        data: chartdata,
        options: {
			tooltips: {
				intersect: false, 
				mode: 'x'
			},
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    type: 'linear',
                    display: true,
                    position: 'left',
                    id: 'y1',
                    scaleLabel: {display: true, labelString: series1},
                    ticks: {beginAtZero: true}
                }], 
				xAxes: [{
					display: true, 
					id: 'x1'
				}]
            },
            legend: {
                position: 'bottom',
                labels: {fontFamily: 'Roboto Light'}
            },
            title: {
                display: 'true',
                fontFamily: 'Roboto Light',
                fontSize: 14,
                text: 'Comparison'
            },
			annotation: {
				annotations: [{
					type: 'line',
					id: 'hLine',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 1,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: 'red', 
					label: {
						content: 'Threshold', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line', 
					id: 'vLine', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-03-15', 
					borderWidth: 2, 
					borderColor: 'red', 
					label: {
						content: 'ECQ', 
						enabled: true, 
						position: 'top'
					}
				}]
			}			
        }
    });
}
</script>