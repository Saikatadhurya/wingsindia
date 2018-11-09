
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>WINGS-ADMIN PANEL</b></a>
            <!--logo end-->
         
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
		
		 <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="index.php"><img src="../assets/image/logo.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Welcome <?php echo $user_name; ?></h5>
			<li class="sub-menu">
                      <a href="index.php?home=home" >
                          <i class="fa fa-book"></i>
                          <span>WINGS SITE</span>
                      </a>
			</li>	  
		  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Add New</span>
                      </a>
			<ul class="sub">
				<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>New Field</span>
                      </a>
                      <ul class="sub">
						  <li><a  href="index.php?district=district">District</a></li>
                          <li><a  href="index.php?kingdom=kingdom">Kingdom</a></li>
						  <li><a  href="index.php?sub1=sub1">Subsection 1</a></li>
						  <li><a  href="index.php?sub2=sub2">Subsection 2</a></li>
						  <li><a  href="index.php?sub25=sub25">Subsection 2.5</a></li>
						  <li><a  href="index.php?sub3=sub3">Subsection 3</a></li>
						  <li><a  href="index.php?speciesname=speciesname">Species Name</a></li>
                          
                      </ul>                    
				</li>
			</ul>
			<ul class="sub">
			  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>New Post</span>
                      </a>
					  <ul class="sub">
						
						<li><a  href="index.php?newimage=newimage">Add New Image</a></li>
						<li><a  href="index.php?newvideo=newvideo">Add New Video</a></li>
						<li><a  href="index.php?newaudiolink=newaudiolink">Add Xeno-Canto Audio</a></li>
					</ul>	
							
                    <!--  <ul class="sub">
                   
						  <?php/*
							include('../includes/connect.php');
							$query = mysqli_query($db,"select * from kingdom order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							$kingdom = $row1['kingdom'];
							 */?>

								 <li><a class="dropdown-item" href="section.php?kingdom=<?/*php echo $kingdom;*/?>"><?php/* echo "$kingdom";*/?></a></li>		
								
							<?php	
							/*}*/
							?>     
                          
                      </ul>   -->                
					</li>		
				</ul>
			</li>	
			<li class="sub">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Edit Post</span>
                      </a>
					 <ul class="sub">
							<li><a  href="index.php?editimage=editimage">Edit Images</a></li>
                            <li><a  href="index.php?editvideo=editvideo">Edit Video</a></li>
							<li><a  href="index.php?editaudio=editaudio">Edit Xeno-Canto Audio</a></li>
					 </ul> 
			</li>
			<li class="sub-menu">

                          <a href="Wings Admin Manual.pdf" download="Admin Mannual.pdf"><span>Admin Guide</span></a>
                    
			</li>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
	