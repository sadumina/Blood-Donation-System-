<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
<div>
    <?php
	include"connect.php";
	
	$sql="SELECT * FROM signup";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{ echo'<table border="6" cellspacing="20" cellpadding="20" align="center" bordercolor="#009900" >
	<tr>
		<td><b>User ID</b></td>
		<td><b>First Name</b></td>
		<td><b>Last Name</b></td>
		<td><b>password</b></td>
		<td><b>confirm password</b></td>
        <td><b>Email</b></td>
        
	</tr>';
		while($row=mysqli_fetch_assoc($result))
		{echo '<tr>' .
            '<td>' . $row['userId'] . '</td>' .
            '<td>' . $row['firstname'] . '</td>' .
            '<td>' . $row['lastname'] . '</td>' .
            '<td>' . $row['password'] . '</td>' .
            '<td>' . $row['Confirm_password'] . '</td>' .
            '<td>' . $row['Email'] . '</td>' .
            
            '<td>' .
            '<button onclick="location.href=\'update.php?Id=' . $row['userId'] . '\'">Edit</button>' .
            '</td>' .
            '<td>' .
            '<form action="deleteAppointment.php" method="post">' .
            '<input type="hidden" name="delete_id" value="' . $row['userId'] . '">' .
            '<button type="submit" name="delete_btn" formaction="deletappointment.php">Delete</button>' . 
            '</form>' .
            '</td>' .
            '</tr>';
        
			
			 
		}
		
		echo'</table>';
	}
?>  

</div>
</body>
</html>