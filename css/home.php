<?php
	require_once('connect.php');
	if(!isset($_SESSION["a"]))
	{
		$_SESSION["a"]="1";
		$sql="select * from suesphone";
	}
	else if(empty($_GET["sel"]))
	{
		$sql="select * from suesphone";
	}
	else
	{
		$_SESSION["a"]=$_GET["sel"];
		$sql="select * from suesphone where department='$_SESSION[a]'";
	}
	
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

	$sqli="select distinct department from suesphone";
	$queryi=mysqli_query($con,$sqli);
	if($queryi&&mysqli_num_rows($queryi))
	{
		while($rowi = mysqli_fetch_assoc($queryi))
		{
			$datai[] = $rowi;
		}
	}
	else
	{
		echo "请求不存在";
		exit;
	}

?>

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
		<title>电话簿</title>
	</head>
		<style type="text/css">
			table  tr td {
				border: 2px solid;
				width:5%;
			}
			th{
				border: 2px solid;
				width:5%;
			}
			.mycenter{
				margin: 0 auto;
			}
		</style>
	<body>

<form action="home.php" method="get">
	<select name="sel" name="sel">
<?php
	if(empty($datai))
	{
		echo "数据不存在";
	}
	else
	{
		foreach ($datai as $valuei) 
		{
		?>	
		<option value="<?php echo $valuei['department']?>"><?php echo $valuei['department']?></option>
<?php
		}
	}		
?>
	</select>
	<input type="submit" value="确认">
</form>

	<div >
	<table class="mycenter">
		<tr>
			<th>部门</th><th>科室</th><th>地址</th><th>电话号码</th>
		</tr>
		<?php
			if(empty($data))
			{
				echo "数据不存在";
			}
			else
			{
				foreach ($data as $value) 
				{
		?>
				<tr>
					<td><?php echo $value['department']?></td>
					<td><?php echo $value['office']?></td>
					<td><?php echo $value['address']?></td>
					<td><?php echo $value['phone']?></td>
				</tr>
		<?php
				}
			}	
		?>
	</table>
	</div>
	
	</body>
</html>