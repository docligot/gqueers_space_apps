<!DOCTYPE HTML>

<html>
<head>
	<title>GIDEON</title>
	<link rel="stylesheet" href="resources/css/all.css"/>
	<link rel="stylesheet" href="resources/w3.css"/>
	<link rel="stylesheet" href="resources/app_css.css" />
	<link rel="stylesheet" href=/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />



</head>

<body class="din">
	<?php include ('topbar.php'); ?>
		<nav>
			<div class="spacer">&nbsp;</div>
			<div class="w3-sidebar w3-col l2 w3-bar-block w3-gray w3-hide-small w3-hide-medium w3-large">
				<?php include ('menu.php'); ?>
			</div>
			<div id="sideBar" class="w3-center w3-sidebar w3-xxlarge w3-animate-left w3-hide w3-col l2 w3-bar-block w3-gray">
				<?php include ('menu.php'); ?>
			</div>
		</nav>
	
	<?php
	
	
	include ('overview.php');
	include ('profiles.php');
	include ('mobility.php');
	include ('economic.php');
	include ('environment.php');
	include ('about.php');

	if (isset($_GET["page"])) {
		$page = $_GET['page'];
		switch ($page) {
			case 'profiles':
				showProfiles();
				break;
			case 'overview':
				showOverview();
				break;
			case 'mobility':
				showMobility();
				break;
			case 'economic':
				showEconomic();
				break;
			case 'environment':
				showEnvironment();
				break;
			default:
				showGideon();
				break;
		}
	} else {
		showGideon();
	}
	?>

<script src="resources/app_js.js"></script>
</body>
</html>