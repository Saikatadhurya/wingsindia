<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('Location:login.php');
}	
$user_name = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>WINGS-Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/chosen.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
	<link rel="icon" href="../assets/image/logoweb.jpg" type="image/gif" sizes="16x16">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style1.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
	
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php include("includes/header.php") ?>			
				
				
     <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> WINGS - Wildlife Information and Nature Guide Society - ADMIN PANEL</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
				<?php
				if(isset($_GET['home']))
				{
				include('sidebar/home.php');	
				}
				?>
				<?php
				if(isset($_GET['district']))
				{
				include('sidebar/district.php');	
				}
				?>
				<?php
				if(isset($_GET['kingdom']))
				{
				include('sidebar/kingdom.php');	
				}
				?>
				<?php
				if(isset($_GET['sub1']))
				{
				include('sidebar/sub1.php');	
				}
				?>
				<?php
				if(isset($_GET['sub2']))
				{
				include('sidebar/sub2.php');	
				}
				?>
				<?php
				if(isset($_GET['sub25']))
				{
				include('sidebar/sub25.php');	
				}
				?>
				<?php
				if(isset($_GET['sub3']))
				{
				include('sidebar/sub3.php');	
				}
				?>
								<?php
				if(isset($_GET['speciesname']))
				{
				include('sidebar/speciesname.php');	
				}
				?>
					<?php
				if(isset($_GET['newimage']))
				{
				include('sidebar/newimage.php');	
				}
				?>
					<?php
				if(isset($_GET['newvideo']))
				{
				include('sidebar/newvideo.php');	
				}
				?>
					<?php
				if(isset($_GET['editimage']))
				{
				include('sidebar/editimage.php');	
				}
				?>
				<?php
				if(isset($_GET['editvideo']))
				{
				include('sidebar/editvideo.php');	
				}
				?>
				<?php
				if(isset($_GET['editaudio']))
				{
				include('sidebar/editaudio.php');	
				}
				?>
				
				
				<?php
				if(isset($_GET['newaudiolink']))
				{
				include('sidebar/newaudiolink.php');	
				}
				?>
			
          		</div>
          	</div>
		
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include("includes/footer.php"); ?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
	

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
	<script type="text/javascript" src="assets/js/chosen.jquery.js"></script>
	<script type="text/javascript" src="assets/js/init.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    

	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
