<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ratchet template page</title>

		<!-- Sets initial viewport load and disables zooming	-->
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

		<!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!-- Set Apple icons for when prototype is saved to home screen -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="touch-icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="touch-icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="touch-icons/apple-touch-icon-57x57.png">

		<!-- Include the compiled Ratchet CSS -->
		<link rel="stylesheet" href="static/css/ratchet.css">
		<link rel="stylesheet" href="static/css/snap.css">
		<link rel="stylesheet" href="static/css/vine.css">

	</head>
	<body>
	
	<div class="snap-drawers">
		<?PHP require 'drawers.php'; ?>
	</div>