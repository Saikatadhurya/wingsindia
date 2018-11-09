
<?php include("includes/connect.php");

$page_sub1 = $_GET['sub1']; ?>

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
	<link rel="stylesheet" type="text/css" href="assets/css/img.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sub1.css">
	<link rel="icon" href="assets/image/logo.jpg" type="image/gif" sizes="16x16">
	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 
    <title>WINGS India | <?php echo $page_sub1; ?></title>
  </head>
  <body>
	  
  <?php include("includes/header.php") ?>
	<main role="main">
	
	<div id="container">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          
		   <?php
$query = mysqli_query($db,"select * from sub2 where sub1='$page_sub1' order by name");

while($row = mysqli_fetch_assoc($query))
{
$id = $row['id'];
$name = $row['name'];
$sub1 = $row['sub1'];
$image = $row['image'];
$description = $row['description'];
 ?>
           <div class="col-lg-4">
		   <a href="sub2-5.php?sub2=<?php echo $name; ?>#<?php echo $name; ?>" > <img class="rounded-circle" src="assets/image/<?php echo "$image"; ?>" alt="Generic placeholder image" width="140" height="140" title="wildwingsindia"></a>
            <h3 style="text-align:left;"><?php echo "$name"; ?></h3>
            <p><?php echo "$description"; ?></p>
            <p><a class="btn btn-secondary" href="sub2-5.php?sub2=<?php echo $name; ?>" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
         

<?php
}
?>
        </div>
	</div>	

	
	
	
	

</main>
	<?php 
include("includes/footer.php");
?>
    <!-- Optional JavaScript -->
	<script src="assets/js/nav.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>