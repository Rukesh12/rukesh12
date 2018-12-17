<?php
session_start();
if (!isset($_SESSION['sid']))
{
	header('location:index.php');
}


$ctime=time();
if($ctime-$_SESSION['logintime']>=30)
{
	session_destroy();
	header('location: index.php');
}
?>