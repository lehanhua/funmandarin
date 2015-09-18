<!-- body -->
<div class="container container-top">
    <div class="page-header">
		<h1>Contact Us</h1>
		<p>We are happy to hear from you whether you are customer with questions, concerns, or just browsing.
		<br />
		Please feel free to contact us.
		</p>
    </div> 
</div>
<div class="container">
	<div class="row">
		<!-- TODO: make this collapse-able or disappear when resized -->
		<div class="col-sm-3 col-md-2">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">Call</a></li>
				<li><a href="#locations">Locations</a></li>
				<li class="disabled"><a href="#message">Message Us</a></li>
			</ul>
        </div>
		<div class="col-sm-9 col-md-10">
			<div>
				<h3>Jamie Chang</h3>
					<p>(408) 250-1631</p>
					<p><?= safe_mailto('leejuang@yahoo.com', 'Email') ?><p>
				<br />
				<h3>Tracy Chang</h3>
					<p>(408) 391-5867</p>
					<p><?= safe_mailto('tracy@funmandarin.com', 'Email') ?><p>
			</div>
			<hr />
			<div>
				<h2 id="locations">Locations</h2>
				<br />
				<h3>FunMandarin Daycare Iowa</h3>
					<p>110 West Iowa Ave</p>
					<p>Sunnyvale, CA 94086</p>
				<h3>FunMandarin Daycare Lillian</h3>
					<p>1345 Lillian Avenue</p>
					<p>Sunnyvale, CA 94087</p>
			</div>
			<hr />
			<!--
			<div>
				<h2 id="message">Message Us</h2>
			</div>
			-->
		</div>
	</div>

</div>