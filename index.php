<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<p>The page is redirected after login by yash branch</p>
<p>The page is redirected after login by CICD pipepline</p>
</html>

