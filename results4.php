<?php require('SessionController.php');?>


if(!$_SESSION['id']){header('Location:index.php');}
    $logged=($_SESSION['id']);

?>
<?php
//including the database connection file
include_once("oopbackend.php");
$crud = new Crud();	
$stat="Approved";
$id = $crud->escape_string($_POST['leave_id']);
$result=$crud->execute("UPDATE leave_trans 
						SET status='$stat'
						WHERE leave_id=$id");


if ($result) {
	//redirecting to the display page (index.php in our case)
	header("Location:viewapprove4.php");

}
	
?>

