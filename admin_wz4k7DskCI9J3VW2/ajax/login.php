<?php

include('../db/config.php');


$email_id=$_POST['email_id'];
$password=$_POST['password'];


$query=mysqli_query($conn,"select * from tbl_login where email_id='$email_id' and password='".md5($password)."' and is_active=1");

$count=mysqli_num_rows($query);

if($count==1)
{

}
else
{
	
}
