<!-- body -->
	<div class="container container-top">
		<div class="page-header">
			<h1>Register</h1>
			<p>Fill out the form below to register for <?= date("Y") ?> classes</p>
		</div>
	</div>
	<div class="container">
		<!-- form selection here -->
		<div class="row">
		<div class="col-md-12">
			<form class="form-inline">
				<div class="form-group">
					<label for="selectClass">Select a class</label>
      				<select id="selectClass" class="form-control">
        				<option>Fun with Hanyu Pinyin</option>
        				<option>Class two</option>
        				<option>Class three</option>
      				</select>
				</div>
			</form>
		</div>
		</div><!-- end .row -->
		<div class="row">
			<div class="col-md-6">
				<?= validation_errors() ?>
				<?= form_open('register') ?>
				<div class="form-group">
					<label for="firstname">First Name</label>
					<input type="input" name="firstname" class="form-control" value="<?= set_value('firstname')?>" placeholder="First Name"/><br />
					<label for="lastname">Last Name</label>
					<input type="input" name="lastname" class="form-control" value="<?= set_value('lastname')?>" placeholder="Last Name"/><br />
				</div>
				<input type="submit" class="btn btn-default" name="submit" value="Register" />
				</form>
			</div><!-- end .col-md-6 -->
			<div class="col-md-6">
				<h2>Class date (Winter 2015)</h2>
				<p>test text</p>
			</div>
		</div><!-- end .row -->
	</div><!-- end .container -->