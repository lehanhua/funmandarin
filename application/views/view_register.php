<!-- body -->
	<div class="container container-top">
		<div class="page-header">
			<h1>Register</h1>
			<p>Select a school to register for <?= date("Y") ?> classes</p>
			<div class="dropdown">
  				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    				Select School
    			<span class="caret"></span>
				</button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			    <li><a href="#">Cumberland</a></li>
			    <li><a href="#">Hilldale</a></li>
			    <li><a href="#">Synapse</a></li>
			    <li><a href="#">AppleSeed</a></li>
			  </ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 main">
				<div id="cumberland" style="display:none">
					<h2>Cumberland School</h2>
					<p>
  						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>	
						Cumberland Elementary School, 824 Cumberland Drive, Sunnyvale, CA 94087 <a href="#" aria-hidden="true">(show map)</a><p>
						<div class="col-md-4">
							map
						</div>
				</div><!-- end #cumberland -->
				<div id="Hilldale" style="display:none">
					<h2>Hilldale School</h2>
					<p>
  						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>	
						Hilldale School, 79 Florence Street, Daly City, CA 94014 <a href="#" aria-hidden="true">(show map)</a><p>
				</div><!-- end #hilldale -->
			</div><!-- end .main -->
		</div><!-- end .row -->
	</div><!-- end .container -->
