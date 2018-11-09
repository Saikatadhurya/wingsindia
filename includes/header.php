  <header>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="index.php"><img src="assets/image/logo.jpg" id="logo" alt="wingsindialogo" title="wildwingsindia"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="about.php">About</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Our Team</a>
		  <div class="dropdown-divider"></div>
		    <a class="dropdown-item" href="#">Governing Body</a>
        </div>
      </li>
	  	<li class="nav-item">
             <a class="nav-link" href="contactus.php">Contact us</a>
        </li>
		
		<li class="nav-item">
              <a class="nav-link" href="notice.php">Notice</a>
        </li>		
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Get Involved
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="form.php">Membership(online)</a>
          <a class="dropdown-item" href="#">Membership(offline)</a>
		 
        </div>
      </li>
	 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Biodiversity of West Bengal
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <!--<li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>-->
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Checklist</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">West Bengal</a></li>
             <!-- <li><a class="dropdown-item" href="#">Another submenu action</a></li>-->

              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">District Wise</a>
                <ul class="dropdown-menu">
											<?php
							include('includes/connect.php');
							$query = mysqli_query($db,"select * from district order by 1 desc");

							while($row = mysqli_fetch_assoc($query))
							{
							$id = $row['id'];
							$name = $row['name'];
							 ?>
								
								 <li><a class="dropdown-item" href="district.php?id=<?php echo $id; ?>"><?php echo "$name";?></a></li>		
								
							<?php	
							}	
							?>        
                </ul>
              </li>
            </ul>
          </li>
		  
		<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Interactive Database</a>
            <ul class="dropdown-menu">
			<?php
							include('includes/connect.php');
							$query = mysqli_query($db,"select * from kingdom order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							$kingdom = $row1['kingdom'];
							 ?>
							 
								 <li><a class="dropdown-item" href="sub1.php?kingdom=<?php echo $kingdom; ?>"><?php echo "$kingdom";?></a></li>		
								
							<?php	
							}	
							?>        
               
            </ul>
        </li>

        </ul>
      </li>
	  	  <li class="nav-item">
              <a class="nav-link" href="#">Downloads</a>
            </li>
	
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Green Campaign</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Our Work</a>
		    
        </div>
      </li>
	 </ul>
	 </div>
			  <div class="searchbar">
		<input type="text" id="search" placeholder="Search by species name"class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"><br>
		<div id="searchresults"></div>
		</div>
	<script type="text/javascript" src="assets/js/search.js"></script>
	 
   </nav>
	
	</header>