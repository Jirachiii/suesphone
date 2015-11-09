<?php
require_once("connect.php");
if(empty($_GET)&&(!isset($_GET)))
{
	echo "<script> alert('出现异常，操作失败，请联系管理员');
	window.location.href='admin.php';
		</script>";
}
else if(empty($_GET["department"]))
{
	echo "<script> alert('添加部门不能为空');
	window.location.href='add.php';
		</script>";
}
else if(empty($_GET["office"]))
{
	echo "<script> alert('添加科室不能为空');
	window.location.href='add.php';
		</script>";
}
else if(empty($_GET["phone"]))
{
	echo "<script> alert('添加电话不能为空');
	window.location.href='add.php';
		</script>";
}
else
{
	$department=$_GET["department"];
	$office=$_GET["office"];
	$address=$_GET["address"];
	$phone=$_GET["phone"];
	$sql="insert into suesphone(phone,department,office,address) values('$phone','$department','$office','$address')";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo "<script> alert('插入成功，现在返回管理员页面');
		window.location.href='admin.php';
			</script>";
	}
	else
	{
		echo "<script>alert('插入异常，请联系管理员');</script>";
	}
}
?>