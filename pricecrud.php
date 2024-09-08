
<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
<div>
    <?php
	include "config.php";
	
	$sql="SELECT * FROM demo";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{ echo'<table border="2" cellspacing="15" cellpadding="10" align="center" bordercolor="#009900" >
	<tr>
		<td><b>Demo ID</b></td>
		<td><b>Blood Type</b></td>
		<td><b>Pints</b></td>
		<td><b>Total amount</b></td>
		<td><b>Name</b></td>
        <td><b>Hospital Name</b></td>
        <td><b>Email</b></td>
        <td><b>Phone number</b></td>
        
	</tr>';
		while($row=mysqli_fetch_assoc($result))
		{echo '<tr>' .
            '<td>' . $row['Demo_ID'] . '</td>' .
            '<td>' . $row['btype'] . '</td>' .
            '<td>' . $row['pin'] . '</td>' .
            '<td>' . $row['amount'] . '</td>' .
            '<td>' . $row['Name'] . '</td>' .
            '<td>' . $row['hName'] . '</td>' .
            '<td>' . $row['Email'] . '</td>' .
            '<td>' . $row['Pnum'] . '</td>' .
            
            '<td>' .
            '<button class="btn-btn-primary" onclick="location.href=\'Read.php?Id=' . $row['Demo_ID'] . '\'">Edit</button>' .
            '</td>' .
            '<td>' .
            '<form action="deleteprice.php" method="post">' .
            '<input type="hidden" name="delete_id" value="' . $row['Demo_ID'] . '">' .
            '<button type="submit" name="delete_btn">Delete</button>' . 
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
