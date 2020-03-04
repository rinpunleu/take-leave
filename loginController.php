
<?php require('SessionController.php');?>
<?php 

if(isset($_POST['btnLoginSubmit'])){
	attemptLogin();
}
function attemptLogin(){
	$id=$_POST['id'];
	$password=$_POST['password'];
	$action=$_POST['action'];
	$conn = mysqli_connect("localhost", "root", "", "empmanagesysdb");
	$sql = "SELECT * FROM users WHERE id='$id' AND password='$password' LIMIT 1";
	$result= mysqli_query($conn,$sql);

	if (mysqli_num_rows($result) > 0) {
    
		while($row = mysqli_fetch_assoc($result)) {
			$admin="Director";
			$train="TrainingUnit";
			$treatment="TreatmentUnit";
			$research = "ResearchUnit";

		setSesh($row['id'],$row
			['password'],$row['position']);
		if($row['position']==$admin){
			if($action=="Personal"){
				header('location:dashoboard1.php');
			}else
			{
				header('Location:dashboard.php');
			}
			
		}else if($row['position']==$train){
			if($action=="Personal"){
				header('location:dashoboard1.php');
			}else
			{
				header('Location:dashboard2.php');
			}
			
		}else if($row['position']==$treatment){
			if($action=="Personal"){
				header('location:dashoboard1.php');
			}else{
				header('location:dashboard3.php');
			}
			
		}else if($row['position']==$research){
			if($action=="Personal"){
				header('location:dashoboard1.php');
			}else{
				header('location:dashboard4.php');
			}
		}else{
			header('Location:dashoboard1.php');
		}
		
	}
}
		else {
			header('Location:index.php');	
	}
	mysqli_close($conn);
}
?>
