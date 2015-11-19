<?php
require_once('../model/connect.php');
session_destroy();
echo"<script>window.location.href='../view/phoneadmin/admin.php';</script>";
?>