<?php
require_once("../../model/connect.php");

$id=$_SESSION["i"];

?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="keywords" content="">
	    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	    <link rel="stylesheet" href="../../css/bootstrap.css">
	    <link rel="stylesheet" href="../../css/bootcss.css">
	    <link rel="stylesheet" href="../../css/home.css">
		<title>更改</title>
		<style type="text/css">
			
		</style>
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
			<h1>更改面板</h1>

			<?php 
			
			$sql="select * from suesphone where id ='$id'";
			$query=mysqli_query($con,$sql);
			if($query&&mysqli_num_rows($query))
			{
				while($row = mysqli_fetch_assoc($query))
				{
					$data[] = $row;
				}
			}
			else
				{
					echo "请求不存在";
					exit;
				}
				if(empty($data))
			{
				echo "数据不存在";
			}
			else
			{
				foreach ($data as $k=>$value) 
				{
			?>
			<form action="../../control/update.handle.php" method="get">
			<p>更改部门：<input type="text" name="department" value="<?php echo $value['department']?>"></p>
			<p>更改科室：<input type="text" name="office" value="<?php echo $value['office']?>"></p>
			<p>更改地址：<input type="text" name="address" value="<?php echo $value['address']?>"></p>
			<p>更改电话：<input type="text" name="phone" value="<?php echo $value['phone']?>"></p>
			<p style="display:none">id：<input type="text" name="id" value="<?php echo $value['id']?>"></p>
			<input type="submit" class="btn btn-primary btn-lg" value="更改">
			<input type="reset" class="btn btn-primary btn-lg" value="重置">
			<a href="admin.php" class="btn btn-primary btn-lg">返回</a>
			</form>	
			<?php 
				}
					}
			?>
		</div>

<footer>
		<p class="text-center">©2016-2025 sues.edu.cn,All Rights Reserved. </p>
</footer>
	</body>
</html>
