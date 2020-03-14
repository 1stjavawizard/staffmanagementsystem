<?php
include_once('../../../server/index.php');
$server = new Server();
//$result1 = $server->viewcat();
$result2 = $server->viewroles();
if(isset($_GET['id'])){
	$id =$_GET['id'];
	$result = $server->viewuserbyid($id);
	$data = $result->fetch(); 

}
if(isset($_POST) && !empty($_POST)){
	$id =$_GET['id'];
	
	$status = $server->updaterole($_POST,$_FILES,$id);
	$thefile = "../../../uploads/general/".$_FILES["picture"]["name"];
   $tempname = $_FILES["picture"]["tmp_name"];
   move_uploaded_file($tempname,$thefile);
    
  header("Location: http://localhost/staffmanagement/views/admin/cruduser/");
	
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Staff Management System</title>


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
		
	    <?php include_once('topnav.php');?>
        </div>
        

        <!-- Main view  -->
		<div id="main-content">
		<div class="nav">
			<ul class="ulcrud">
				<li class="crudli" id="activetab" title="Login Info">Step 1</li>
				<li class="crudli" title="Other Info">Step 2</li>
				<li class="crudli" title="Other Info1">Step 3</li>
				<li class="crudli" title="Other Info2">Step 4</li>
				<li class="crudli" title="Other Info3">Step 5</li>
				<li class="crudli" title="Other Info4">Step 6</li>
				<li class="crudli" title="Other Info5">Step 7</li>
				<!--<li class="crudli" title="Other Info6">Step 8</li>
				<li class="crudli" title="Other Info7">Step 9</li>
				<li class="crudli" title="Comments">Step 10</li>
			-->
			</ul>
		</div>
		
			<form id="myform" class="group" action="#" method="POST">
				
				<fieldset id="login" title="Login Info">
					<legend>Login Info</legend>
					<ol>
						 <li> 
						<label for="name">Name *</label>
						<input type="text" name="name" value="<?php echo $data['name']?>" id="name" title="Please enter your name" autofocus placeholder="Last, First" required />
						</li>
						 <li> 
						<label for="email">E-mail *</label>
						<input type="email" name="email" value="<?php echo $data['email']?>" id="email" title="Please enter your email" autofocus placeholder="Sample@example.com" required />
						</li>

						<li>
						<label for="username">Username *</label>
						<input type="text" name="username" value="<?php echo $data['username']?>" id="username" title="Please enter your username" autofocus placeholder="Username" required />,
						</li>

						<li>
						<label for="role_id">Assign Role *</label>
						 <select class="form-control" id="role_id" name="role_id">
						  <?php 
						  while($data2 = $result2->fetch()){	
						   ?>
						   <option value =<?php echo $data2['id']?>> <?php echo $data2['role_name']?> </option>
						  <?php }?>
						</select>
						</li>

						
						
						<input type="hidden" name="isactivated" value="0" id="isactivated" title="Please enter your name" autofocus placeholder="Last, First" required />
						

						
						
						<input type="hidden" name="isdocument" value="0" id="isdocument" title="Please enter your name" autofocus placeholder="Last, First" required />
						
						
					</ol>
					<div class="buttonnav next">next</div>
				</fieldset>
				
				
				<fieldset id="other" class="hidden" title="Other Info">
					<legend>Other</legend>
					<ol>
					
					<li>
					 <label for="generatedpassword">generated password *</label>
					 <input type="hidden" value="<?php echo $data['generatedpassword']?>" name="generatedpassword" id="generatedpassword"  autofocus  />
					 </li>
					 
					 <li>
					 <label for="userpassword">user password *</label>
					 <input type="text" name="userpassword" value="<?php echo $data['userpassword']?>" id="userpassword" title="Please enter your password" autofocus  placeholder="Your password"/>
					 </li>
					 
					 <input type="hidden" value="<?php echo $data['hidepassword']?>" name="hidepassword" id="hidepassword" title="Please enter your name" autofocus required  />
					 

					 <li>
					 <label for="parent_name">parent's name *</label>
					 <input type="text" name="parent_name" value="<?php echo $data['parent_name']?>" id="parent_name" title="Please enter your name" autofocus placeholder="Last, First" required />
					 </li>
					 
					 <li>
					 <label for="picture">profile picture </label>
					 <input type="file" name="picture" value="<?php echo $data['picture']?>" id="picture" title="Please enter your name" autofocus />
					 </li>
										
					</ol>
					<div class="buttonnav prev">prev</div>
					<div class="buttonnav next">next</div>
				</fieldset>
				
				
				<fieldset id="other1" class="hidden" title="Other Info1">
					<legend>Other</legend>
					<ol>
					
					  <li>
							<label for="aboutme">About me *</label>
							<textarea name="aboutme" value="<?php echo $data['aboutme']?>" id="aboutme"><?php echo $data['aboutme']?></textarea>
						</li>
					  
						 
						 <li>
						 <label for="age">age *</label>
						 <select name="age" id="age" autofocus required>
						  <?php for($num = 1;$num<= 99;$num++ ){?>
						  <?php if($num === intval($data['age'])){$se = true?>
						  <?php } else{ $se = false; };?>
						  <option value="<?php echo $num.'yrs'?>" selected="<?php echo $sel;?>"><?php echo $num.'years'?></option>
						  
						  <?php };?>
						 </select>
						 
						 </li>
						 
						 <li>
						 <label for="country">country *</label>
						 <input type="text" name="country" value="<?php echo $data['country']?>" id="country" title="Please enter your country name" autofocus required />
						 </li>
						 
						 <li>
						 <label for="state">state *</label>
						 <input type="text" name="state" value="<?php echo $data['state']?>" id="state" title="Please enter your state name" autofocus placeholder="Your State" required />
						 </li>
						 
						 <li>
						 <label for="gender">gender *</label>
						 <select name="gender" id="gender" autofocus required>
						   <?php if($num === $data['gender']){$se = true?>
						  <?php } else{ $se = false; };?>
						  <option value="Male" selected="<?php echo $sel;?>">Male</option>
						  <option value="Female" selected="<?php echo $sel;?>">Female</option>
						    
						 </select>
						  </li>
						 
											
											
					
					
					</ol>
					<div class="buttonnav prev">prev</div>
					<div class="buttonnav next">next</div>
				</fieldset>
				
				<fieldset id="other2" class="hidden" title="Other Info2">
					<legend>Other</legend>
					<ol>
					
					 <li>
					 <label for="birthday">birthday *</label>
					 <input type="date" name="birthday" value="<?php echo $data['birthday']?>" id="birthday" title="Please indicate your birthday" autofocus placeholder="Birthdate Only" required />
					 </li>
					 
					 <li>
					 <label for="bloodgroup">bloodgroup *</label>
					 <input type="text" name="bloodgroup" value="<?php echo $data['bloodgroup']?>"  id="bloodgroup" title="Please enter your bloodgroup" autofocus placeholder="Bloodgroup" required />
					 </li>
					 
					 <li>
					 <label for="genotype">genotype *</label>
					 <input type="text" name="genotype" value="<?php echo $data['genotype']?>" id="genotype" title="Please enter your genotype" autofocus placeholder="Genotype" required />
					 </li>
					 
					 <li>
					 <label for="height">height *</label>
					 <input type="number" value="1" min="1" max="8" step=".01" name="height" value="<?php echo $data['height']?>" id="height" title="Please enter your height" autofocus  required />
					 </li>
					 
					 <li>
					 <label for="weight">weight *</label>
					 <input type="number" name="weight" value="<?php echo $data['weight']?>" min="10" max="300" step="5" id="weight" title="Please enter your weight" autofocus required />
					 </li>
					 	
					</ol>
					<div class="buttonnav prev">prev</div>
					<div class="buttonnav next">next</div>
				</fieldset>
				
				<fieldset id="other3" class="hidden" title="Other Info3">
					<legend>Other</legend>
					<ol>
					 
					 <li>
					 <label for="complexion">complexion *</label>
					 <select name="complexion" value="<?php echo $data['complexion']?>" id="complexion" autofocus placeholder="Choose your skin color" required>
					   <option value="dark">Black </option>
					    <option value="brown">Brown </option>
						<option value="white">White </option>
					 </select>
					 
					  </li>
					 
					 <li>
					 <label for="birthplace">Birth place *</label>
					 <input type="text" name="birthplace" value="<?php echo $data['birthplace']?>" id="birthplace" title="Please enter your birth place" autofocus placeholder="Birth Place" required />
					 </li>
					 
					 <li>
					 <label for="languages">languages *</label>
					 <input type="text" name="languages" value="<?php echo $data['languages']?>" id="languages" title="Please enter your language" autofocus placeholder="Your Language" required />
					 </li>
					 
					 <li>
					 <label for="parentaddress">Parent Address *</label>
					 <input type="text" name="parentaddress" value="<?php echo $data['parentaddress']?>" id="parentaddress" title="Please enter parent address" autofocus placeholder="Parent Address" required />
					 </li>
					 
					 <li>
					 <label for="residentaddress">Resident Address *</label>
					 <input type="text" name="residentaddress" value="<?php echo $data['residentaddress']?>" id="residentaddress" title="Please enter your resident address" autofocus placeholder="Resident Address" required />
					 </li>
					 
										
					
					
					
					
					
					
					
					
					
					
					
					
					
					</ol>
					<div class="buttonnav prev">prev</div>
					<div class="buttonnav next">next</div>
				</fieldset>
				
				
				<fieldset id="other4" class="hidden" title="Other Info4">
					<legend>Other</legend>
					<ol>
												
					<li>
						 <label for="parentmobilenumber">Parent mobile number *</label>
						 <input type="text" name="parentmobilenumber" value="<?php echo $data['parentmobilenumber']?>" id="parentmobilenumber" title="Please enter your parent phone number" autofocus placeholder="+234909*******" required />
						 </li>
						 
						 <li>
						 <label for="mobilenumber">mobilenumber *</label>
						 <input type="text" name="mobilenumber" value="<?php echo $data['mobilenumber']?>" id="mobilenumber" title="Please enter your phone number" autofocus placeholder="+234909*******" required />
						 </li>
						 
						 <li>
						 <label for="parentemail">parentemail *</label>
						 <input type="email" name="parentemail" value="<?php echo $data['parentemail']?>" id="parentemail" title="Please enter your parent email" autofocus placeholder="sample@example.com" required />
						 </li>
						 
						 <li>
						 <label for="parentoccupation">Parent occupation *</label>
						 <input type="text" name="parentoccupation" value="<?php echo $data['parentoccupation']?>" id="parentoccupation" title="Please enter your parent occupation" autofocus placeholder="Parent Occupation" required />
						 </li>
						 
						 <li>
						 <label for="lga">lga *</label>
						 <input type="text" name="lga" value="<?php echo $data['lga']?>" id="lga" title="Please enter your local government area" autofocus placeholder="Your Local Government Area" required />
						 </li>
					</ol>
					<div class="buttonnav prev">prev</div>
					<div class="buttonnav next">next</div>
				</fieldset>
				
				
				<fieldset id="other5" class="hidden" title="Other Info5">
					<legend>Other</legend>
					<ol>
						
 
					 <li>
					 <label for="datejoinedschool">Date joined school *</label>
					 <input type="date" name="datejoinedschool" value="<?php echo $data['datejoinedschool']?>" id="datejoinedschool" title="Please choose the date you joined the school" autofocus placeholder="Date joined" required />
					  </li>
					  
					
					 
					 <input type="hidden" name="admission_number" value="<?php echo $data['admission_number']?>" id="admission_number" title="Your Reg number" autofocus  />
					 
					 
					 <li>
					 <label for="mothername">mothername *</label>
					 <input type="text" name="mothername" value="<?php echo $data['mothername']?>" id="mothername" title="Please enter your mother's name" autofocus placeholder="Mother's name" required />
					 </li>
					 
					 <li>
					 <label for="fathername">fathername *</label>
					 <input type="text" name="fathername" value="<?php echo $data['fathername']?>" id="fathername" title="Please enter your father's name" autofocus placeholder="Father's name" required />
					 </li>
					 
					
					 
					 <input type="hidden" value="<?php echo $data['views']?>" name="views" id="views"  autofocus  />
					 
						 
						 <input type="hidden" value="<?php echo $data['likes']?>" name="likes" id="likes"  />
						 
						 
						
						 
						 <input type="hidden" value="<?php echo $data['createdon']?>" name="createdon" id="createdOn"  />
						
						 
						
						 
						 <input type="hidden" value="<?php echo date("m/d/Y")?>" name="modifiedon" id="modifiedOn"  />
						
						 
						 
						 
						 <input type="hidden"  value="<?php echo $data['registered_by']?>" name="registered_by" id="registered_by" title="Please enter admin name" autofocus placeholder="Admin Name" required />
						
						 
						 
						 
						 <input type="hidden" value="<?php echo $data['school_id']?>" name="school_id" id="school_id"  />
						 
						 <input type="hidden" value="<?php echo $data['department_id']?>" id="department_id"  />
						 
						 
						  <input type="hidden" value="<?php echo $data['class_id']?>" name="class_id" id="class_id"  />
						
						 
						<input type="hidden" value="<?php echo $data['term_id']?>" name="term_id" id="term_id"  />
						 
						 
						 <input type="hidden" value="<?php echo $data['session_id']?>" name="session_id" id="session_id"  />
						 
						 
						  <input type="hidden" value="<?php echo $data['classteacher_id']?>" name="classteacher_id" id="classteacher_id"  />
						 
						 <input type="hidden" value="<?php echo date("m-d-Y")?>" name="date_login" id="date_login"  />
						 
						 
						 <input type="hidden" value="<?php echo $data['numberoflogin']?>" name="numberoflogin" id="numberoflogin"  />
						 
						 <input type="hidden" value="<?php echo $data['attemptslogin']?>" name="attemptslogin" id="attemptslogin"  />
						 
						 
						 <input type="hidden" value="<?php echo $data['banned']?>" name="banned" id="banned"  />
						
						 
						 <input type="hidden" value="<?php echo $data['users_banned_ip']?>" name="users_banned_ip" id="users_banned_ip"  />
						
					</ol>
					<div class="buttonnav prev">prev</div>
					<button type="submit">Update</button>
				</fieldset>
				
			</form>

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
