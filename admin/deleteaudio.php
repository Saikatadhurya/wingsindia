<?php
include('includes/connect.php');

$delete_id = $_GET['del'];

$delete_query = "delete from sub4audioxeno where id = '$delete_id'";
if(mysqli_query($db,$delete_query))
{
	echo "<script>alert('Post Has Been Deleted..');</script>";
	echo "<script>window.open('index.php?editaudio=editaudio','_self')</script>";
}
?>