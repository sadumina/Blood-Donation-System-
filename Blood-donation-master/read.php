<html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" ;content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/newsignup.css">
        <title>Catlyst Bank</title>
        
    </head>

    <body>


    <?php
      
      include "connect.php";

      $id=$_GET['Id'];
      $Firstname="";
      $lastname="";
      $password="";
      $confirmpassword="";
      $email="";

    $sql="SELECT * FROM signup WHERE userid ='$id'";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$id=$row['userid'];
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			$password=$row['Password'];
            $confirm=$row['Confirm_password'];
            $email=$row['Email'];
           
			
		}
	}
  
    
    
    
    ?>
        <div class="signup-box">
            <h1>Sign up</h1>
            <h4>Donate Your Blood And Save a Life</h4>
             
            <form method="post" action="update.php">
                
                <label for="name">UserID</label>
                <input type="text" placeholder="Enter the name" name="id" required value="<?php echo $id;?> "  readonly="readonly">

                <label>First Name</label>
                <input type="text" placeholder="First Name" name="Firstname" required value="<?php echo $fname;?>">

                <label>Last Name</label>
                <input type="text" placeholder="Last name" name="lastname" required value="<?php echo $lname;?>">

                <label>Set a password</label>
                <input type="password" placeholder="Your password" name="password" required value="<?php echo $password;?>">

                <label>confirm password</label>
                <input type="password" placeholder="Confirm password" name="confirmpassword" required value="<?php echo $confirm;?>">

                <label>Email</label>
                <input type="email" placeholder="Email" name="email" required value="<?php echo $email;?>">

                <button type="submit" class="btn-btn-primary" name="submit">update</button>
            </form>
           <p> You have to agree with the conditions
                <a href="#">privacy and policy</a> and <a href="terms.html">terms and condition</a>
            </p>
        </div>
        <p class="para-2">Already have an account?<a href="#">update</a></p>
    </body>

    </html>

