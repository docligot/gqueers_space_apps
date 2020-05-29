<!DOCTYPE HTML>

<html>

<head>
	<title>The LEADS for Health Security and Resilience Consortium</title>
    <link rel="stylesheet" href="resources/css/all.css" />
    <link rel="stylesheet" href="resources/app_css.css" />
    <link rel="stylesheet" href="resources/w3.css" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="canonical" href="http://covid19.psphp.org" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta name="title" content="The LEADS for Health Security and Resilience Consortium" />
    <meta name="description" content="Leading Evidence-based Actions through Data Science for Health Security and Resilience" />
    <meta name="keywords" content="data science for health, health security, health resilience, evidence based medicine" />
    <meta property="og:url" content="http://covid19.psphp.org" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The LEADS for Health Security and Resilience Consortium" />
    <meta property="og:description" content="Leading Evidence-based Actions through Data Science for Health Security and Resilience" />
    <meta property="og:image" content="http://covid19.psphp.org/splash2.jpg" />
    <!--<meta name="twitter:image" content="http://covid19.psphp.org/splash2.jpg" />-->
    <?//include ( 'resources/panel/google_fb_trackers.php');?>
</head>

<body class="tahoma">
	<nav class="w3-top">
		<div class="w3-bar l4hblue w3-card">
			<a href="./"><div class="w3-bar-item w3-button"><img src="favicon.png" height="48" /></div></a>
			<div class="w3-bar-item w3-right w3-button burger" onclick="toggle('sideBar')";><i class="fa fa-bars"></i></div>
		</div>
		<div id="sideBar" class="w3-mobile w3-bar-block w3-center w3-dark-grey w3-hide w3-right">
			<div class="w3-hide-small w3-hide-medium">
				<a href="./?page=tsr">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');"><i class="fas fa-chart-line"></i>&nbsp; <span class="w3-hide-small">Time Varying </span>R Dashboard</div>
				</a>
				<a href="./?page=rid">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');"><i class="fas fa-map-marked-alt"></i>&nbsp; CO-INFORM<span class="w3-hide-small"> Risk Dashboard</span></div>
				</a>
				<hr/>
				<a href="./?page=bd">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');">&nbsp; <span class="w3-hide-small">Breakdown of DOH Cases</div>
				</a>
				<hr/>
				<a href="./">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');">Home</div>
				</a>
				<a href="./#challenge">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');">Our Challenge</div>
				</a>
				<a href="./#value">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');">Our Value</div>
				</a>
				<a href="./#whoWeare">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');">Who We Are</div>
				</a>
				<a href="./?page=faq">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');">FAQ</div>
				</a>
				<a href="./?page=glo">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');">Glossary</div>
				</a>
				<a href="./#contactUs">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');">Contact Us</div>
				</a>
			</div>
			<div class="w3-hide-large">
				<a href="./?page=tsr">
					<div class="w3-bar-item w3-button w3-text-white w3-xxlarge" onclick="toggle('sideBar');"><i class="fas fa-chart-line"></i>&nbsp; <span class="w3-hide-small">Time Varying </span>R Dashboard</div>
				</a>
				<a href="./?page=rid">
					<div class="w3-bar-item w3-button w3-text-white w3-xxlarge" onclick="toggle('sideBar');"><i class="fas fa-map-marked-alt"></i>&nbsp; CO-INFORM<span class="w3-hide-small"> Risk Dashboard</span></div>
				</a>
				<hr/>
				<a href="./?page=bd">
					<div class="w3-bar-item w3-button w3-text-white w3-xlarge" onclick="toggle('sideBar');">&nbsp; <span class="w3-hide-small">Breakdown of DOH Cases</div>
				</a>
				<hr/>
				<a href="./">
					<div class="w3-bar-item w3-button w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Home</div>
				</a>
				<a href="./#challenge">
					<div class="w3-bar-item w3-button w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Our Challenge</div>
				</a>
				<a href="./#value">
					<div class="w3-bar-item w3-button w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Our Value</div>
				</a>
				<a href="./#whoWeare">
					<div class="w3-bar-item w3-button w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Who We Are</div>
				</a>
				<a href="./?page=faq">
					<div class="w3-bar-item w3-button w3-text-white w3-xxlarge" onclick="toggle('sideBar');">FAQ</div>
				</a>
				<a href="./?page=glo">
					<div class="w3-bar-item w3-button w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Glossary</div>
				</a>
				<a href="./#contactUs">
					<div class="w3-bar-item w3-button w3-text-white w3-xxlarge" onclick="toggle('sideBar');">Contact Us</div>
				</a>
			</div>
		</div>
	</nav>

<?
include_once ('home.php');
include_once ('timevarying.php');
include_once ('sankey.php');
include_once ('risk.php');
include_once ('terms.php');
include_once ('faq.php');
include_once ('glossary.php');

if (isset($_GET['page'])) {
	$page = $_GET['page'];
	switch (substr($page,0,3)) {
		case 'tsr':
			showTime();
			break;
		case 'rid':
			showRisk();
			break;
		case 'bd':
			showBD();
			break;	
		case 'ter':
			showTerms();
			break;
		case 'faq':
			showFaq();
			break;
		case 'glo':
			showGlossary();
			break;
		default:
			showHome();
			break;
	}
} else {
	showHome();
}
?>

	<script src="resources/app_js.js"></script>
</body>

</html>
