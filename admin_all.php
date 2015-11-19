<?php
require_once('connect.php');
session_destroy();
echo"<script>window.location.href='admin.php';</script>";
?>