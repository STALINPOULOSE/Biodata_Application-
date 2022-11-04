<?php 
include('config.php');
include('header.php');
// action varible for using insert update and delete opretion which retrive from query string
$action = "";
if(isset($_REQUEST['action'])){
	$action = $_REQUEST['action'];
}
?>
<!--start of header name-->
 <h1 class="h3 mb-4 text-gray-800">Basic Details Setting</h1>
 <!--end of header name-->
        <?php
//Start of insert opretion
if(isset($_REQUEST['save']))
{
	//start of of varibale and value setting
	$user_code = $_REQUEST['user_code'];
	$name = $_REQUEST['name'];
	$address  = $_REQUEST['address'];
	$email   = $_REQUEST['email'];
	$mobile  = $_REQUEST['mobile'];
  $profile  = $_REQUEST['profile'];
	$objective   = $_REQUEST['objective'];
	$declaration   = $_REQUEST['declaration'];
  //end of of varibale and value setting
	//start of typing  query
	$query = "INSERT INTO `basic_detail`(`user_code`, `name`, `address`, `email`, `mobile`, `profile`, `objective`, `declaration`) VALUES ('$user_code','$name','$address','$email','$mobile','$profile','$objective','$declaration')";  
	//end of typing the query
  $message=iud_data($query);
  if($message=="sucess"){
		echo"<script>alert('data saved successfully ')</script>";
		echo"<script>window.location='basic_details.php'</script>";
	}
  else
  {
		echo"<script>alert('data Not  saved successfully ')</script>";
	}
}
//end of insert operation
//for Update opretion
if(isset($_REQUEST['edit'])){
	$id   = $_REQUEST['id'];
	//start of varibale and value setting
	$user_code  = $_REQUEST['user_code'];
	$name = $_REQUEST['name'];
	$address   = $_REQUEST['address'];
	$email   = $_REQUEST['email'];
	$mobile   = $_REQUEST['mobile'];
  $profile   = $_REQUEST['profile'];
	$objective   = $_REQUEST['objective'];
	$declaration   = $_REQUEST['declaration'];
  //end of of varibale and value setting
  //start of typing  query
	$query = "UPDATE `basic_detail` SET `user_code`='$user_code',`name`='$name',`address`='$address',`email`='$email',`mobile`='$mobile',`profile`='$profile',`objective`='$objective',`declaration`='$declaration' WHERE id='$id'";  
  // end of typing  query
	$message=iud_data($query);
  if($message=="sucess"){
		echo"<script>alert('data saved successfully ')</script>";
		echo"<script>window.location='basic_details.php'</script>";
	}else{
		echo"failed ".mysql_error();
	}
}
//for Delete opretion
if($action == 'delete'){
	$id   = $_REQUEST['id'];
	//start of typing  query
	$query = "delete from basic_detail where id='$id'";  
  //end of typing  query
	$message=iud_data($query);
  if($message=="sucess"){
		echo"<script>alert('data deleted successfully ')</script>";
		echo"<script>window.location='basic_details.php'</script>";
	}else{
		echo"<script>alert('failed to delete')</script>";
	}
}

?>

