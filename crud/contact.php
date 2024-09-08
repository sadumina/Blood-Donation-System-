<?php

include 'config.php';



if(isset($_POST['reg']))
	{
	$name= isset($_POST['Name']) ? $_POST['Name']:"";
	$em= isset($_POST['Email']) ? $_POST['Email']:"";
	$tel= isset($_POST['Tele'])? $_POST['Tele']:"";
	$wb= isset($_POST['web']) ? $_POST['web']:"0";
	$mg= isset($_POST['msg'])? $_POST['msg']:"";
	
	
	$sql= "INSERT INTO contact ( Name,Email,phone,website,msg) VALUES ('$name','$em','$tel','$wb','$mg')";
	
	$result=mysqli_query($conn,$sql);
	
	
	header("location:show.php");
}
?>
