<?php
require_once("connect.php");
if(empty($_GET)&&(!isset($_GET)))
{
	echo "<script> alert('出现异常，操作失败，请联系管理员');

		</script>";
}
else if(empty($_GET["department"]))
{
	echo "<script> alert('部门不能为空');

		</script>";
		$department=$_GET["department"];
	$office=$_GET["office"];
	$address=$_GET["address"];
	$phone=$_GET["phone"];
	$id=$_GET["id"];
	echo "<script> 
	window.history.back();
		</script>";
}
else if(empty($_GET["office"]))
{
	echo "<script> alert('科室不能为空');

		</script>";
		$department=$_GET["department"];
	$office=$_GET["office"];
	$address=$_GET["address"];
	$phone=$_GET["phone"];
	$id=$_GET["id"];
	echo "<script> 
	window.history.back();
		</script>";
}
else if(empty($_GET["phone"]))
{
	echo "<script> alert('电话不能为空');

		</script>";
		$department=$_GET["department"];
	$office=$_GET["office"];
	$address=$_GET["address"];
	$phone=$_GET["phone"];
	$id=$_GET["id"];
	echo "<script> 
	window.history.back();
		</script>";
}
 else{
	$department=$_GET["department"];
	$office=$_GET["office"];
	$address=$_GET["address"];
	$phone=$_GET["phone"];
	$id=$_GET["id"];
	$sql="update suesphone set department='$department',office='$office',address='$address',phone='$phone' where id='$id'";
	$query=mysqli_query($con,$sql);
	echo "<script> alert('更改成功，返回管理页面');
	window.location.href='admin.php';
		</script>";
}

?>
