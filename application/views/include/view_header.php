<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title><?php echo $title ?></title>

   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- start navbar -->
    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav">
                    <li id="<? if ($currPage == 'Home') echo 'current' ?>"><?= anchor(base_url(), 'Home') ?></li>
                    <li id="<? if ($currPage == 'News') echo 'current' ?>"><?= anchor('', 'News') ?></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Locations</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li><?= anchor('', 'Iowa Ave')?></li>
                                <li><?= anchor('', 'Lillian Ave')?></li>
                            </ul>
                    </li>
                    <li id="<? if ($currPage == 'Gallery') echo 'current' ?>"><?= anchor('', 'Gallery') ?></li>
                    <li id="<? if ($currPage == 'About') echo 'current' ?>"><?= anchor('', 'About') ?></li>
                    <li id="<? if ($currPage == 'Contact') echo 'current' ?>"><?= anchor('', 'Contact') ?></li>
                </ul>
            </div>
        </div>
    </div>