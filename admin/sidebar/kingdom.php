<form action="sidebar/kingdom.php" method="POST" enctype="multipart/form-data">

<div class="col-sm-8">
		<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Kingdom Name</label>
		
					<input class="form-control" name="kingdom" type="text" placeholder="Enter Name" required>
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
				<input class="form-control" name="description" type="text" placeholder="Enter Description(max 250 letters)" maxlength="250" required>
			</div>
		</div>
	 </div>		
<div class="col-lg-12">		 
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add</button>
  </div>
</div>
</form>
<div class="alert alert-danger col-lg-12" role="alert">
 <p> Please don't use  single inverted comma (') in this admin panel. Instead you can use bracket().</p>
 <p>For example, please write Temminck(s) Stint, Jerdon(s) Leafbird; not Temminck's Stint, Jerdon's leafbird</p>
</div>
<?php 

include("../includes/connect.php");
if(isset($_POST['submit']))
{
	if($_POST['kingdom']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>";
	}
	else
	{
		$kingdom = $_POST['kingdom'];
		$description = $_POST['description'];
		$image_name = $_FILES['image']['name'];
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		 $check_query = "SELECT * FROM kingdom WHERE kingdom='$kingdom'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  
			if ($check['kingdom'] == $kingdom) {
			  echo ("<script>alert('Kingdom Already Exist')</script>");
			  echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>";
			  exit();
	        }
	    }
		
		if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif")
	{
		if($image_size<=200000)
		{
			move_uploaded_file($image_tmp,"../../assets/image/$image_name");
			$query = "INSERT INTO kingdom (kingdom,image,description) VALUES('$kingdom','$image_name','$description')";
			
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
	echo ("<script>alert('kingdom is Successfully Added')</script>");
	echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>";
}
else{ echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>"; }
			
	}		
?>	
