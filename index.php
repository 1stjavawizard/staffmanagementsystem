<!DOCTYPE html>
<html>
<head>
<title>School Management System</title>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="SCHOOL,Management,System,In,The,World,CSS,JavaScript,DOM,jQuery,ASP,PHP,SQL,XML,Bootstrap,Web,W3C,tutorials,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,colors,demos,tips,w3c">
<link rel="icon" href="" type="image/x-icon">
<link rel="stylesheet" href="css/fonts/font-awesome.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/style.css"/>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.javascript/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
window.localStorage["url"] = "http://localhost/tutor/";
window.localStorage["api"] = window.localStorage.getItem("url")+"api/";
</script>
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
    <div id="main_page" class="gray-bg">

        <!-- Page wrapper -->
		<div id="main-page-navigation">
		
	    <?php include_once('topnav.php');?>
        </div>
        

        <!-- Main view  -->
		<div id="main-content">
		<?php 
		if(isset($_GET['page']) && !empty($_GET['page'])){
			
			 include_once($_GET['page'].'.php');
		}
		
		 
		?>
	     </div>
        
       
        <!-- Footer -->
		<div id="footer">
	    <?php include_once('footer.php');?>
        </div>
        
    </div>
   
</div>



<script src="javascript/jquery/jquery-2.1.1.min.js"></script>
<script src="javascript/bootstrap/bootstrap.min.js"></script>
<script src="javascript/script.js"></script>


</body>
</html>