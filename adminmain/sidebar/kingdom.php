<form action="sidebar/kingdom.php" method="POST" enctype="multipart/form-data">

<div class="col-sm-4">
				<div class="form-group">
				 <label>Enter Kingdom Name</label>
		
					<input class="form-control" name="kingdom" type="text" placeholder="Enter Name" required>
				</div>
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add</button>
  </div>
 </div>
</form>

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
		 $check_query = "SELECT * FROM kingdom WHERE name='$kingdom'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  
			if ($check['kingdom'] == $kingdom) {
			  echo ("<script>alert('Kingdom Already Exist')</script>");
			  echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>";
			  exit();
	        }
	    }
	
		$query = "INSERT INTO kingdom (kingdom) VALUES('$kingdom')";
		if(mysqli_query($db,$query))
{
	echo ("<script>alert('kingdom is Successfully Added')</script>");
	echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>";
}
else{ echo"<script>window.open('../index.php?kingdom=kingdom','_self')</script>"; }
			
	}		
?>	