<div class="container">
  
  <?php if($action == 'edit' or $action == 'add' ){ 
          $id = $_REQUEST['id'];
        //start of typing  query
		  $query ="select * from basic_detail where id='$id'";
      //end of typing  query
      $result = mysqli_query($conn, $query);
          $data = mysqli_fetch_assoc($result)
  ?>
 <form method="post" >
  <!-- start of updataion of the form field and database fields-->
                  
  <table class="table table-striped table-bordered table-hover">
  <tr>
  <td align="right"><b>user_code</b></td>
  <td>
   <input type="data" name="user_code" id="user_code" class="form-control" value="<?php if($action=="edit"){ echo $data['user_code'];}else {echo "";} ?>" placeholder="user_code" required="required" autofocus="autofocus">
  </td>
  </tr>
  <tr>
  <td align="right"><b>name</b></td>
  <td>
   <input type="text" name="name" id="name" class="form-control" value="<?php if($action=="edit"){ echo $data['name'];}else {echo "";} ?>" placeholder="name" required="required" autofocus="autofocus">
  </td>
  </tr>
  <tr>
  <td align="right"><b>address</b></td>
  <td>
  <input type="text" name="address" class="form-control" value="<?php if($action=="edit"){echo $data['address'];}else{echo "";} ?>"  required="required">
  </td>
  </tr>
  <tr>
  <td align="right"><b>email<b></td>
  <td>
   <input type="email" name="email" class="form-control" value="<?php if($action=="edit"){ echo $data['email'];} else { echo "";} ?>" required="required">
   </td>
  </tr>
  <tr>
  <td align="right"><b>mobile<b></td>
  <td>
   <input type="numbers" name="mobile" class="form-control" value="<?php if($action=="edit"){ echo $data['mobile'];} else { echo "";} ?>"  required="required">
   </td>
  </tr>
  <tr>
  <td align="right"><b>profile<b></td>
  <td>
    <input type="text" name="profile" class="form-control" value="<?php if($action=="edit"){ echo $data['profile'];} else { echo "";} ?>"  required="required">
   </td>
  </tr>
  <tr>
  <td align="right"><b>objective<b></td>
  <td>
    <input type="text" name="objective" class="form-control" value="<?php if($action=="edit"){ echo $data['objective'];} else { echo "";} ?>"  required="required">
   </td>
  </tr>
  <tr>
  <td align="right"><b>declaration<b></td>
  <td>
    <input type="text" name="declaration" class="form-control" value="<?php if($action=="edit"){ echo $data['declaration'];} else { echo "";} ?>"  required="required">
   </td>
  </tr>
  <tr>
  <td colspan="2" align="center">
  <?php
  if($action=="edit")
  {
  ?>
  <button type="submit" class="btn btn-success" name="edit" >Save</button>
  <?php
  }
  else
  {
	?>
    <button type="submit" class="btn btn-success" name="save" >Save</button>
    <?php  
  }
  ?>
  </td>
  </tr>
  </table>
  </form>

  <!-- end of updataion of the form field and database fields-->
  <?php
  ?>
		
  <?php }else{ ?>
		  <center><a href="basic_details.php?action=add&id=0" class="btn btn-primary">Insert</a></center>
		  <br />
          <table  id="example2" class="table table-bordered table-hover">
          <tr>
           <td colspan="6" align="right">
            <input type="button" id="btnExport" value="Download As PDF" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#example1')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("userdetail.pdf");
                }
            });
        });
    </script>
          </td>
          </tr>
          </table>
		  <table  id="example1" class="table table-bordered table-hover">
			<thead>
			  <tr>
<!-- start of table header change-->
			<th>user_code</th>
			<th>name</th>
			<th>address</th>
			<th>email</th>
      <th>mobile</th>
      <th>profile</th>
      <th>objective</th>
      <th>declaration</th>
			<th>action</th>
      <!-- End of table header change-->
			  </tr>
			</thead>
			<tbody>
			<?php
       //start of typing  query
		$query  = "select * from basic_detail order by id desc";
    //En of typing  query
$result = mysqli_query($conn,$query);
  while($data = mysqli_fetch_assoc($result))
		{
			?>
			  <tr>
          <!-- start of Changing database variable-->
			  <td><?php echo $data["user_code"]; ?></td>
			<td><?php echo $data["name"]; ?></td>
			<td><?php echo $data["address"]; ?></td>
			<td><?php echo $data["email"]; ?></td>
      <td><?php echo $data["mobile"]; ?></td>
			<td><?php echo $data["profile"]; ?></td>
			<td><?php echo $data["objective"]; ?></td>
			<td><?php echo $data["declaration"]; ?></td>     
			<td>
			<a href="basic_details.php?action=edit&id=<?php echo $data["id"]; ?>" class="btn btn-success">Edit</a>
			<a href="basic_details.php?action=delete&id=<?php echo $data["id"]; ?>" class="btn btn-danger" onClick="return confirm('are you soure want to delete this')" >Delete</a>
			</td>
      <!-- end of Changing database variable-->
			  </tr>
			  <?php 	
		}
		?>
			</tbody>
		  </table>
  <?php } ?>
  
</div>
<?php
include('footer.php');
?>