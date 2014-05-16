<?php
function cache($cache = true) {
	$param_value = ($cache === true) ? date('Y') : time();
	return '?' . $param_value;
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Online uw verslag laten beoordelen op onder andere zakelijk schrijven, dubbele woorden en meer!</title>
		<meta name="description" content="">
		<meta name="robots" content="noindex,nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

		<link rel="shortcut icon" href="img/favicon.ico<?= cache(false); ?>">
		<link rel="stylesheet" href="assets/css/normalize.css<?= cache(true); ?>">
		<link rel="stylesheet" href="assets/css/jquery-ui/smoothness/jquery-ui-1.10.4.min.css<?= cache(true); ?>">
		<link rel="stylesheet" href="assets/css/font-awesome-4.1.0/font-awesome.min.css<?= cache(true); ?>">
		<link rel="stylesheet" href="assets/css/bootstrap-3.1.1/bootstrap.min.css<?= cache(true); ?>">
		<link rel="stylesheet" href="assets/css/bootstrap-3.1.1/bootstrap-theme.min.css<?= cache(true); ?>">
		<link rel="stylesheet" href="assets/css/style.css<?= cache(false); ?>">
		
		<script src="assets/js/respond/respond.1.4.2.min.js<?= cache(true); ?>"></script>
		<script src="assets/js/modernizr/modernizr-2.7.1-html5shiv-3.7.min.js<?= cache(true); ?>"></script>
	</head>
	<body>

		<div id="fb-root"></div>
		<script>
			( function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id))
						return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=231008553690190";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>

		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		<div class="page">
			<header>
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h4><i class="fa fa-graduation-cap"></i>D&eacute; studententool van 2014</h4>
						</div>
						<div class="col-sm-6 register">
							<h4><a href="#"><i class="fa fa-child"></i>Aanmelden voor release</a></h4>
						</div>
					</div>
				</div>
			</header>
			<section id="content">
				<div class="container">
					<div id="introduction">
						<h1>Hoe goed is mijn verslag?</h1>
						<h2>Binnekort hier te checken...</h2>
					</div>
					<div class="steps row clearfix">
						<div class="step col-sm-4" id="step_1">
							<h3>1. <i class="fa fa-file-text-o"></i></h3>
							<p>Upload uw verslag</p>
						</div>
						<div class="step col-sm-4" id="step_2">
							<h3>2. <i class="fa fa-magic"></i></h3>
							<p>Let's do the magic!</p>
						</div>
						<div class="step col-sm-4" id="step_3">
							<h3>3. <i class="fa fa-thumbs-o-up"></i></h3>
							<p>Verwerk uw aanbevelingen</p>
						</div>
					</div>
				</div>
			</section>
			<footer>
				<div class="container">
					
				</div>
			</footer>
		</div>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-51036742-1', 'hoegoedismijnverslag.nl');
		 	ga('send', 'pageview');
		</script>
		<script src="assets/js/jquery/jquery-1.11.0.min.js<?= cache(true); ?>"></script>
		<script src="assets/js/jquery-ui/jquery-ui-1.10.4.min.js<?= cache(true); ?>"></script>
		<script src="assets/js/response/response.0.7.12.min.js<?= cache(true); ?>"></script>
		<script src="assets/js/bootstrap/bootstrap.min.js<?= cache(true); ?>"></script>
		<script src="assets/js/main.js<?= cache(false); ?>"></script>
	</body>
</html>