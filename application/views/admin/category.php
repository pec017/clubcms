<div class="row">
	<div class="col-md-4">
		<form action="do_category_add" method="post">
			<div class="input-group">
				<input name="category_name" type="text" class="form-control">
				<span class="input-group-btn">
					<button class="btn btn-success" type="submit">添加类别</button>
				</span>
			</div>
		</form>
	</div>	

	<div class="col-md-4 col-md-offset-1">
		<div class="btn-group">
			<button type="button" class="btn btn-danger">删除类别</button>
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<span>类别列表<span>
					<span class="caret"></span>
				</button>
				<?php $result = $category->result(); ?>
				<ul class="dropdown-menu">
					<?php foreach ($result as $key => $row): ?>
						<li><a href="do_category_del/<?=$row->id?>"><?=$row->name?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>	
</div>