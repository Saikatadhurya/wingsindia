<?php
include('includes/connect.php');

$delete_id = $_GET['del'];
$query =  mysqli_query($db, "select * from sub4 where id = '$delete_id'");
$row = mysqli_fetch_assoc($query);
$image = $row['image'];
unlink("../assets/image/$image");
$delete_query = "delete from sub4 where id = '$delete_id'";
if(mysqli_query($db,$delete_query))
{
	echo "<script>alert('Post Has Been Deleted..');</script>";
	echo "<script>window.open('index.php?editimage=editimage','_self')</script>";
}
?>