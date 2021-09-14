/**
 * @description  initialization for double highcharts
 * @param {Array} data - data array for chart (get from highcharts.json)
 */
function initHighchartsDouble ( data ) {
	let
		node = this,
		detailChart;

	// create the detail chart
	function createDetail( masterChart ) {

		// prepare the detail chart
		var detailData = [],
			detailStart = data[ 0 ][ 0 ];

		$.each( masterChart.series[ 0 ].data, function () {
			if ( this.x >= detailStart ) {
				detailData.push( this.y );
			}
		});

		// create a detail chart referenced by a global variable
		detailChart = Highcharts.chart(
			node.querySelector( '[data-highcharts-double="detail"]' ),
			{
				chart: {
					type: 'spline',
					reflow: true,
					marginTop: 25,
					marginBottom: 0,
					marginLeft: 5,
					marginRight: 5
				},
				credits: {
					enabled: false
				},
				colors: [ '#9e6cfd' ],
				title: {
					text: null
				},
				subtitle: {
					text: null
				},
				xAxis: {
					type: 'datetime',
					minorTickLength: 0,
					tickLength: 20,
					gridLineWidth: 0,
					lineWidth: 0,
					lineColor: '#2D3035',
					labels: {
						enabled: false
					},
				},
				yAxis: {
					gridLineColor: '#2d3035',
					lineColor: '#2d3035',
					tickColor: '#2d3035',
					tickLength: 10,
					showFirstLabel: false,
					title: {
						text: null
					},
					labels: {
						x: -5
					},
					maxZoom: 0.1
				},
				tooltip: {
					formatter: function() {
						var point = this.points[ 0 ];
						return '<b>' + point.series.name + '</b><br/>' +
							Highcharts.dateFormat( '%A %B %e %Y', this.x) + ':<br/>' +
							'1 USD = ' + Highcharts.numberFormat( point.y, 2 ) + ' EUR';
					},
					shared: true,
					style: {
						fontSize: '16px'
					},
					headerFormat: '',
					footerFormat: '',
					borderWidth: 0,
					borderRadius: 6,
					padding: 6,
					backgroundColor: '#fff',
					pointFormat: ' {series.name}: <span style="color:{point.color}">{point.y}</span>'
				},
				legend: {
					enabled: false
				},
				plotOptions: {
					areaspline: {
						fillOpacity: 0.3,
						marker: {
							enabled: true,
							symbol: 'circle',
							radius: 2,
							states: {
								hover: {
									enabled: true
								}
							}
						}
					},
					series: {
						marker: {
							enabled: false,
							states: {
								hover: {
									enabled: true,
									radius: 3
								}
							}
						}
					}
				},
				series: [{
					name: 'USD to EUR',
					pointStart: detailStart,
					pointInterval: 24 * 3600 * 1000,
					data: detailData,
				}],
				exporting: {
					enabled: false
				}
			}
		); // return chart
	}

	// create the master chart
	function createMaster() {
		Highcharts.chart(
			node.querySelector( '[data-highcharts-double="master"]' ),
			{
				chart: {
					reflow: true,
					marginLeft: 0,
					marginRight: 0,
					marginBottom: 30,
					zoomType: 'x',
					events: {
						// listen to the selection event on the sibling chart to update the
						// extremes of the detail chart
						selection: function( event) {
							var
								extremesObject = event.xAxis[ 0 ],
								min = extremesObject.min,
								max = extremesObject.max,
								detailData = [],
								xAxis = this.xAxis[ 0 ];
							// reverse engineer the last part of the data
							$.each( this.series[ 0 ].data,
								function() {
									if ( this.x > min && this.x < max ) {
										detailData .push( [ this.x, this.y ] );
									}
								}
							);
							// move the plot bands to reflect the new detail span
							xAxis.removePlotBand(
								'mask-before'
							);
							xAxis.addPlotBand({
								id: 'mask-before',
								from: min,
								to: max,
								color: 'rgba(0, 0, 0, 0.05)',
								borderColor: 'rgba(0,0,0,0.1)',
								borderWidth: 1,
							});
							xAxis.removePlotBand(
								'mask-after'
							);
							detailChart.series[ 0 ].setData( detailData );
							return false;
						}
					}
				},
				colors: [ '#9e6cfd' ],
				title: {
					text: null
				},
				xAxis: {
					type: 'datetime',
					lineColor: '#2d3035',
					tickColor: '#2d3035',
					labels: {
						style: {
							color: '#A5A7A9',
							fontSize: '16px'
						}
					},
					showLastTickLabel: true,
					maxZoom: 14 * 24 * 3600000, // fourteen days
					plotBands: [{
						id: 'mask-before',
						from: Date.UTC( 2008, 0, 1),
						to: Date.UTC( 2008, 5, 1),
						color: 'rgba( 0, 0, 0, 0.05 )',
					}],
					title: {
						text: null
					},
					showFirstLabel: false,
					showLastLabel: false
				},
				yAxis: {
					gridLineWidth: 0,
					labels: {
						enabled: false
					},
					title: {
						text: null
					},
					min: 0.6,
					showFirstLabel: false
				},
				tooltip: {
					formatter: function() {
						return false;
					}
				},
				legend: {
					enabled: false
				},
				credits: {
					enabled: false
				},
				plotOptions: {
					series: {
						fillColor: {
							linearGradient: [ '0%', '0%', '100%', '0%' ], // Left Top Right Bot
							stops: [
								[0, 'rgba(148,92,253, 0.1)' ],
								[1, 'rgba(148,92,253, 0.1)' ],
							]
						},
						lineWidth: 1,
						marker: {
							enabled: false
						},
						shadow: false,
						states: {
							hover: {
								lineWidth: 1
							}
						},
						enableMouseTracking: false
					}
				},
				series: [{
					type: 'area',
					name: 'USD to EUR',
					pointInterval: 24 * 3600 * 1000,
					pointStart: Date.UTC( 2006, 0, 1),
					data: data
				}],
				exporting: {
					enabled: false
				}
			},
			function(masterChart) {
				createDetail(masterChart);
			}
		); // return chart instance
	}

	// create master and in its callback, create the detail chart
	createMaster();
}
