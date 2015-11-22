<?php
	require_once('../../model/connect.php');

	if(!isset($_SESSION["b"]))
	{
		$_SESSION["b"]="1";
		$sql="select * from suesphone order by department limit $offset,$pagesize";
		$total_sql="select count(*) from suesphone";
	}
	else if(empty($_GET["sel"]))
	{
		if($_SESSION["b"]=="1")
		{
			$sql="select * from suesphone order by department limit $offset,$pagesize";
			$total_sql="select count(*) from suesphone";
		}
		else
		{
			$sql="select * from suesphone where department='$_SESSION[b]' limit $offset,$pagesize";
			$total_sql="select count(*) from suesphone where department='$_SESSION[b]'";
		}
	}
	else
	{
		$_SESSION["b"]=$_GET["sel"];
		$sql="select * from suesphone where department='$_SESSION[b]' limit $offset,$pagesize";
		$total_sql="select count(*) from suesphone where department='$_SESSION[b]'";
	}
	
	$total_result=mysqli_fetch_array(mysqli_query($con,$total_sql));
	$total=$total_result[0];
	$total_page=ceil($total/$pagesize);

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
		session_destroy(); 
		echo"<script>window.location.href='admin.php';</script>";
		
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
	    <link rel="stylesheet" href="../../css/bootstrap.css">
	    <link rel="stylesheet" href="../../css/bootcss.css">
	    <link rel="stylesheet" href="../../css/home.css">
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
			.tth{
				width:2%;
			}
		</style>
<body onload="autoRowSpan(document.getElementById('tb'),0,0)">
	<nav class="navbar navbar-inverse mybar" role="navigation">
			<div class="navbar-header">

				<a class="navbar-brand" >上海工程技术大学电话导航</a>
			</div>

	</nav>
	<div class="container">
	<form action="admin.php" method="get">
		<select name="sel" name="sel" class="myselect">
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
		<input class="btn btn-primary" type="submit" value="查询">
		<a href="add.php" class="btn btn-primary pull-right">添加条目</a>
		<br>
		<br>
		<input type="button" value="显示全部" onclick="window.location.href='../../control/admin_all.php'" class="btn btn-primary pull-right" >
	</form>
	</div>
	<br>

	<!-- 分页条-->
	<div class="container">
	<?php
		$page_banner="<div class='page'>";
		$pageoffset=($showpage-1)/2;
		$start=1;
		$end=$total_page;

		if($page>1)
		{	
			$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=1'>首页</a>";
			$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($page-1)."'>上一页</a>";
		}
		else
		{
			$page_banner.="<span class='disable' >首页</span>";
			$page_banner.="<span class='disable'>上一页</span>";
		}
		if($total_page>$showpage)
			{
				if($page>$pageoffset+1)
				{
					$page_banner.="...";
				}
				if($page>$pageoffset)
				{
					$start=$page-$pageoffset;
					$end=$total_page>$page+$pageoffset?$page+$pageoffset:$total_page;
				}
				else
				{
					$start=1;
					$end=$total_page>$showpage?$showpage:$total_page;
				}
				if($page+$pageoffset>$total_page)
				{
					$start=$start-($page+$pageoffset-$end);
				}
			}

		for($i=$start;$i<=$end;$i++)
		{
			if($page==$i)
			{
				$page_banner.="<span class='current'>{$i}</span>";
			}
			else
			{
				$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".$i."'>{$i}&nbsp;</a>";
			}
		}
		if($total_page>$showpage&&$total_page>$page+$pageoffset)
		{
			$page_banner.="...";
		}
		if($page<$total_page)
		{
			$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($page+1)."'>下一页</a>";
			$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($total_page)."'>尾页</a>";
		}
		else
		{
			$page_banner.="<span class='disable'>下一页</span>";
			$page_banner.="<span class='disable'>尾页</span>";
		}
		$page_banner.="<br><br><br>"."总共{$total_page}页&nbsp;&nbsp;&nbsp;";
		$page_banner.="<form action='admin.php' method='get'>";
		$page_banner.="到第<input type='text' name='p' class='text'>页";
		$page_banner.="<input type='submit' class='btn btn-primary' value='查询'>";
		$page_banner.="</form></div>";
		echo $page_banner;
	?>
	</div>
	<br>

	<div class="container">
	<table id="tb">
		<tr>
			<th>部门</th><th>科室</th><th>地址</th><th>电话号码</th><th class="tth">操作</th>
		</tr>
		<?php
			if(empty($data))
			{
				echo "数据不存在";
			}
			else
			{
				foreach ($data as $k=>$value)
				{
		?>

			<form onsubmit="return confirm('确定执行该操作吗？');"action="../../control/delete.handle.php" method="get">
				<tr>
					<td name="department"><?php echo $value['department']?></td>
					<td name="office"><?php echo $value['office']?></td>
					<td name="address"><?php echo $value['address']?></td>
					<td name="phone"><?php echo $value['phone']?></td>
					<td class="tth"><button  class="btn btn-warning mybtn2" type="submit" name="it" value="<?php echo $value['id']?>">更改</button><button class="btn btn-danger mybtn2"type="submit" name="id" value="<?php echo $value['id']?>" >删除</button></td>

				</tr>
			</form>
		<?php
				}
			}
		?>
	</table>

	</div>
	<br>
	<br>
	<footer>
			<p class="text-center">©2016-2025 sues.edu.cn,All Rights Reserved. </p>
	</footer>
</body>
	<script type="text/javascript">
		function autoRowSpan(tb,row,col)
		{
			var lastValue="";
			var value="";
			var pos=1;
			for(var i=row;i<tb.rows.length;i++)
			{
				value = tb.rows[i].cells[col].innerText;
				if(lastValue == value)
				{
					tb.rows[i].deleteCell(col);
					tb.rows[i-pos].cells[col].rowSpan = tb.rows[i-pos].cells[col].rowSpan+1;
					pos++;
				}else{
					lastValue = value;
					pos=1;
				}
			}
		}
	</script>
</html>