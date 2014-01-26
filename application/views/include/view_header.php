<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Lehan Huang">

	<title><?php echo $title ?></title>

	<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
	
	<!-- add IE8 support stuff -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- start navbar -->
    <div class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<!-- gives effect of a button -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url() ?>">FunMandarin</a>
			</div><!-- end .navbar-header -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li <?php if ($currPage == 'About') echo 'id="current"' ?>><?= anchor(site_url('about/'), 'About') ?></li>
					<li <?php if ($currPage == 'News') echo 'id="current"' ?>><?= anchor(site_url('news/'), 'News') ?></li>
					<li <?php if ($currPage == 'Daycare') echo 'id="current"' ?>><?= anchor(site_url('daycare/'), 'Daycare') ?></li>
					<li <?php if ($currPage == 'Classes') echo 'id="current"' ?>><?= anchor(site_url('classes/'), 'Classes') ?></li>
					<li <?php if ($currPage == 'Teacher') echo 'id="current"' ?>><?= anchor(site_url('teachers/'), 'Teachers') ?></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li <?php if ($currPage == 'Contact') echo 'id="current"' ?>><?= anchor(site_url('contact/'), 'Contact') ?></li>
				</ul>
			</div><!-- end .navbar-collapse -->
		</div>
	</div>
	
	
	
	
	
	
        