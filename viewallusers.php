<?php 
include_once('../../../server/index.php');
$server = new Server();
$result = $server->viewblockedsers(); 
?>
<!DOCTYPE html>
<html>
<head>
<title>staff Management System</title>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="SCHOOL,Management,System,In,The,World,CSS,JavaScript,DOM,jQuery,ASP,PHP,SQL,XML,Bootstrap,Web,W3C,tutorials,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,colors,demos,tips,w3c">
<link rel="icon" href="" type="image/x-icon">
<link rel="stylesheet" href="../css/fonts/font-awesome.css"/>
<link rel="stylesheet" href="../css/bootstrap.min.css"/>
<link rel="stylesheet" href="../css/style.css"/>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.javascript/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
	<div id="navigation">
	<?php
	  include_once('navigation.php');
		?>
	
    </div>
	
    <!-- Page wraper -->
    <div id="main_page" class="gray-bg cruduser">

        <!-- Page wrapper -->
		<div id="main-page-navigation">
		
	    <?php include_once('topnav.php');?>
        </div>
        

        <!-- Main view  -->
		<div id="main-content">
			<div>
			<div class="row addcategoryperday" style="height:70vh">
			<?php 
			  
			if($server->checkdataexits(new Server())){?>
			<div class="addcategoryperday-col-sm-12 col-md-10">

			<p id="addcategoryperdaytitle">list of blocked users.</p>

			<div class="myg">
			<table class ="table table-responsive table-bordered">
			<thead>
			<tr> 
			<th> S/N</th>
			<th> Names</th>
			<th> Usernames</th>
			<th> Password</th>
			<th> Profile Picture </th>
			<th> Blocked By </th>
			<th> date blocked </th>
		    
			<th> Delete/Update </th>
			</tr>
			</thead>


			<tbody>

			<?php 
			
			while($data = $result->fetch()){?>
			<tr>

			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['name']?></td>
			<td><?php echo $data['username'] ?></td>
			<td><?php echo $data['generatedpassword'] ?></td>
			<td><?php echo $data['role_name'] ?></td>
			<td><?php echo $data['shortname'];//you need to write condition statement for getting students class or classteachers?></td>
			<td><img src="http://localhost/staffmanagement/uploads/general/<?php echo $data['profilepic'] ?>" height="50" width="50" alt="profile image"/></td>
			<td><?php echo $data['registered_by'] ?></td>
			<td><?php echo $data['datebanned'] ?></td>
			<td><a class="btn btn-primary" href="http://localhost/staffmanagement/views/admin/cruduser/deleateuser.php?id=<?php echo $data['id']?>">Delete</a><a class="btn btn-primary" href="http://localhost/tutorphp/views/admin/cruduser/updateuser.php?id=<?php echo $data['id']?>">Update</a></td>
			</tr>
			<?php 
			}

			?>

			</tbody>

			</table>

			</div>


			</div>
			<?php }
			  
			else{?>
			
			  <div class="addcategoryperday-col-sm-12 col-sm-12 col-md-6">
			    <p style="color:purple;font-family:Pristina;font-size:2rem"> There is no users yet</p>
			  </div>
			<?php };?>
             <div class="addcategoryperday-col-sm-12 col-sm-12 col-md-2">
			    <p id="addcategoryperdaytitle"></p>
				<p><a class="btn btn-danger" href="http://localhost/staffmanagement/views/admin/cruduser/">view users</a></p>
			    
			 </div>
			</div>
			</div>	

	     </div>
        
       
        <!-- Footer -->
		<div id="footer">
	    <?php include_once('footer.php');?>
        </div>
        
    </div>
   
</div>



<script src="../javascript/jquery/jquery-2.1.1.min.js"></script>
<script src="../javascript/bootstrap/bootstrap.min.js"></script>
<script src="../javascript/script.js"></script>


</body>
</html>





