
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
    		
    		<?php $result = $article->result(); ?>
            <!--The article-->
    		<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php 
							if(isset($result[0])):
								$row = $result[0];
						?>
						<div class="page-header">
							<h1 class="text-center"><?=$row->title?>&nbsp;<small><?=$row->author?></small></h1>
						</div>
						<div>
							<p><?=$row->content?></p>
						</div>
						<?php endif; ?>
					</div>
				</div>
    		</div>
    	</div>


    	<hr class="featurette-divider">
    </div>