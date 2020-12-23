<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Charts :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="style/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="style/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="style/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='style/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="style/js/jquery-1.11.1.min.js"></script>
<script src="style/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="style/js/metisMenu.min.js"></script>
<script src="style/js/custom.js"></script>
<link href="style/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

<style>
#chartdiv {
  width: 100%;
  height: 375px;
}
#chartdiv1 {
  width: 100%;
  height: 295px;
}
.jqcandlestick-container {
    width: 100%;
    height: 300px;
}
</style>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<?php 
		include ('leftnavigation.php');
		include ('header.php');
		?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
				<h2 class="title1">Charts</h2>
				<div class="charts">
					<div class="col-md-4 charts-grids widget">
						<div class="card-header">
							<h3>Bar chart</h3>
						</div>
						
						<div id="container" style="width: 100%; height:270px;">
							<canvas id="canvas"></canvas>
						</div>
						<button id="randomizeData">Randomize Data</button>
						<button id="addDataset">Add Dataset</button>
						<button id="removeDataset">Remove Dataset</button>
						<button id="addData">Add Data</button>
						<button id="removeData">Remove Data</button>
						
					</div>
					
					<div class="col-md-4 charts-grids widget states-mdl">
						<div class="card-header">
							<h3>Column & Line Graph</h3>
						</div>
						<div id="chartdiv1"></div>
					</div>
			
					<div class="clearfix"> </div>
				</div>
				
	<!-- for amcharts js -->
			<script src="style/js/amcharts.js"></script>
			<script src="style/js/serial.js"></script>
			<script src="style/js/export.min.js"></script>
			<link rel="stylesheet" href="style/css/export.css" type="text/css" media="all" />
			<script src="style/js/light.js"></script>
	<!-- for amcharts js -->

    <script  src="style/js/index2.js"></script>
		
			<div class="hight-chat charts">
					<div class="col-md-6 w3ls-high charts-grids">
						<div class="hightchat-grid">
							<script type="text/javascript">
							  // Generate data
							  
							  var data = [];
							  
							  var time = new Date('Dec 1, 2013 12:00').valueOf();
							  
							  var h = Math.floor(Math.random() * 100);
							  var l = h - Math.floor(Math.random() * 20);
							  var o = h - Math.floor(Math.random() * (h - l));
							  var c = h - Math.floor(Math.random() * (h - l));

							  var v = Math.floor(Math.random() * 1000);
							  
							  for (var i = 0; i < 30; i++) {
								data.push([time, o, h, l, c, v]);
								h += Math.floor(Math.random() * 10 - 5);
								l = h - Math.floor(Math.random() * 20);
								o = h - Math.floor(Math.random() * (h - l));
								c = h - Math.floor(Math.random() * (h - l));
								v += Math.floor(Math.random() * 100 - 50);
								time += 30 * 60000; // Add 30 minutes
							  }
							</script>
							<h4 class="title">Points</h4>
							<div id="example-1"></div>
						   <script type="text/javascript">
							  $(function() {
								$('#example-1').jqCandlestick({
								  data: data,
								  theme: 'light',
								  series: [{
									color: '#0099cc',
								  }],
								});
							  });
							</script>
							<script type="text/javascript">
							var _gaq = _gaq || [];
							  _gaq.push(['_setAccount', 'UA-36251023-1']);
							  _gaq.push(['_setDomainName', 'jqueryscript.net']);
							  _gaq.push(['_trackPageview']);

							  (function() {
								var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
								ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
								var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
							  })();
							</script>
						</div>
					</div>
					<div class="col-md-6 agileits-high charts-grids"> 
						<div class="hightchat-grid1">  
							<h4 class="title">Multiple y-axis</h4>
							<div id="example-6"></div>
							<script type="text/javascript">
							  $(function() {
								$('#example-6').jqCandlestick({
								  data: data,
								  theme: 'light',
								  series: [{
									type: 'candlestick',
									color: '#ff4f81',
								  }],
								});
							  });
							</script>
						</div>
					</div>
					<div class="clearfix"></div>
			</div>
			
			<!-- for amcharts js -->
			<script src="style/js/amcharts.js"></script>
			<script src="style/js/serial.js"></script>
			<script src="style/js/export.min.js"></script>
			<link rel="stylesheet" href="style/css/export.css" type="text/css" media="all" />
			<script src="style/js/light.js"></script>
			<!-- for amcharts js -->
			
			<div class="charts">
				<div class="col-md-6 charts-grids w3ls-high">
					<h4 class="title">Stacked Bar Chart</h4>
					<div id="chartdiv"></div>
				</div>
				<div class="col-md-6 content-top-2 charts-grids w3ls-high card agileits-high">
				<div class="agileinfo-cdr">
								<div class="card-header">
                                    <h3>Line Graph</h3>
                                </div>
				<!-- start-chart -->
				<div class="content-graph">
				<!--graph-->
				<link rel="stylesheet" href="style/css/graph.css">
				<!--//graph-->
							
								<div class="graph-container">
									
									<div id="graph-lines" sytle="height:400px"> </div>
								</div>
								
								<!-- //graph script -->
								<script src="style/js/jquery.flot.js"></script>
									<script>
									$(document).ready(function () {
									
										// Graph Data ##############################################
										var graphData = [{
												// Visits
												data: [ [6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000] ],
												color: '#34bf49'
											}, {
												// Returning Visits
												data: [ [6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000] ],
												color: '#ff4c4c',
												points: { radius: 4, fillColor: '#fff' }
											}
										];
									
										// Lines Graph #############################################
										$.plot($('#graph-lines'), graphData, {
											series: {
												points: {
													show: true,
													radius: 5
												},
												lines: {
													show: true
												},
												shadowSize: 0
											},
											grid: {
												color: '#7f8c8d',
												borderColor: 'transparent',
												borderWidth: 20,
												hoverable: true
											},
											xaxis: {
												tickColor: 'transparent',
												tickDecimals: 2
											},
											yaxis: {
												tickSize: 1000
											}
										});
									
										// Bars Graph ##############################################
										$.plot($('#graph-bars'), graphData, {
											series: {
												bars: {
													show: true,
													barWidth: .9,
													align: 'center'
												},
												shadowSize: 0
											},
											grid: {
												color: '#7f8c8d',
												borderColor: 'transparent',
												borderWidth: 20,
												hoverable: true
											},
											xaxis: {
												tickColor: 'transparent',
												tickDecimals: 2
											},
											yaxis: {
												tickSize: 1000
											}
										});
									
										// Graph Toggle ############################################
										$('#graph-bars').hide();
									
										$('#lines').on('click', function (e) {
											$('#bars').removeClass('active');
											$('#graph-bars').fadeOut();
											$(this).addClass('active');
											$('#graph-lines').fadeIn();
											e.preventDefault();
										});
									
										$('#bars').on('click', function (e) {
											$('#lines').removeClass('active');
											$('#graph-lines').fadeOut();
											$(this).addClass('active');
											$('#graph-bars').fadeIn().removeClass('hidden');
											e.preventDefault();
										});
									
										// Tooltip #################################################
										function showTooltip(x, y, contents) {
											$('<div id="tooltip">' + contents + '</div>').css({
												top: y - 16,
												left: x + 20
											}).appendTo('body').fadeIn();
										}
									
										var previousPoint = null;
									
										$('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
											if (item) {
												if (previousPoint != item.dataIndex) {
													previousPoint = item.dataIndex;
													$('#tooltip').remove();
													var x = item.datapoint[0],
														y = item.datapoint[1];
														showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
												}
											} else {
												$('#tooltip').remove();
												previousPoint = null;
											}
										});
									
									});
									</script>
									
									<!-- //graph script -->
	
				</div>
			</div>
		</div>
				
				<div class="clearfix"></div>
			</div>
				<script  src="style/js/index.js"></script>
			
			</div>	
				
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
		</div>
        <!--//footer-->
	
	<!-- new added graphs chart js-->
	
    <script src="style/js/Chart.bundle.js"></script>
    <script src="style/js/utils.js"></script>
	
	<script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });
    </script>
	<!-- new added graphs chart js-->

	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="style/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="style/js/jquery.nicescroll.js"></script>
	<script src="style/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="style/js/bootstrap.js"> </script>
   
	<!-- candlestick --><!-- for points and multiple y-axis charts js -->
	<script type="text/javascript" src="style/js/jquery.jqcandlestick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/css/jqcandlestick.css" />
	<!-- //candlestick --><!-- //for points and multiple y-axis charts js -->
		
	<!-- side nav js -->
	<script src='style/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
</body>
</html>