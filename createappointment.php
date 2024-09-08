<?php

include 'config.php';



if(isset($_POST['reg']))
	{
    
	$name= isset($_POST['name']) ? $_POST['name']:"";
	$gender= isset($_POST['gender']) ? $_POST['gender']:"";
	$tel= isset($_POST['phone'])? $_POST['phone']:"";
	$date= isset($_POST['date']) ? $_POST['date']:"0";
	$time= isset($_POST['timeslot'])? $_POST['timeslot']:"";
	$loc= isset($_POST['location'])? $_POST['location']:"";
    $btype= isset($_POST['type'])? $_POST['type']:"";
    $dbefore= isset($_POST['donate_before'])? $_POST['donate_before']:"";
    $dc= isset($_POST['diseases'])? $_POST['diseases']:"";
    $al= isset($_POST['allergies'])? $_POST['allergies']:"";
    $tat= isset($_POST['tattoos'])? $_POST['tattoos']:"";
	
	$sql= "INSERT INTO appointments (name,gender,phone,date,time,location,btype,donatedb,diseases,allergies,tattoos)
     VALUES ('$name','$gender','$tel','$date','$time','$loc','$btype','$dbefore','$dc','$al','$tat')";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	
	
	header("location:crud.php");
}
?>
