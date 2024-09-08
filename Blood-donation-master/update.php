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
	include 'connect.php';
	$sid=isset($_POST['id'])? $_POST['id']:"";
	$Fisrtname=isset($_POST['Firstname'])? $_POST['Firstname']:"";
	$lastname=isset($_POST['lastname'])? $_POST['lastname']:"";
	$password=isset($_POST['password']) ? $_POST['password']:"";
    $confirmpassword=isset($_POST['confirmpassword']) ? $_POST['confirmpassword']:"";
    $email=isset($_POST['email']) ? $_POST['email']:"";
    
	

	$sql="UPDATE signup SET firstname='$Fisrtname' , lastname='$lastname', Password='$password', Confirm_password='$confirmpassword',Email='$email' WHERE userid='$sid' ";
		
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

