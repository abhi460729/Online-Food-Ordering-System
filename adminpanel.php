<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<style type="text/css">
	#ab1;hover{cursor:pointer;}
</style>
	</head>
	<div class="jumbotron" style="background:url('images/3.jpg') no-repeat;background-size:cover;height:500px;"></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class ="list-group" style="background-color:#3498DB;color:#ffffff;bodor-color:#3498DB">
				<a href="index.html" class="list-group-item">Menu</a>
				<a href="" class="list-group-item active">Place Order</a>
				<a href="customerdetails.php" class="list-group-item">Order Details</a>
				<a href="paymentdetails.php" class="list-group-item">Payment</a>
				<a href="index2.php" class="list-group-item">Logout</a>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color:#3498DB;color:#ffffff;">Place an Order</div>
				<div class="card-body">
				<form class="form-group" action="func.php" method="post">
					<label>First Name :</label>
					<input type="text" name="fname" class="form-control"><br>
					<label>Last Name :</label>
					<input type="text" name="lname" class="form-control"><br>
					<label>Email :</label>
					<input type="text" name="email" class="form-control"><br>
					<label>Contact and Order:</label>
					<input type="text" name="contact" class="form-control"><br>
					<input type="submit" name="pat_submit" class="btn btn-primary" value="Place Order">
				</form>	



					
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
</div>		


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>