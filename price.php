<?php

include 'config.php';



if(isset($_POST['reg']))
	{
	$bt= isset($_POST['blood_type']) ? $_POST['blood_type']:"";
	$pin= isset($_POST['tot_pin_requested']) ? $_POST['tot_pin_requested']:"";
	$amount= isset($_POST['tot_amount'])? $_POST['tot_amount']:"";
	$nm= isset($_POST['name']) ? $_POST['name']:"0";
	$hn= isset($_POST['hname'])? $_POST['hname']:"";
	$em= isset($_POST['email']) ? $_POST['email']:"";
    $pn= isset($_POST['pnum']) ? $_POST['pnum']:"";
	
	$sql= "INSERT INTO demo (btype,pin,amount,Name,hName,Email,Pnum) VALUES ('$bt','$pin','$amount'
	,'$nm','$hn','$em','$pn')";
	
	$result=mysqli_query($conn,$sql);
	
	
	header("location:crud.php");
}
?>