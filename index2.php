<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<style type="text/css">
	#ab1;hover{cursor:pointer;}
</style>
	</head>
	<body style="background:url('images/3.jpg') no-repeat;background-size:cover;">
		<div class="container" style="width:400px; margin-top:100px">
			<div class="card">
				<img src="images/1.jpg" class="card-img-top">
				<div class ="card-body">
			<form class="form-group" action="func.php" method="post">
				<label>Username :</label><br>
				<input type="text" name="username" class="form-control" placeholder="enter username"><br>
				<label>Password :</label><br>
				<input type="password" name="password" class="form-control" placeholder="enter password"><br>
                <input type="submit" name="login_submit" id="ab1" class="btn btn-primary" value="Login">
			</form>
               </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>