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
		<div class="jumbotron">
			<form action="<?=site_url('admin/do_login')?>" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					<h1>管理员登录</h1>
				</div>
				<div class="form-group">
					<label for="username" class="col-md-2 control-label">Username</label>
					<div class="col-md-4">
						<input id="username" name="username" type="text" class="form-control" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-md-2 control-label">Password</label>
					<div class="col-md-4">
						<input id="password" name="password" type="password" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-4">
						<button class="btn btn-default" type="submit">Sign in</button>
					</div>
				</div>
			</form>
		</div>
	</div>



    <script src="<?=base_url('js/jquery-1.10.2.js')?>"></script>
    <script src="<?=base_url('js/bootstrap.js')?>"></script>
</body>
</html>