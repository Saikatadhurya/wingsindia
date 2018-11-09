<?php if(!isset($_SESSION)) {
    session_start();
}
?>
<script type="text/javascript">
function fetch_select3(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option3:val
 },
 success: function (response) {
  document.getElementById("sname").innerHTML=response; 
 }
 });
}

function fetch_select4(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option4:val
 },
 success: function (response) {
  document.getElementById("cname").innerHTML=response; 
 }
 });
}
</script>
<form action="sidebar/newvideo.php" method="POST" enctype="multipart/form-data">
<div class="col-lg-15">

<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Common Name</label>
						<select class="form-control round-form chosen-select" name="name1" onchange="fetch_select3(this.value);"> 
						<option></option>
						 <?php
							include('../includes/connect.php');
							$query = mysqli_query($db,"select * from sub4name order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							
							$cname = $row1['cname'];
							 ?>
						  <option value="<?php echo $cname;?>"><?php echo "$cname" ?> </option>
						  <?php 
							}
							?>
						</select>
				</div>		
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Scientific Name</label>
						<select class="form-control round-form" id="sname" name="name2"> 
						
						</select>
						
				</div>
				</div>
				<div class="col-sm-12">
				<h3><b>OR</b></h3>
				</div>
<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Scientific Name</label>
						<select class="form-control round-form chosen-select" name="name3" onchange="fetch_select4(this.value);"> 
						<option></option>
						 <?php
							include('../includes/connect.php');
							$query = mysqli_query($db,"select * from sub4name order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							$sname = $row1['sname'];
							
							 ?>
						  <option value="<?php echo $sname;?>"><?php echo "$sname" ?> </option>
						  <?php 
							}
							?>
						</select>
						
				</div>
				</div>
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Common Name</label>
						<select class="form-control round-form" id="cname" name="name4" > 
						
						</select>
						
				</div>
				</div>
				</div>
				</div>
				<div class="col-sm-12">
				<hr>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Video Serial no.</label>
		
					<input class="form-control" name="id" type="number" placeholder="Enter Number" required>
							</div>	
				</div>
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Youtube Video id</label>
		
					<pre>https://www.youtube.com/watch?v=<input class="form-control" name="videoid" type="text" placeholder="VideoID" required></pre>
							</div>	
				</div>
		
		<div class="col-sm-4">
				<div class="form-group">
				 <label>Enter Date</label>
		
					<input class="form-control" name="date" type="date" placeholder="Enter date" required>
							</div>	
				</div>
		<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Videographer's Name</label>
		
					<input class="form-control" name="pname" type="text" placeholder="Enter Name" required>
							</div>	
				</div>		
		<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Place</label>
		
					<input class="form-control" name="place" type="text" placeholder="Enter Place" required>
							</div>	
				</div>	
		<div class="col-sm-3">
		<div class="form-group">
				 <label>Choose District</label>
						<select class="form-control round-form" name="district" required> 
						<option>Choose District</option>
						 <?php
							include('../includes/connect.php');
							$query = mysqli_query($db,"select * from district order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							$district = $row1['name'];
							 ?>
						  <option value="<?php echo $district; ?>"><?php echo "$district"; ?></option>
						  <?php 
							}
							?>
						</select>
						
				</div>
				</div>
			<div class="col-sm-15">
				<div class="form-group">
				<input class="form-control" name="description" type="text" placeholder="Enter Description(max 250 words)" maxlength="250" required>
			</div>
		</div>	
			
</div>	
	<div class="col-lg-12">			
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add Species Video</button>
  </div>
</div>	

</form>

<div class="alert alert-danger col-lg-12" role="alert">
 <p> Please don't use  single inverted comma (') in this admin panel. Instead you can use bracket().</p>
 <p>For example, please write Temminck(s) Stint, Jerdon(s) Leafbird; not Temminck's Stint, Jerdon's leafbird</p>
</div>


<?php
$user_name = $_SESSION['username'];
if(isset($_POST['submit']))
{
	if($_POST['date']==''  OR $_POST['description']==''  OR $_POST['place']=='' OR $_POST['district']==''  OR $_POST['pname']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?newvideo=newvideo','_self')</script>";
	}
	else
	{
		$id = $_POST['id'];
		if($_POST['name2']=="")
			$sname = $_POST['name3'];
		else
			$sname = $_POST['name2'];
		
		if($_POST['name1']!="")
		   $cname = $_POST['name1'];
	    else if($_POST['name4']!="")
			$cname = $_POST['name4'];
		else
			$cname = $_POST['name1'];
		if($_POST['name1']!="" AND $_POST['name3']!="")
		{
			echo("<script>alert('Invalid Input')</script>");
		echo"<script>window.open('../index.php?newimage=newimage','_self')</script>";
		exit();
		}
		$date = $_POST['date'];
		$pname = $_POST['pname'];
		$place = $_POST['place'];
		$district = $_POST['district'];
		$description = $_POST['description'];
		$videoid = $_POST['videoid'];
		
		 $check_query = "SELECT * FROM sub4name WHERE sname='$sname'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  $uniqueid = $check['uniqueid']."V".$id;
		   $check_query1 = "SELECT * FROM sub4video WHERE id='$uniqueid'";
		   $result1 = mysqli_query($db, $check_query1);
		  $check1 = mysqli_fetch_assoc($result1);
			if ($check1['uniqueid'] == $uniqueid) {
			  echo ("<script>alert('$uniqueid Already Exist')</script>");
			  echo"<script>window.open('../index.php?newvideo=newvideo','_self')</script>";
			  exit();
	        }
		
			$query = "INSERT INTO sub4video (id,cname,sname,video,date,pname,place,district,description,postedby) VALUES('$uniqueid','$cname','$sname','$videoid','$date','$pname','$place','$district','$description','$user_name')";
		

		
		if(mysqli_query($db,$query))
{
	echo ("<script>alert('Species Video is Successfully Added')</script>");
	echo"<script>window.open('../index.php?newvideo=newvideo','_self')</script>";
}
else{ 
     echo ("<script>alert('Failed')</script>");
	echo"<script>window.open('../index.php?newvideo=newvideo','_self')</script>"; }
			
	}
}	
?>	
