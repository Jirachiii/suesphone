<?php
	require_once('../model/connect.php');
	session_destroy(); 
	echo"<script>window.location.href='../view/front/home.php';</script>";
	?>