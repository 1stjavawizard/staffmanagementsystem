<?php 
include_once('../../../server/index.php');
$server = new Server();
if(isset($_GET['id'])){
	$id =$_GET['id'];
	$server->deleteuser($id);
	//echo '<script>
	 //  window.location.href = "http://localhost/tutorphp/views/admin/crudcategoryperday/";
	  // </script>';
	header("Location: http://localhost/staffmanagement/views/admin/cruduser/");
	
}

?>