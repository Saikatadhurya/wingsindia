<?php
include('includes/connect.php');

$delete_id = $_GET['del'];

$delete_query = "delete from sub4video where id = '$delete_id'";
if(mysqli_query($db,$delete_query))
{
	echo "<script>alert('Post Has Been Deleted..');</script>";
	echo "<script>window.open('index.php?editvideo=editvideo','_self')</script>";
}
?>