<?php

include 'connect.php';



if(isset($_POST['submit']))
	{
	$Firstname= isset($_POST['Firstname']) ? $_POST['Firstname']:"";
	$lastname= isset($_POST['lastname']) ? $_POST['lastname']:"";
	$password= isset($_POST['password'])? $_POST['password']:"";
	$confirmpassword= isset($_POST['confirmpassword']) ? $_POST['confirmpassword']:"0";
	$email= isset($_POST['email'])? $_POST['email']:"";
	
	
	$sql= "INSERT INTO signup (firstname,lastname,Password,Confirm_password,Email) VALUES ('$Firstname','$lastname','$password'
	,'$confirmpassword','$email')";
	
	$result=mysqli_query($conn,$sql);
	
	
	header("location:show.php");

	
}
?>

