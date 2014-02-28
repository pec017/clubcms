<div class="row">
	<div class="col-md-4">
		<div class="btn-group">
			<button type="button" class="btn btn-danger">删除文章</button>
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<span>文章列表<span>
					<span class="caret"></span>
				</button>
				<?php $result = $article->result(); ?>
				<ul class="dropdown-menu">
					<?php foreach ($result as $key => $row): ?>
						<li><a href="do_article_del/<?=$row->id?>"><?=$row->title?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>	
</div>