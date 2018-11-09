<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content=" Biodiversity of West Bengal” is an initiative by WINGS (Wildlife Information and Nature Guide Society) to document the incredible biodiversity of West Bengal as a form of web database. There is no such web database in West Bengal which documents all kinds of flora and fauna into a single portal."/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/img.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/wildbengal.css">
	<link rel="icon" href="assets/image/logo.jpg" type="image/gif" sizes="16x16">

	  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 
    <title>Biodiversity of West Bengal</title>
  </head>
  <body>

	  
  <?php include("includes/header.php") ?>
	
	  <main role="main">
	<div class="container">
	 <div class="row">
      
	    <?php include("includes/connect.php");

$query = mysqli_query($db,"select * from kingdom order by kingdom");

while($row = mysqli_fetch_assoc($query))
{
$id = $row['id'];
$kingdom = $row['kingdom'];
$image = $row['image'];
$description = $row['description'];
 ?>
      <div class="col-md-4">
        <div class="card">
          <a href="sub1.php?kingdom=<?php echo $kingdom; ?>"><img class="card-img-top img-fluid" src="assets/image/<?php echo $image;?>" alt="Card image cap" title="wildwingsindia"></a>
          <div class="card-body">
            <h4 class="card-title"><?php echo $kingdom;?></h4>
            <p class="card-text"><?php echo $description; ?></p>
			<a href="sub1.php?kingdom=<?php echo $kingdom; ?>" class="btn btn-primary"><?php echo $kingdom; ?> Database</a>
          </div>
		  
        </div>
      </div>
	  <?php
		}
		?>
    </div>
 </div>
	<hr>
	<a href="https://wildwingsindia.in/sub2-5.php?sub2=Birds"></a>
	<div class="about-section">
	<div class="container">
			    <h3><b>Biodiversity of West Bengal(An Interactive Database of Wildlife)</b></h3>
		<ul>
		
				<li><b>What is Biodiversity of West Bengal?</b><br>
<p>Biodiversity of West Bengal” is an initiative by WINGS (Wildlife Information and Nature Guide Society) to document the incredible biodiversity of West Bengal as a form of web database. There is no such web database in West Bengal which documents all kinds of flora and fauna into a single portal.</p></li>
<li><b>How to document?</b><br>
<p>There are many facebook groups, which documents biodiversity in West Bengal. Our focus is to utilise those data (photo, video and audio posted to those groups) to build a healthy database.</p> </li>
<li><b>What will be the benefits?</b>
<p>The database will make identification of species easier. People will know what is around us. In addition, an idea about distribution and seasonality can be made.</p></li>

		</div>


</main>
	<?php 
include("includes/footer.php");
?>
    <!-- Optional JavaScript -->
	<script src="assets/js/nav.js"></script>
	<script src="assets/js/card.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  </body>
</html>