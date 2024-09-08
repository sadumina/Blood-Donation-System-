<!DOCTYPE html>
<html>
<head>
<title> Catalyst Bank </title>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link href='https://businessgoalhacker.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>

</head>


<body>
<?php

	include 'config.php';

	$id = isset($_GET['Id']) ? $_GET['Id'] : '';
	$name="";
	$em="";
	$tele="";
  $wb="";
  $mg="";
  
	
	$sql="SELECT * FROM contact WHERE contactid ='$id'";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$id=$row['contactid'];
			$name=$row['Name'];
			$em=$row['Email'];
			$tele=$row['phone'];
      $wb=$row['website'];
      $mg=$row['msg'];
      
			
		}
	}
		
?>
    <div class="header">
        <div class="inner-header">
            
        </div>
    </div>
    <div class="container">  
  <form  id="contact" action="approve.php" method="post">
    <h3>Edit a Form</h3>
    <h4>Update form through crud table</h4>
    <fieldset>
    
    <input type="text" placeholder="" name="Id" required value="<?php echo $id;?>"  readonly="readonly"><br></br>

    <input placeholder="Your name " name="Name" tabindex="1"  type="text" required value= "<?php echo $name;?> " />
    
    </fieldset>
    
   
   </label></fieldset>
    <fieldset>
      

      <input placeholder="email id "required="<?php echo $em;?>"  name="Email"   type="" />
    </fieldset>

    <fieldset>
      <input placeholder="Your Phone Number (optional)"  name="Tele"   type="tel" required value="<?php echo $tele;?>  " />
    </fieldset>

    <fieldset>
      <input placeholder="Your Web Site (optional)"  tabindex="5"name="web"    >
    </fieldset>

    <fieldset>
      <textarea required="" tabindex="4" name="msg" required value="<?php echo $mg;?> "></textarea>
    </fieldset>

    <fieldset>
      <button  class="btn-btn-primary"  id="contact-submit" name="reg" type="submit">Update</button>
    </fieldset>
   
  </form>
</div>

</body>