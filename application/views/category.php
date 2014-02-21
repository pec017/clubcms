

    <div class="container">
    	<hr>

    	<div class="row">
            <!--Sidebar nav-->
    		<div class="col-md-3">
    			<?php $result = $category->result(); ?>
    			<ul class="nav nav-pills nav-stacked">
    				<?php foreach ($result as $key => $row): ?>
    				<li><a href="<?=site_url('welcome/category/'.$row->id)?>"><?=$row->name?></a></li>
    				<?php endforeach; ?>
    			</ul>
    		</div>
    		
            <!--list of articles-->
    		<div class="col-md-9">
    			<?php $result = $article->result(); ?>
				<div class="list-group">
					<?php foreach ($result as $key => $row): ?>
					<a href="<?=site_url('welcome/article/'.$row->id)?>" class="list-group-item"><?=$row->title?></a>
					<?php endforeach; ?>			
				</div>
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
    		</div>
    	</div>


    	<hr class="featurette-divider">
    </div>

