<?php
$con=mysqli_connect("localhost","root","","ofos");
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from logintb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
  header("Location:adminpanel.php");
}
else
{
	echo "<script>alert('Enter correct details.');</script>";
    echo "<script>window.open('index2.php','_self')</script>";
}
}
if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$query="insert into doctorapp(fname,lname,email,contact)values('$fname','$lname','$email','$contact')";
	$result=mysqli_query($con,$query);
	if($result)
	{
	echo "<script>alert('Order Placed.');</script>";
    echo "<script>window.open('adminpanel.php','_self')</script>";	
	}
}
function get_customer_details(){
global $con;
$query="select * from doctorapp";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){


$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	echo "<tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
    </tr>";





}
}
?>