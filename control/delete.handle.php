<?php
require_once("../model/connect.php");
// $_SESSION["del"]="";

// echo $_GET[$value['id']];

if(isset($_GET["id"]))
{	
	$id=$_GET["id"];
	$sql="delete from suesphone where id='$id'";
	$query=mysqli_query($con,$sql);
	echo "<script> alert('删除成功');
	window.location.href='../view/phoneadmin/admin.php';
		</script>";//删除
}
else{
	$_SESSION["i"]=$_GET["it"];
	echo "<script> 
	window.location.href='../view/phoneadmin/update.php';
	</script>";
	}
?>
