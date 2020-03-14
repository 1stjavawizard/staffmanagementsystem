<?php 
include_once('../../../server/index.php');
$server = new Server();
//$result = $server->viewcat();
//$result2 = $server->viewroles();

$generatedpassword= rand(10,99)."-".rand(11,99)."-".rand(1,99);
$password = crypt(time(),$generatedpassword);
$reg_number = "REG"."-".rand(10,999)."-".rand(11,999)."-".rand(1,999); 

if(isset($_POST) && !empty($_POST)){
	$res = $server->adduser($_POST,$_FILES);
	$thefile = "../../../uploads/general/".$_FILES["passport"]["name"];
   $tempname = $_FILES["picture"]["tmp_name"];
   move_uploaded_file($tempname,$thefile);
    
 header("Location: http://localhost/staffmanagement/views/admin/cruduser/");
}
				
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
	  include_once('../navigation.php');
		?>
	
    </div>
	
    <!-- Page wraper -->
    <div id="main_page" class="gray-bg">

        <!-- Page wrapper -->
		<div id="main-page-navigation">
		
	    <?php include_once('../topnav.php');?>
        </div>
        

        <!-- Main view  -->
		<div id="main-content">
		<div class="row addcategoryperday" style="height:90vh">
		<div class="col-sm-12 col-md-8">
		
		
			<form id="myform" class="group" action="#" method="POST" enctype="multipart/form-data">
				<fieldset id="login" title="Users Registration Form">
					<legend></legend>
					<ol>
						 <li> 
						<label for="name">Name *</label>
						<input type="text" name="name" id="name" title="Please enter your name" autofocus placeholder="Last, First" required />
						</li>
						 <li> 
						<label for="email">E-mail *</label>
						<input type="email" name="email" id="email" title="Please enter your email" autofocus placeholder="Sample@example.com" required />
						</li>

						<li>
						<label for="username">Username *</label>
						<input type="text" name="username" id="username" title="Please enter your username" autofocus placeholder="Username" required />,
						</li>
						
						<li>
						<label for="password">Password *</label>
						<input type="password" name="password" id="password" title="Please enter your password" autofocus placeholder="Password" required />,
						</li>

						

					
					 <li>
					 <label for="picture">profile picture </label>
					 <input type="file" name="passport" id="picture" title="Please enter your name" autofocus />
					 </li>
										
					</ol>
					<input type="submit" style="padding:10px;margin:10px;" class="btn btn-danger" name="submit" value="submit"/> 
				</fieldset>
				
				
				
	
			</form>
			</div>
            <div class="addcategoryperday-col-sm-12 col-sm-12 col-md-4">
			    <p id="addcategorytitle"></p>
				<a class="btn btn-danger" href="http://localhost/staffmanagement/views/admin/cruduser/">View Users</a>
				
			 </div>
			</div>
	     </div>
        
        
       
        <!-- Footer -->
		<div id="footer">
	    <?php include_once('../footer.php');?>
        </div>
        
    </div>
   
</div>



<script src="../javascript/jquery/jquery-2.1.1.min.js"></script>
<script src="../javascript/bootstrap/bootstrap.min.js"></script>
<script src="../javascript/script.js"></script>


</body>
</html>

  