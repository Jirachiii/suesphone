<?php
	require_once('connect.php');
	session_destroy(); 
	echo"<script>window.location.href='home.php';</script>";
	?>