<?php
	$conn= mysqli_connect("localhost", "root", "", "crudoperation");
	
	if(!$conn)
	{
	
		die("connection error". mysqli_connect_error());
	}
	
?>