<?php
	$conn= mysqli_connect("localhost", "root", "", "blood_donation");
	
	if(!$conn)
	{
	
		die("connection error". mysqli_connect_error());
	}
	
?>