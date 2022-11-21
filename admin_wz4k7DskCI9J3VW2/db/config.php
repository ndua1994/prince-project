<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
define('BASE_URL', 'http://localhost/prince-project/admin_wz4k7DskCI9J3VW2/');
$conn=mysqli_connect('localhost','root','','prince_project');
if(!$conn)
{
	die('Database Connection Failed !'.mysqli_error());
}

$date=date('d-m-Y').' '.date('h:m:s');
