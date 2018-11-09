<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search (with keywords) </title>
</head>

<body>
<?php 
include("includes/connect.php");
 $search = mysqli_real_escape_string($db,$_POST['searchterm']);
  $find = mysqli_query($db,"SELECT * From sub4name WHERE cname LIKE '%$search%' or sname LIKE '$search%'");

  while($row = mysqli_fetch_assoc($find))
    {
		$cname = $row['cname'];
		$sname = $row['sname'];
		$id = $row['id'];
		$sub3 = $row['sub3'];
		?>
<script language="javascript">
function runReport<?php echo $id; ?>()
{
document.mstr<?php echo $id; ?>.submit();
}
</script>
<form name="mstr<?php echo $id; ?>" action="searchresult.php#<?php echo $sub3; ?>" method="post">
<input type="hidden" name="sname" value="<?php echo $sname; ?>" />
<input type="hidden" name="cname" value="<?php echo $cname; ?>" />
</form>

		<?php echo "<a href='javascript&colon;runReport".$id."();' style='color:black'><li style='width: 250px; display: inline-block;background:#cce5ff; margin: 5px; padding:10px;border-radius:10%;'>$cname <i>$sname</i> </li></a>";
		
	
  }


?>

  </body>
  </html>