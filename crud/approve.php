<<html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" ;content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/newsignup.css">
        <title>Catlyst Bank</title>
        
    </head>

    <body>
<?php
	include 'config.php';

	$id=isset($_POST['Id'])? $_POST['Id']:"";
	$name=isset($_POST['Name'])? $_POST['Name']:"";
	$em=isset($_POST['Email'])? $_POST['Email']:"";
	$tele=isset($_POST['Tele']) ? $_POST['Tele']:"";
    $wb=isset($_POST['web']) ? $_POST['web']:"";
    $mg=isset($_POST['msg']) ? $_POST['msg']:"";
    
	

	$sql="UPDATE contact SET  Name='$name' , Email='$em',  phone='$tele', website='$web',msg='$mg' WHERE contactid='$id' ";
		
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		header("location:show.php");
	}
	else
	{
		echo"wrong";
	}
	
	
?>

</body>