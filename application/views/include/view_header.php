<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Lehan Huang">

	<title><?php echo $title ?></title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- add IE8 support stuff -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- wrap for sticky footer -->
	<div id="wrap">
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= base_url() ?>">FunMandarin</a>
				</div><!-- end .navbar-header -->
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li <?php if ($currPage == 'About') echo 'class="active"' ?>><?= anchor(site_url('about/'), 'Philosophy') ?></li>
						<li <?php if ($currPage == 'News') echo  'class="active"' ?>><?= anchor(site_url('news/'), 'News') ?></li>
						<li <?php if ($currPage == 'Daycare') echo 'class="active"' ?>><?= anchor(site_url('daycare/'), 'Daycare') ?></li>
						<li <?php if ($currPage == 'Classes') echo 'class="active"' ?>><?= anchor(site_url('classes/'), 'Classes') ?></li>
						<li <?php if ($currPage == 'Teachers') echo 'class="active"' ?>><?= anchor(site_url('teachers/'), 'Teachers') ?></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li <?php if ($currPage == 'Contact') echo 'class="active"' ?>><?= anchor(site_url('contact/'), 'Contact') ?></li>
					</ul>
				</div><!-- end .navbar-collapse -->
			</div>
		</nav>