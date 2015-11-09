<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="keywords" content="">
	    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	    <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/bootcss.css">
	    <link rel="stylesheet" href="css/home.css">
		<title>更改</title>
		<style type="text/css">
			.foot{
				font-size: 4px;
			}
		</style>
	</head>
	<body>
	<div>
		<nav class="navbar navbar-inverse mybar" role="navigation">
		<div class="navbar-header">
	<a class="navbar-brand" >上海工程技术大学电话导航</a>
	</div>
		<div>
			<h1>更改面板</h1>
			<form action="update.handle.php" method="get">
			<p>部门：<input type="text" name="department"></p>
			<p>科室：<input type="text" name="office"></p>
			<p>地址：<input type="text" name="address"></p>
			<p>电话：<input type="text" name="phone"></p>
			<input type="submit" class="btn btn-primary" value="更改">
			<input type="reset" class="btn btn-primary" value="重置">
			<a href="admin.php" class="btn btn-primary">返回</a>
			</form>	
		</div>

<footer>
		<p class="text-center">©2016-2025 sues.edu.cn,All Rights Reserved. </p>
</footer>
	</body>
</html>