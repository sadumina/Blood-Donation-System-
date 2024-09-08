<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/price.css">
    <title>Document</title>
</head>
<body>
<?php
	include 'config.php';

    $did=isset($_POST['did'])? $_POST['did']:"";
	$bt= isset($_POST['blood_type']) ? $_POST['blood_type']:"";
	$pin= isset($_POST['tot_pin_requested']) ? $_POST['tot_pin_requested']:"";
	$amount= isset($_POST['tot_amount'])? $_POST['tot_amount']:"";
	$nm= isset($_POST['name']) ? $_POST['Name']:"0";
	$hn= isset($_POST['hname'])? $_POST['hname']:"";
	$em= isset($_POST['email']) ? $_POST['email']:"";
    $pn= isset($_POST['pnum']) ? $_POST['pnum']:"";
	

	$sql="UPDATE demo SET btype='$bt' , pin='$pin',  amount='$amount', Name='$nm',hName='$hn',Email='$em',Pnum='$pn' WHERE Demo_ID='$did' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:crud.php");
	}
	else
	{
		echo"wrong";
	}
	
	
?>

</body>