
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
            <a href="index.php" class="logo"><b>WINGS-ADMIN PANNEL</b></a>
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
                          <span>New Post</span>
                      </a>
                      <ul class="sub">
						  <li><a  href="index.php?notice=notice">Notice</a></li>
						  <li><a  href="index.php?downloads=downloads">Downloads</a></li>
                          
                      </ul>                    
				</li>
			</ul>
			
			</li>	
			<li class="sub">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Edit Post</span>
                      </a>
					 <ul class="sub">
							<li><a  href="index.php?editnotice=editnotice">Edit Notice</a></li>
                            <li><a  href="index.php?editdownloads=editdownloads">Edit Downloads</a></li>
					 </ul> 
			</li>
			<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Admin Guide</span>
                      </a>
			</li>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
	