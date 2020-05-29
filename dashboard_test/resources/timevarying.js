function getChart(file, container, chart, title, type) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			var dates = [];
			var data1 = [];
			var data2 = [];
			var data3 = [];
			var series1 = dataArray[0][2];
			var series2 = dataArray[0][3];
			var series3 = dataArray[0][4];				
			for (i = Math.max(1, dataArray.length - 30); i < dataArray.length - 1; i++) {
				dates.push(dataArray[i][1]);
				data1.push(Number(dataArray[i][2]).toFixed(3));
				data2.push(Number(dataArray[i][3]).toFixed(3));
				data3.push(Number(dataArray[i][4]).toFixed(3));
			}
			drawChart(series1, series2, series3, dates, data1, data2, data3, type, container, chart, title);
		} else {
			document.getElementById(container).innerHTML = "<div class=\"w3-display-container\" style=\"height: 400px;\"><div class=\"lds-heart w3-display-middle\"><div></div></div></div>";
		}
	};
	xmlhttp.open("GET", "resources/data/extractData.php?file=" + file, true);
	xmlhttp.send();
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

function drawChart(series1, series2, series3, dates, data1, data2, data3, chart_type, container, chart, title) {
	document.getElementById(container).innerHTML = '<canvas id="' + chart + '" style="height:400px;"></canvas>';
	loadColors();
    var chartdata = {
        labels: dates,
        datasets: [{
            label: series1,
			fill: false, 
            backgroundColor: window.chartColors.black,
            borderColor: window.chartColors.black,
            data: data1,
            borderWidth: 2,
            yAxisID: 'y1'
        }]
    };

	if (series2) {
		chartdata.datasets.push(
			{
				label: series2,
				fill: false, 
				backgroundColor: window.chartColors.blue,
				borderColor: window.chartColors.blue,
				data: data2,
				borderWidth: 2,
				yAxisID: 'y1'
			}
		);
	}
	
	if (series3) {
		chartdata.datasets.push(
			{
				label: series3,
				fill: false, 
				backgroundColor: window.chartColors.blue,
				borderColor: window.chartColors.blue,
				data: data3,
				borderWidth: 2,
				yAxisID: 'y1'
			}
		);
	}
	
    var ctx = document.getElementById(chart).getContext('2d');
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
                    ticks: {beginAtZero: false}
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
                text: title
            }
		}
	});
	
	switch (chart) {
		case 'covidRtChart' :
			myChart.options.annotation = {
				annotations: [{
					type: 'line',
					id: 'hLine',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 1,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.red, 
					borderDash: [10, 5],
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
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'ECQ', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line', 
					id: 'vLine1', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-04-14', 
					borderWidth: 2, 
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'Mass Testing', 
						enabled: true, 
						position: 'top'
					}
				}]			
			};
			myChart.update();
			break;
		case 'doublingCasesChart' :
			myChart.options.annotation = {
				annotations: [{
					type: 'line',
					id: 'hLine',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 30,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.lime, 
					borderDash: [10, 5],
                	label: {
						content: 'IATF 30-day', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line',
					id: 'hLine1',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 7,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.red, 
					borderDash: [10, 5],
					label: {
						content: 'IATF 7-day', 
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
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'ECQ', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line', 
					id: 'vLine1', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-04-14', 
					borderWidth: 2, 
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'Mass Testing', 
						enabled: true, 
						position: 'top'
					}
				}]			
			};
			myChart.update();
			break;
		case 'doublingDeathsChart' :
			myChart.options.annotation = {
				annotations: [{
					type: 'line',
					id: 'hLine',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 30,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.lime, 
					borderDash: [10, 5],
                	label: {
						content: 'IATF 30-day', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line',
					id: 'hLine1',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 7,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.red, 
					borderDash: [10, 5],
					label: {
						content: 'IATF 7-day', 
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
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'ECQ', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line', 
					id: 'vLine1', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-04-14', 
					borderWidth: 2, 
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'Mass Testing', 
						enabled: true, 
						position: 'top'
					}
				}]			
			};
			myChart.update();
			break;
		case 'doublingRecovChart' :
			myChart.options.annotation = {
				annotations: [{
					type: 'line',
					id: 'hLine',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 30,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.red, 
					borderDash: [10, 5],
                	label: {
						content: 'IATF 30-day', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line',
					id: 'hLine1',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 7,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.lime, 
					borderDash: [10, 5],
					label: {
						content: 'IATF 7-day', 
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
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'ECQ', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line', 
					id: 'vLine1', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-04-14', 
					borderWidth: 2, 
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'Mass Testing', 
						enabled: true, 
						position: 'top'
					}
				}]			
			};
			myChart.update();
			break;
			
		case 'pchangeCasesChart' :
			myChart.options.annotation = {
				annotations: [{
					type: 'line',
					id: 'hLine',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 2.34,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.lime, 
					borderDash: [10, 5],
                	label: {
						content: 'IATF 30-day', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line',
					id: 'hLine1',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 10.41,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.red, 
					borderDash: [10, 5],
					label: {
						content: 'IATF 7-day', 
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
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'ECQ', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line', 
					id: 'vLine1', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-04-14', 
					borderWidth: 2, 
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'Mass Testing', 
						enabled: true, 
						position: 'top'
					}
				}]			
			};
			myChart.update();
			break;

		case 'pchangeDeathsChart' :
			myChart.options.annotation = {
				annotations: [{
					type: 'line',
					id: 'hLine',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 2.34,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.lime, 
					borderDash: [10, 5],
                	label: {
						content: 'IATF 30-day', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line',
					id: 'hLine1',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 10.41,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.red, 
					borderDash: [10, 5],
					label: {
						content: 'IATF 7-day', 
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
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'ECQ', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line', 
					id: 'vLine1', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-04-14', 
					borderWidth: 2, 
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'Mass Testing', 
						enabled: true, 
						position: 'top'
					}
				}]			
			};
			myChart.update();
			break;			

		case 'pchangeRecovChart' :
			myChart.options.annotation = {
				annotations: [{
					type: 'line',
					id: 'hLine',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 2.34,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.red, 
					borderDash: [10, 5],
                	label: {
						content: 'IATF 30-day', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line',
					id: 'hLine1',
					mode: 'horizontal',
					scaleID: 'y1',
					value: 10.41,  // data-value at which the line is drawn
					borderWidth: 2,
					borderColor: window.chartColors.lime, 
					borderDash: [10, 5],
					label: {
						content: 'IATF 7-day', 
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
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'ECQ', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line', 
					id: 'vLine1', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-04-14', 
					borderWidth: 2, 
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'Mass Testing', 
						enabled: true, 
						position: 'top'
					}
				}]			
			};
			myChart.update();
			break;
			
		default :
			myChart.options.annotation = {
				annotations: [{
					type: 'line', 
					id: 'vLine', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-03-15', 
					borderWidth: 2, 
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'ECQ', 
						enabled: true, 
						position: 'top'
					}
				}, {
					type: 'line', 
					id: 'vLine1', 
					mode: 'vertical', 
					scaleID: 'x1', 
					value: '2020-04-14', 
					borderWidth: 2, 
					borderColor: window.chartColors.cyan, 
					label: {
						content: 'Mass Testing', 
						enabled: true, 
						position: 'top'
					}
				}]			
			};
			myChart.update();
			break;		
	}

}

function getDate(file) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			var dates = [];
			for (i = 1; i < dataArray.length - 1; i++) {
				dates.push(dataArray[i][1]);
			}
			document.getElementById('currentDate').innerHTML = dates[dates.length - 1];
			document.getElementById('currentDate1').innerHTML = dates[dates.length - 1];
			document.getElementById('currentDate2').innerHTML = dates[dates.length - 1];
			document.getElementById('currentDate3').innerHTML = dates[dates.length - 1];
			document.getElementById('currentDate4').innerHTML = dates[dates.length - 1];
			document.getElementById('currentDate5').innerHTML = dates[dates.length - 1];
			document.getElementById('currentDate6').innerHTML = dates[dates.length - 1];
		} 
	};
	xmlhttp.open("GET", "resources/data/extractData.php?file=" + file, true);
	xmlhttp.send();
}