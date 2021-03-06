<?php if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="HashFlare">
		<meta name="author" content="Kacevnik">
		<title><?php echo $title; ?></title>
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.min.css"/>
		<link rel="stylesheet" type="text/css" href="/css/media.css"/>
		<link rel="stylesheet" type="text/css" href="/css/style.css"/>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript">
			var resultJsonBalans = <?php echo jsonData('balans'); ?>
			var resultJsonMax = <?php echo jsonData('max'); ?>
			var resultJsonMin = <?php echo jsonData('min'); ?>
			var resultJsonMProc = <?php echo jsonData('m_proc'); ?>
			var resultJsonProc = <?php echo jsonData('proc'); ?>
			var SetObject = {kurs: <?php echo getCurs('USD'); ?>, balans_yestoday: <?php echo getMainStatistic()[0]["balans"]; ?>};
		</script>
		 
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>