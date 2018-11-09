<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("sub1").innerHTML=response; 
 }
 });
}
function fetch_select1(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option1:val
 },
 success: function (response) {
  document.getElementById("sub2").innerHTML=response; 
 }
 });
}
function fetch_select2(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option2:val
 },
 success: function (response) {
  document.getElementById("sub25").innerHTML=response; 
 }
 });
}
</script>
<script type="text/javascript" src="jquery.js"></script>
<form action="sidebar/sub3.php" method="POST" enctype="multipart/form-data">
<div class="col-lg-15">
<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Subsection3 Name</label>
		
					<input class="form-control" name="sub3" type="text" placeholder="Enter Name" required>
							</div>	
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Kingdom</label>
						<select class="form-control round-form" name="kingdom" onchange="fetch_select(this.value);"> 
						<option>Choose Kingdom</option>
						 <?php
							include('../includes/connect.php');
							$query = mysqli_query($db,"select * from kingdom order by 1 desc");

							while($row1 = mysqli_fetch_assoc($query))
							{
							$id = $row1['id'];
							$kingdom = $row1['kingdom'];
							 ?>
						  <option value="<?php echo $kingdom; ?>"><?php echo "$kingdom"; ?></option>
						  <?php 
							}
							?>
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection1</label>
						<select class="form-control round-form" name="sub1" id="sub1" onchange="fetch_select1(this.value);"> 
						<option>Choose Subsection1</option>
						
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection2</label>
						<select class="form-control round-form" name="sub2" id="sub2" onchange="fetch_select2(this.value);"> 
						<option>Choose Subsection2</option>
						
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection2.5</label>
						<select class="form-control round-form" name="sub25" id="sub25"> 
						<option>Choose Subsection2.5</option>
						
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Image(max 200kb)</label>
		
				<input type="file" class="form-control-file" id="image" name="image" required>
			</div>	
		</div>
		<div class="col-sm-10">
				<div class="form-group">
				<input class="form-control" name="description" type="text" placeholder="Enter Description(max 250 words)" maxlength="250" required>
			</div>
		</div>
		
</div>	
	<div class="col-lg-12">			
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add Subsection3</button>
  </div>
</div>	

</form>
<div class="alert alert-danger col-lg-12" role="alert">
 <p> Please don't use  single inverted comma (') in this admin panel. Instead you can use bracket().</p>
 <p>For example, please write Temminck(s) Stint, Jerdon(s) Leafbird; not Temminck's Stint, Jerdon's leafbird</p>
</div>
<?php
if(isset($_POST['submit']))
{
	if($_POST['kingdom']=='' OR $_POST['sub2']=='' OR $_POST['sub1']=='' OR $_POST['sub25']=='' OR $_POST['sub3']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?sub3=sub3','_self')</script>";
	}
	else
	{
		$kingdom = $_POST['kingdom'];
		$sub1 = $_POST['sub1'];
		$sub2 = $_POST['sub2'];
		$sub25 = $_POST['sub25'];
		$sub3 = $_POST['sub3'];
		$description = $_POST['description'];
		$image_name = $_FILES['image']['name'];
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		 $check_query = "SELECT * FROM sub3 WHERE name='$sub3'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  
			if ($check['name'] == $sub3) {
			  echo ("<script>alert('$sub3 Already Exist')</script>");
			  echo"<script>window.open('../index.php?sub3=sub3','_self')</script>";
			  exit();
	        }
	    }
	if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif")
	{
		if($image_size<=2000000)
		{
			move_uploaded_file($image_tmp,"../../assets/image/$image_name");
			$query = "INSERT INTO sub3 (name,sub25,image,description) VALUES('$sub3','$sub25','$image_name','$description')";
		}
		else 
		{
			echo("<script>alert('Larger Image, Only 200kb file size is valid.')</script>");
		}
	}
	else
	{
			echo("<script>alert('Invalid File Type.')</script>");
	}
		
		if(mysqli_query($db,$query))
{
	echo ("<script>alert('Subsection3 is Successfully Added')</script>");
	echo"<script>window.open('../index.php?sub3=sub3','_self')</script>";
}
else{ 
     echo ("<script>alert('Failed')</script>");
	echo"<script>window.open('../index.php?sub3=sub3','_self')</script>"; }
			
	}	
?>	
