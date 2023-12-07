<?php
session_start();
$con= mysqli_connect('ecommerce-db-devtron-demo-service','root','passwd');
mysqli_select_db($con,'grocerry');
define('D',"/backend_projects/grocerry");
?>
