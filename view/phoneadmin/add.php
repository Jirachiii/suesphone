<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="keywords" content="">
	    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	    <link rel="stylesheet" href="../../css/bootstrap.css">
	    <link rel="stylesheet" href="../../css/bootcss.css">
	    <link rel="stylesheet" href="../../css/home.css">
		<title>添加</title>
	<script type="text/javascript">
		function back()
		{
			window.history.back();
		}
	</script>

	</head>
	<body>
	<div>
		<nav class="navbar navbar-inverse mybar" role="navigation">
		<div class="navbar-header">
			
			<a class="navbar-brand" >上海工程技术大学电话导航</a>
		</div>
		
		</nav>
	</div>
		<div class="container text-center jumbotron myjub">
			<h1>添加面板</h1>
			<form action="../../control/add.handle.php" method="get">
			<p>添加部门：<input type="text" name="department"></p>
			<p>添加科室：<input type="text" name="office"></p>
			<p>添加地址：<input type="text" name="address"></p>
			<p>添加电话：<input type="text" name="phone"></p>
			<input type="submit" class="btn btn-primary btn-lg" value="添加">
			<input type="reset" class="btn btn-primary btn-lg" value="重置">
			<a a href="javascript:void(0);" onclick="back()" class="btn btn-primary btn-lg">返回</a>
			</form>	
		</div>
		<br><br><br><br><br>
<footer>
		<p class="text-center">©2016-2025 sues.edu.cn,All Rights Reserved. </p>
</footer>
	</body>
</html>