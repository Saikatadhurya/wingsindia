<?php include("includes/connect.php");

		$page_sub2 = $_GET['sub2'];
		
		$page_sub3 = $_GET['sub3'];
		
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
	<link rel="stylesheet" type="text/css" href="assets/css/searchresult.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sub3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sub4.css">
	<link rel="stylesheet" type="text/css" href="assets/css/tree.css">
	<link rel="icon" href="assets/image/logo.jpg" type="image/gif" sizes="16x16">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" /> 	
		 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	 

    <title>WINGS India | <?php echo $page_sub3; ?></title>
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
	
	<div id="containerA">
	
<?php include("includes/connect.php");

		
		$query = mysqli_query($db,"select * from sub4name where sub3='$page_sub3'");
		$rows = mysqli_fetch_assoc($query);
		$sub3 = $rows['sub3'];
		?>
		<h1 id="<?php echo $sub3;?>"><b><u><?php echo "$sub3"; ?></u></b></h1><br>
<?php		
		
		$query = mysqli_query($db,"select * from sub4name where sub3='$page_sub3' order by cname");

		while($rows = mysqli_fetch_assoc($query))
		{

		$cname = $rows['cname'];
		$sname = $rows['sname'];
		$lname = $rows['lname'];
		 ?>
		
		<div id="<?php echo $cname ?>">
		   <a href="description.php?name=<?php echo $cname; ?>"><h3><b><?php echo "$cname"; ?></b></a> <i><?php echo "$sname"; ?></i></h3><br>
		   <h6><b>Local Name:</b> <?php echo "$lname"; ?></h6>
		  
					<hr>
			<h4>Images</h4>
			<div class="row">
		<?php 	
		$query1 = mysqli_query($db,"select * from sub4 where sname='$sname'");
		while($rows1 = mysqli_fetch_assoc($query1))
		{
			$id = $rows1['id'];
			
		$image = $rows1['image'];
		$date = $rows1['date'];
		$pname = $rows1['pname'];
		$place = $rows1['place'];
		$district = $rows1['district'];
		$description = $rows1['description'];
		?>


			<div class="col-sm-6">
			<p><b><?php echo "$description"; ?></b></p>
			 <a href="assets/image/<?php echo $image;?>" data-toggle="lightbox" data-gallery="example-gallery" data-title="<?php echo $cname; ?>(<i><?php echo $sname; ?></i>) <?php echo $id; ?>" data-footer="© <?php echo $pname;?>, <?php echo $place;?> <?php echo $date;?>">
				<img src="assets/image/<?php echo $image;?>" class="img-fluid" style="max-width:300px;max-height:300px;" title="wildwingsindia"></a>
				<p>©<?php echo "$pname";?><br><?php echo "$place";?>, <?php echo "$district";?>, <?php echo "$date";?></p>
				
			</div>
		<?php 
		}
		?>
		</div>
			<h4>Videos</h4>
			<div class="row">
			<?php
			$query2 = mysqli_query($db,"select * from sub4video where sname='$sname'");
					while($rows2 = mysqli_fetch_assoc($query2))
					{			
				$video = $rows2['video'];
				$description = $rows2['description'];
				$date = $rows2['date'];
				$pname = $rows2['pname'];
				$place = $rows2['place'];
				$district = $rows2['district'];
				
			?>
			
			<div class="col-sm-6">
			
			<iframe width="300" height="200 " src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<p><b><?php echo "$description"; ?></b></p>
				<p>©<?php echo "$pname";?><br><?php echo "$place";?>, <?php echo "$district";?>, <?php echo "$date";?></p>
			</div>
					<?php
					}
					?>
			</div>
			
			<h4>Audio</h4>
			<div class="row">
			<?php
			$query3 = mysqli_query($db,"select * from sub4audioxeno where sname='$sname'");
					while($rows3 = mysqli_fetch_assoc($query3))
					{			
				$audio = $rows3['audio'];
				$description = $rows3['description'];
				$date = $rows3['date'];
				$pname = $rows3['pname'];
				$place = $rows3['place'];
				$district = $rows3['district'];
				
			?>
			
			<div class="col-sm-6">
			<iframe src='https://www.xeno-canto.org/<?php echo $audio; ?>/embed' scrolling='no' frameborder='0' width='340' height='220'></iframe>
				<p><b><?php echo "$description"; ?></b></p>
				<p>©<?php echo "$pname";?><br><?php echo "$place";?>, <?php echo "$district";?>, <?php echo "$date";?></p>
			</div>
					<?php
					}
					?>
			</div>

			
			</div>
		
		<?php
		}
		?>

      </div>
	  
	
	
	
	

</main>
     		<?php include("includes/footer.php");?>       
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>
<script>
$(document).ready(function ($) {
      $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
     event.preventDefault();
    $(this).ekkoLightbox();
      }); 
});
</script>
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