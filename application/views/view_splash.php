</div><!-- end .container for full-width carousel -->
<!-- body -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo base_url('assets/img/jumbotron-bg.jpg')?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Now Enrolling</h1>
              <p>Our Iowa location is now enrolling! Located close to Downtown Sunnyvale, visit us at <?= anchor_popup('https://goo.gl/maps/nzidtYw71Z62', '110 W. Iowa Street, Sunnyvale CA 94086') ?></p>
			  <br />
			  <p><a class="btn btn-lg btn-primary" href="<?= site_url('classes/')?>" role="button">Open Classes</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url('assets/img/jumbotron-bg.jpg')?>" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>FunMandarin</h1>
              <p>Learning Mandarin can be EASY and FUN! <br />
              Enjoy our wonderful curriculum, excellent teachers, and flexible schedules!
              </p><br />
			       <p><a class="btn btn-lg btn-primary" href="<?= site_url('daycare')?>" role="button">See Daycare</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url('assets/img/jumbotron-bg.jpg')?>" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Daycare</h1>
              <p>It is never too early to learn another language! Through lessons, games and hands-on activities we immerse our kids in Chinese culture and prepare them for kindergarten and on. Visit one of our convenient locations in Sunnyvale</p>
              <br />
			  <p><a class="btn btn-lg btn-primary" href="<?= site_url('contact')?>" role="button">Contact Us</a></p>
            </div>
          </div>
        </div>
    </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->
<div class="container" style="padding-top: 20px;">
	<div class="row">
		<div class="col-lg-8">
			<h1 style="margin-top: 0px">趣味中文網 FunMandarin <img class="img-rounded" src="<?= base_url('assets/img/logo.gif')?> "  height="60" width="60" style="vertical-align: text-bottom" alt="logo"></img></h1>
			<p><strong>Welcome to FunMandarin - the best place to learn Mandarin in the Bay Area</strong></p>
			<br />
			<div class="row">
			<div class="col-lg-5">
				<br />
				<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNzAwIj48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjI1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjMxcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NTAweDUwMDwvdGV4dD48L3N2Zz4=">
			</div>
			<div class="col-lg-7">
				<p class="text-justify">Through songs, games, body movements, stories, arts &amp; crafts, and hands-on activities, 
				you will find Mandarin is such an easy language to learn. 
				You will be immersed in a relaxed atmosphere with our native experienced teachers in a small group. 
				You can explore the amazing history of China, its ancient literature, culture and traditions. </p>
				<p class="text-justify">Many holidays and special events will be celebrated with food, music, and dance We will visit with special invited guests who will teach us Chinese Kung Fu, calligraphy, and Chinise painting. 
				Field trips with unique themes are another part of our exciting program.We provide individual lessons and group classes for children and adults. 
				You can also check customized lessons to let us know your request. Tell us what you need and we will design the class for you!</p>
				<p>We know you will enjoy learning Chinese language and culture with FunMandarin.</p>
			</div>
			</div><!-- end .row -->
		</div>
		<div class="col-lg-4">
			<h2>Latest News</h2>
			<h3>New website <small>August 31, 2014</small></h3>
			<p class="text-justify">Hooray! new website! Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec 
			id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> <a href=""> View &gt;&gt; </a>
			<hr />
			
			<h3>New website <small>August 31, 2014</small></h3>
			<p>Hooray! new website! Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec 
			id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> <a href=""> View &gt;&gt; </a>
			<hr />
		</div>
	</div>
</div><!-- ./container -->
<div class="container marketing">
	<!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Classes</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="<?= site_url('classes/') ?>" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Testimonials</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Daycare</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="<?= site_url('daycare/') ?>" role="button">View details &raquo;</a></p>
        </div>
      </div><!-- /.row -->
</div>
