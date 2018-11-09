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
function fetch_select25(val)
{
 $.ajax({
 type: 'post',
 url: 'sidebar/fetch_data.php',
 data: {
  get_option25:val
 },
 success: function (response) {
  document.getElementById("sub3").innerHTML=response; 
 }
 });
}
</script>
<script type="text/javascript" src="jquery.js"></script>
<form action="sidebar/speciesname.php" method="POST" enctype="multipart/form-data">
<div class="col-lg-15">

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
						<select class="form-control round-form" name="sub25" id="sub25" onchange="fetch_select25(this.value);"> 
						<option>Choose Subsection2.5</option>
						
						</select>
						
				</div>
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Choose Subsection3</label>
						<select class="form-control round-form" name="sub3" id="sub3"> 
						<option>Choose Subsection3</option>
						
						</select>
						
				</div>
				</div>
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Unique ID</label>
		
					<input class="form-control" name="id" type="text" placeholder="Enter ID" required>
							</div>	
				</div>
				
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Scientific Name</label>
		
					<input class="form-control" name="sname" type="text" placeholder="Enter Name" required>
							</div>	
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Common Name</label>
		
					<input class="form-control" name="cname" type="text" placeholder="Enter Name(optional)">
							</div>	
				</div>
				<div class="col-sm-3">
				<div class="form-group">
				 <label>Enter Local Name</label>
		
					<input class="form-control" name="lname" type="text" placeholder="Enter Name(optional)">
							</div>	
				</div>
			
</div>	
	<div class="col-lg-12">			
 <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Add Species</button>
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
	if($_POST['kingdom']=='' OR $_POST['sub2']=='' OR $_POST['sub1']=='' OR $_POST['sub25']=='')
		{
		echo("<script>alert('Fill All the Fields.')</script>");
		echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>";
	}
	else
	{
		$kingdom = $_POST['kingdom'];
		$sub1 = $_POST['sub1'];
		$sub2 = $_POST['sub2'];
		$sub25 = $_POST['sub25'];
		$sub3 = $_POST['sub3'];
		$sname = $_POST['sname'];
		$lname = $_POST['lname'];
		$id = $_POST['id'];
		$cname = $_POST['cname'];
		 $check_query = "SELECT * FROM sub4name WHERE sname='$sname' or uniqueid='$id'";
		$result = mysqli_query($db, $check_query);
		  $check = mysqli_fetch_assoc($result);
		  
			if ($check['sname'] == $sname) {
			  echo ("<script>alert('$sname Already Exist')</script>");
			  echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>";
			  exit();
	        }
			else if ($check['uniqueid'] == $id)
			{
				 echo ("<script>alert('$id Already Exist')</script>");
			  echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>";
			  exit();
			}

			$query = "INSERT INTO sub4name (uniqueid,cname,sname,sub3,lname) VALUES('$id','$cname','$sname','$sub3','$lname')";
		
		
		if(mysqli_query($db,$query))
{
	echo ("<script>alert('Species is Successfully Added')</script>");
	echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>";
}
else{ 
     echo ("<script>alert('Failed')</script>");
	echo"<script>window.open('../index.php?speciesname=speciesname','_self')</script>"; }
			
	}
}	
?>	
