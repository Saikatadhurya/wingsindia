
<?php include("includes/connect.php");

		$page_sub2 = $_GET['sub2'];
		$page_sub25 = $_GET['sub25'];
		?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content=" This is not just an NGO, not just another society.. Rather a bunch of men and women selflessly working towards the betterment of Nature.. People say Charity begins at home and Home was not built in a Day. We understood, to begin saving Nature we need to start with ourselves maybe and just maybe others will follow through. We understood that the damage we have done to Nature can't be healed in a day, it will take time, but Better Late than Never. We have started our Journey.. we will continue... We urge all of you seeing this website to come forward and lend your Hand in any way you can. Be a volunteer in our cause, be a member of this society wherever you may stay in this world. you can still help Mother Nature to return to her Glory."/>
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquerysctipttop.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/img.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sub3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/tree.css">
	<link rel="icon" href="assets/image/logo.jpg" type="image/gif" sizes="16x16">
	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 
    <title>WINGS India | <?php echo $page_sub25 ?></title>
  </head>
  <body>
	  
  <?php include("includes/header.php") ?>
	
	<main role="main">
	
<div id="container">
	
<ul>
<li><a href="sub2-5.php?sub2=<?php echo $page_sub2; ?>#<?php echo $page_sub2; ?>"><b><?php echo "$page_sub2";?></b></a>
<ul>
<?php 

		$page_sub2 = $_GET['sub2'];
		$query = mysqli_query($db,"select * from sub25 where sub2='$page_sub2' order by name");

		while($row = mysqli_fetch_assoc($query))
		{
		$id = $row['id'];
		$name = $row['name'];
		$sub2 = $row['sub2'];
		 ?>
<li><a href="sub3.php?sub2=<?php echo $sub2; ?>&sub25=<?php echo $name; ?>#<?php echo $name; ?>"><?php echo "$name";?></a>
<ul>
<?php 
		$page_sub2 = $_GET['sub2'];
		$query1 = mysqli_query($db,"select * from sub3 where sub25='$name' order by name");

		while($rows = mysqli_fetch_assoc($query1))
		{
		$id2 = $rows['id'];
		$name2 = $rows['name'];
		$sub225 = $rows['sub25'];
		 ?>
<li><a href="sub4.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $sub225; ?>&sub3=<?php echo $name2; ?>#<?php echo $name2; ?>"><?php echo "$name2";?></a></li>
<?php
		}
	?>
</ul>
</li>
<?php
		}
?>
</li>
</ul>
</ul>
</div>
<div id="containerR">
<?php  $query = mysqli_query($db,"select * from sub3 where sub25='$page_sub25'");
		$rows = mysqli_fetch_assoc($query);
		$sub25 = $rows['sub25'];
		?>
		<h1 id="<?php echo $sub25; ?>"><b><u><?php echo "$sub25"; ?></u></b></h1><br>
	

	<div class="row">
				  
				   <?php 
				   $query = mysqli_query($db,"select * from sub3 where sub25='$page_sub25' order by name");


		while($row1 = mysqli_fetch_assoc($query))
		{
		$id1 = $row1['id'];
		$name1 = $row1['name'];
		$sub25 = $row1['sub25'];
		$image = $row1['image'];
		$description = $row1['description'];
		 ?>
				   <div class="col-lg-4">
				   <a href="sub4.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $sub25; ?>&sub3=<?php echo $name1; ?>#<?php echo $name1; ?>" > <img class="rounded-circle" src="assets/image/<?php echo "$image"; ?>" alt="Generic placeholder image" width="140" height="140" title="wildwingsindia"></a>
					<h2 style="text-align:left;"><?php echo "$name1"; ?></h2>
					<p><?php echo "$description"; ?></p>
					<p><a class="btn btn-secondary" href="sub4.php?sub2=<?php echo $page_sub2; ?>&sub25=<?php echo $sub25; ?>&sub3=<?php echo $name1; ?>" role="button">View details &raquo;</a></p>
				  </div><!-- /.col-lg-4 -->
				 

		<?php
		}
		?>
	</div>

</div>	
	
	
	
		
</main>
<?php include("includes/footer.php");?>
    <!-- Optional JavaScript -->
	<script src="assets/js/nav.js"></script>
	<script src="assets/js/tree.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36251023-1']);
	  _gaq.push(['_setDomainName', 'jqueryscript.net']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>