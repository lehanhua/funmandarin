</div>
</div><!-- end #wrap -->
<footer class="footer" id="footer">
	<div class="container">
		&copy; Funmandarin LLC <?= date('Y') ?>
		&middot; <?= anchor(site_url('#'), 'Legal')?>
		<!--
		&middot; <?= anchor(site_url('login/'), 'Admin')?>
	-->
		<div class="pull-right">
			Follow Us&nbsp; 
			<a href="https://www.facebook.com/pages/Fun-Mandarin-Learning-Center-LLC/170152323074026" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>&nbsp;
			<a href="http://www.yelp.com/biz/fun-mandarin-day-care-sunnyvale" target="_blank"><i class="fa fa-yelp"></i></a>
		</div>
	</div>
</footer>

<!-- Bootstrap core JavaScript ===================================== -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/js/bootstrap-select.min.js"></script>
<? if (isset($jsFile)) : ?>
<script src="<?php echo base_url('assets/js/'.$jsFile) ?>"></script>
<? endif; ?>
</body>
</html>