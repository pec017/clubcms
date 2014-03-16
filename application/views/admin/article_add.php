<div class="row">
	<form action="do_article_add" method="post" class="form-horizontal" role="form">
		<div class="form-group">
			<label for="title" class="col-md-2 control-label">文章标题</label>
			<div class="col-md-6">
				<input id="title" name="title" type="text" class="form-control" placeholder="Article title">
			</div>
		</div>
		<div class="form-group">
			<label for="category" class="col-md-2 control-label">文章类别</label>
			<div class="col-md-6">
				<?php $result = $category->result(); ?>
				<select id="category" name="category_id" class="btn btn-default">
					<?php foreach ($result as $key => $row): ?>
						<option value ="<?=$row->id?>"><?=$row->name?></option>
					<?php endforeach; ?>					
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="content" class="col-md-2 control-label">文章内容</label>
			<div class="col-md-6">
				<textarea id="content" name="content" class="form-control" rows="10" placeholder="Article content"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="submit" class="col-md-2 control-label"></label>
			<div class="col-md-6">
				<button id="submit" type="submit" class="btn btn-default">提交</button>			
			</div>
		</div>
	</form>
</div>