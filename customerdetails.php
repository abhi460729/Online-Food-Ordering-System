<?php include("func.php");?>


<!DOCTYPE html>
<html>
<head>
	<title>Customer's Order and Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background:url('images/3.jpg') no-repeat;background-size:cover;height:500px;"></div>
<div class="container">
	<div class="card">
		<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
			<div class="row">
				<div class="col-md-1">
			<a href="adminpanel.php" class="btn btn-light">Go Back</a></div>
			<div class="col-md-3">Customer's Order and Details</div>
			<div class="col-md-8">
				<form class="form-group action="searchcustomer.php" method="post">
					<div class="row">
			
				</form>
			</div>
		</div></div>
	<div class="card-body">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact and Order</th>
    </tr>
  </thead>
  <tbody>
   <?php get_customer_details(); ?> 
  </tbody>
</table></div>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>	
</body>
</html>