<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>百度俱乐部</title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/bootstrap.css')?>">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h1>浙江大学百度俱乐部 <small>主站后台管理系统</small></h1>
			<ul class="nav nav-pills">
				<li class="active"><a href="#">在线</a></li>
				<li><a href="#">注销</a></li>
			</ul>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="info">个人设置</a></li>
					<li><a href="category">类别管理</a></li>
					<li><a href="article_add">新增文章</a></li>
					<li><a href="#">修改文章</a></li>
					<li><a href="article_del">删除文章</a></li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading"><?=$title?></div>
					<div class="panel-body">
						<?=$content?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<hr class="featurette-divider">
        <footer>
            <p class="pull-right"><a class="btn" href="#">Back to top</a></p>
            <p>Copyright © 2014 ZJU <a href="#">Baidu Club</a></p>
        </footer>
    </div>

    <script src="<?=base_url('js/jquery-1.10.2.js')?>"></script>
    <script src="<?=base_url('js/bootstrap.js')?>"></script>
</body>
</html>