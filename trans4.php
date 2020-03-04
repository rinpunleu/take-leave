 <?php session_start();
$research="ResearchUnit";
if(!$_SESSION['id'] and $_SESSION['position'] != $research){header('Location:index.php');}
    $logged=($_SESSION['id']);

?>
<?php
//including the database connection file
include_once("oopbackend.php");

$crud = new Crud();
$stat1="approved";
$stat2="declined";
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM leave_trans 
		JOIN users on emp_id=id
		WHERE status !='$stat1' and position='Research' and status !='$stat2' ORDER BY leave_start DESC";
$result = $crud->getData($query);


//echo '<pre>'; print_r($result); exit;
?>

<html>
<title>Pending View</title>
	<meta charset="UTF-8">
 

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/padding.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="dashboard4.php">Employee Management System</a>
    </div>
    	 
      <a  href="dashboard4.php">Home</a>
      <a  class='active' href="trans4.php">View Pending Transactions</a>
      <a href="viewapprove4.php">View Approved Transactions</a>
      <a href="logout.php">Logout</a>
  </div>
</nav>
</head>
<body>
<div class="container">
<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Leave Type</th>
									<th class="cell100 column5">No. of Days</th>
									<th class="cell100 column5">Start Date</th>
									<th class="cell100 column5">Employee</th>
									<th class="cell100 column5">Leave Status</th>
									<th class="cell100 column5">Manage</th>
								</tr>
							</thead>
						</table>
					</div>


	<?php 
	
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 		
		
		 $leave=$res['leave_id'];
		echo "<div class=table100-body js-pscroll>";
		echo			"<table>";
		echo			"<tbody>";		
		echo "<tr class='row100 body'>";
		echo "<td class='cell100 column1'>".$res['leave_type']."</td>";
		echo "<td class='cell100 column5'>".$res['leave_days']."</td>";
		echo "<td class='cell100 column5'>".$res['leave_start']."</td>";
		echo "<td class='cell100 column5'>".$res['name']."</td>";
		echo "<td class='cell100 column5'>".$res['status']."</td>";	
		echo "<td class='cell100 column5'> <form method='POST' action='results4.php'>
				<input type='hidden' name='leave_id' value=".$leave.">
				<input class='btn btn--success' type='Submit'></form>
				<a href=deletetrans.php?id=$res[leave_id] onClick= return confirm('Are you sure you want to delete?') ><button class='btn btn-danger' button>Decline</button></a></td>";		
	}
	?>
	</table>
	
</body>
</html>
<?php include 'footer.php'?>