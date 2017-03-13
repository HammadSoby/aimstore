<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AimStore - @yield('title')</title>

	<link rel="icon" href="/aimstore/images/icon.png" type="icon">
    <link href="/aimstore/css/custom.css" rel="stylesheet">
    <link href="/aimstore/css/bootstrap.min.css" rel="stylesheet">
    <link href="/aimstore/css/datepicker3.css" rel="stylesheet">
    <link href="/aimstore/css/styles.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

	<!-- This is what you need -->
	<link rel="stylesheet" href="/aimstore/sweetalert/sweetalert.css">

    {{--<!--[if lt IE 9]>--}}
    <!--<link href="css/rgba-fallback.css" rel="stylesheet">-->
    <!--<script src="js/html5shiv.js"></script>-->
    <!--<script src="js/respond.min.js"></script>-->
    {{--<![endif]-->--}}

</head>

<body>


@include('partials/header')

@yield('content')

@yield('script')

<script src="/aimstore/js/jquery-1.11.1.min.js"></script>
	<script src="/aimstore/js/bootstrap.min.js"></script>
	{{--<script src="/aimstore/js/chart.min.js"></script>--}}
	{{--<script src="/aimstore/js/chart-data.js"></script>--}}
	{{--<script src="/aimstore/js/easypiechart.js"></script>--}}
	{{--<script src="/aimstore/js/easypiechart-data.js"></script>--}}
	<script src="/aimstore/js/bootstrap-datepicker.js"></script>
	<script src="/aimstore/js/custom.js"></script>
    <script src="/aimstore/js/bootstrap-table.js"></script>
	{{--<script>--}}
	{{--window.onload = function(){--}}
		{{--var chart1 = document.getElementById("line-chart").getContext("2d");--}}
		{{--window.myLine = new Chart(chart1).Line(lineChartData, {--}}
			{{--responsive : true,--}}
			{{--scaleLineColor: "rgba(255,255,255,.2)",--}}
			{{--scaleGridLineColor: "rgba(255,255,255,.05)",--}}
			{{--scaleFontColor: "#ffffff"--}}
		{{--});--}}
		{{--var chart2 = document.getElementById("bar-chart").getContext("2d");--}}
		{{--window.myBar = new Chart(chart2).Bar(barChartData, {--}}
			{{--responsive : true,--}}
			{{--scaleLineColor: "rgba(255,255,255,.2)",--}}
			{{--scaleGridLineColor: "rgba(255,255,255,.05)",--}}
			{{--scaleFontColor: "#ffffff"--}}
		{{--});--}}
		{{--var chart5 = document.getElementById("radar-chart").getContext("2d");--}}
		{{--window.myRadarChart = new Chart(chart5).Radar(radarData, {--}}
			{{--responsive : true,--}}
			{{--scaleLineColor: "rgba(255,255,255,.05)",--}}
			{{--angleLineColor : "rgba(255,255,255,.2)"--}}
		{{--});--}}

	{{--};--}}
	{{--</script>--}}

<script src="/aimstore/sweetalert/sweetalert-dev.js"></script>
@include('sweet::alert')


</body>

</html>