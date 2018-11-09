<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content=" This is not just an NGO, not just another society.. Rather a bunch of men and women selflessly working towards the betterment of Nature.. People say Charity begins at home and Home was not built in a Day. We understood, to begin saving Nature we need to start with ourselves maybe and just maybe others will follow through. We understood that the damage we have done to Nature can't be healed in a day, it will take time, but Better Late than Never. We have started our Journey.. we will continue... We urge all of you seeing this website to come forward and lend your Hand in any way you can. Be a volunteer in our cause, be a member of this society wherever you may stay in this world. you can still help Mother Nature to return to her Glory."/>
    <meta name="keywords" content="wings india, wild wings india, wildlife india, india wildlife, wildwingsindia, birds of bengal" />
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/img.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/about.css">
	<link rel="stylesheet" type="text/css" href="assets/css/counter.css">
	<link rel="icon" href="assets/image/logo.jpg" type="image/gif" sizes="16x16">

	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 
    <title>WINGS India</title>
  </head>
  <body>

	  
  <?php include("includes/header.php") ?>
	
	  <main role="main">
	<div class="jumbotron" id="jumbotron">
  <h1 class="display-4 white">WINGS-INDIA</h1>
  <hr class="my-4">
   <p class=" white">We Have Database of Wildlife of West Bengal that you never seen before with Images, Audios and Videos.</p>
  <h2 class=" white"><b>Biodiversity of West Bengal(An Interactive Database of Wildlife)</b></h2>


   <hr class="my-4"> 
    <div class="col-auto">
   <a href="wildbengal.php" class="btn btn-primary"><h3>Go to the Database</h3></a>
    </div>
<hr class="my-4">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner" data-interval="3000">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/image/1.jpg" alt="First slide" title="wildwingsindia">
	  <div class="carousel-caption d-none d-md-block">
    <h5>Save Nature</h5>
    <p>Save Earth</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/image/2.jpg" alt="Second slide" title="wildwingsindia">
	  <div class="carousel-caption d-none d-md-block">
    <h5>Save Nature</h5>
    <p>Save Earth</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  <hr class="my-4">
  <div class="counter">
    <div class="container">
        <div class="row">
		<?php include("includes/connect.php");
		
		$query = mysqli_query($db,"select * from sub4name");
		$species = mysqli_num_rows($query);
		?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="images">
                    <p class="counter-count"><?php echo $species; ?></p>
                    <p class="images-p">Total Species in the Database</p>
                </div>
            </div>
			<?php $query = mysqli_query($db,"select * from sub4");
		$image = mysqli_num_rows($query);
		?>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="videos">
                    <p class="counter-count"><?php echo $image; ?></p>
                    <p class="videos-p">Images</p>
                </div>
            </div>
			
		<?php $query = mysqli_query($db,"select * from sub4video");
		$video = mysqli_num_rows($query);
		?>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="videos">
                    <p class="counter-count"><?php echo $video; ?></p>
                    <p class="videos-p">Videos</p>
                </div>
            </div>
		<?php $query = mysqli_query($db,"select * from sub4audioxeno");
		$audio = mysqli_num_rows($query);
		?>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="audios">
                    <p class="counter-count"><?php echo $audio; ?></p>
                    <p class="audios-p">Audios</p>
                </div>
            </div>
			<?php $query = mysqli_query($db,"select * from sub4 group by pname");
		$contributor = mysqli_num_rows($query);
		?>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="contributor">
                    <p class="counter-count"><?php echo $contributor; ?></p>
                    <p class="contributor-p">Contributors</p>
                </div>
            </div>
        </div>
    </div>
</div>
  <hr class="my-4">
<div class="about-section">
	<div class="container">
			    <h3><b>ABOUT WINGS - Wildlife Information and Nature Guide Society</b></h3>
				<p>This is not just an NGO, not just another society.. 
Rather a bunch of men and women selflessly working towards the betterment of Nature..
People say Charity begins at home and Home was not built in a Day. We understood, to begin saving Nature we need to start with ourselves maybe and just maybe others will follow through.
We understood that the damage we have done to Nature can't be healed in a day, it will take time, but Better Late than Never. We have started our Journey.. we will continue...
We urge all of you seeing this website to come forward and lend your Hand in any way you can.
Be a volunteer in our cause, be a member of this society wherever you may stay in this world.. you can still help Mother Nature to return to her Glory....</p>

		</div>

</main>
	<?php 
include("includes/footer.php");
?>
    <!-- Optional JavaScript -->
	<script src="assets/js/nav.js"></script>
	<script src="assets/js/counter.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>