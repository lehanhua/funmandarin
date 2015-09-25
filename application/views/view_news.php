<!-- body -->
	<div class="container container-top">
		<div class="page-header">
			<h1>News</h1>
		</div>
	</div>
	<div class="container">
		<div class="col-md-11">
			<?php foreach ($news as $news_item): ?>
				<h2><?= $news_item['title'] ?></h2>
				<p class="main">
					<?= $news_item['text'] ?>
				</p>
				<div>
					<span class="badge"><?php echo $news_item['ts'] ?>
					</span>
					<!-- <div class="pull-right"><span class="label label-info">temptag</span>
					</div><!-- /.pull-right -->       
				</div>
				<hr>
			<?php endforeach ?>
		</div><!-- /.col-md-12 -->
	<ul class="pagination">
	  <li><a href="#">&laquo;</a></li>
	  <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
	  <li><a href="#">2</a></li>
	  <li><a href="#">&raquo;</a></li>
	</ul>
</div><!-- /.container -->