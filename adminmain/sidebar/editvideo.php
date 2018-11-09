<?php if(!isset($_SESSION)) {
    session_start();
}
$user_name = $_SESSION['username'];
?>
 <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel"><div class="col-sm-4">
					  <input class="form-control" type="text" placeholder="Search for Video ID.." id="myInput" onkeyup="myFunction()" title="Type in a name">
					<br>
					  </div>
                          <table class="table table-striped table-advance table-hover" <table id="myTable">
	                  	  	 <h3><i class="fa fa-angle-right"></i>EDIT Video HERE</h3>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Video ID</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Common Name</th>
								  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Scientific Name</th>
								  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Videographer's Name</th>
                                  <th><i class="fa fa-bookmark"></i> Video</th>
                                  <th><i class=" fa fa-edit"></i> Edit/Delete</th>
                                
                              </tr>
                              </thead>
                              <tbody>
							    <?php
							   include('../includes/connect.php');
									$query = mysqli_query($db,"select * from sub4video where postedby='$user_name' order by 1 DESC");
									while($row=mysqli_fetch_assoc($query))
									{
										$id=$row['id'];
										$cname=$row['cname'];
										$sname=$row['sname'];
										$pname=$row['pname'];
										$video=$row['video'];
																  
							  ?>
                               <tr>
                                  <td><?php echo $id;?></td>
                                  <td class="hidden-phone"><?php echo $cname;?></td>
                                  <td><?php echo $sname;?></td>
								  <td><?php echo $pname;?></td>
                                  <td><center><iframe width="200" height="100 " src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</center></td>
                                  <td>
                                      
                                      <a href="editvideo.php?edit=<?php echo $id;?>"> <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                       <a href="deletevideo.php?del=<?php echo $id;?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
							  <?php
									}
								?>
                                 
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>