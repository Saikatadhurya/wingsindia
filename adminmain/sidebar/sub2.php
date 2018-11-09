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
</script>
<script type="text/javascript" src="jquery.js"></script>
<form action="sidebar/sub2.php" method="POST" enctype="multipart/form-data">
<div class="col-lg-12">
<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Subsection2 Name</label>
		
					<input class="form-control" name="sub2" type="text" placeholder="Enter Name" required>
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
						<select class="form-control round-form" name="sub1" id="sub1"> 
						<option>Choose Subsection1</option>
						
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
				<input class="form-control" name="description" type="text" placeholder="Enter Description" required>
			</div>
		</div>
		
</div>	
	<div class="col-lg-12">			
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add Subsection2</button>
  </div>
</div>	

</form>

<?php
if(isset($_POST['submit']))
{
	if($_POST['kingdom']=='' OR $_POST['sub2']=='' OR $_POST['sub1']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?sub2=sub2','_self')</script>";
	}
	else
	{
		$kingdom = $_POST['kingdom'];
		$sub1 = $_POST['sub1'];
		$sub2 = $_POST['sub2'];
		$description = $_POST['description'];
		$image_name = $_FILES['image']['name'];
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		 $check_query = "SELECT * FROM sub2 WHERE name='$sub2'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  
			if ($check['name'] == $sub2) {
			  echo ("<script>alert('$sub2 Already Exist')</script>");
			  echo"<script>window.open('../index.php?sub2=sub2','_self')</script>";
			  exit();
	        }
	    }
	if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif")
	{
		if($image_size<=200000)
		{
			move_uploaded_file($image_tmp,"../../assets/image/$image_name");
			$query = "INSERT INTO sub2 (name,sub1,image,description) VALUES('$sub2','$sub1','$image_name','$description')";
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
	echo ("<script>alert('Subsection2 is Successfully Added')</script>");
	echo"<script>window.open('../index.php?sub2=sub2','_self')</script>";
}
else{ 
     echo ("<script>alert('Failed')</script>");
	echo"<script>window.open('../index.php?sub2=sub2','_self')</script>"; }
			
	}	
?>	
