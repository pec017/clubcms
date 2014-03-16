<div class="row">
	<form action="do_carousel_add" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
		<div class="form-group">
			<label for="c_head" class="col-md-2 control-label">轮播标题</label>
			<div class="col-md-6">
				<input id="c_head" name="c_head" type="text" class="form-control" placeholder="Title">
			</div>
		</div>
		<div class="form-group">
			<label for="c_para" class="col-md-2 control-label">轮播内容</label>
			<div class="col-md-6">
				<textarea id="c_para" name="c_para" class="form-control" rows="4" placeholder="Content"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="c_btn" class="col-md-2 control-label">按钮内容</label>
			<div class="col-md-6">
				<textarea id="c_btn" name="c_btn" class="form-control" rows="4" placeholder="Button content"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="c_img" class="col-md-2 control-label">上传图片(2M)</label>
			<div class="col-md-6">
				<input id="c_img" name="c_img" type="file" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="submit" class="col-md-2 control-label"></label>
			<div class="col-md-6">
				<button id="submit" type="submit" class="btn btn-default">提交</button>			
			</div>
		</div>	
	</form>

	<hr class="featurette-divider">

	<div class="col-md-4">
		<div class="btn-group">
			<button type="button" class="btn btn-danger">删除轮播</button>
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<span>轮播列表<span>
					<span class="caret"></span>
				</button>
				<?php $result = $carousel->result(); ?>
				<ul class="dropdown-menu">
					<?php foreach ($result as $key => $row): ?>
						<li><a href="do_carousel_del/<?=$row->id?>"><?=$row->content_h?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>

</div>