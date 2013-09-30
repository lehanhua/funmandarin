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
				<a class="navbar-brand" href="#">FunMandarin Daycare</a>
			</div><!-- end .navbar-header -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li <?php if ($currPage == 'Home') echo 'id="current"' ?>><?= anchor(base_url(), 'Home') ?></li>
					<li <?php if ($currPage == 'News') echo 'id="current"' ?>><?= anchor('', 'News') ?></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Locations<b class="caret"></b></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li><?= anchor('', 'Iowa Ave')?></li>
								<li><?= anchor('', 'Lillian Ave')?></li>
							</ul>
					</li>
					
				</ul>
			</div><!-- end .navbar-collapse -->
		</div>
	</div>
	
	
	
	
	
	
        