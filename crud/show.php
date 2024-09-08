<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
tr:hover {
    background-color: #f0f0f0;
}
.btn-edit {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 3px;
}
.btn-delete {
    background-color: #dc3545;
    color: #ffffff;
    border: none;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 3px;
}
</style>
</head>
<body>
<div>
    <?php
	include "config.php";
	
	$sql="SELECT * FROM contact";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{ echo'<table border="6" cellspacing="20" cellpadding="20" align="center" bordercolor="#ff0000"  >
	<tr>
		<td><b>User ID</b></td>
		<td><b>Name</b></td>
		<td><b>Email</b></td>
		<td><b>Phone number</b></td>
		<td><b>website</b></td>
        <td><b>msg</b></td>
        
	</tr>';
		while($row=mysqli_fetch_assoc($result))
		{echo '<tr>' .
            '<td>' . $row['contactid'] . '</td>' .
            '<td>' . $row['Name'] . '</td>' .
            '<td>' . $row['Email'] . '</td>' .
            '<td>' . $row['phone'] . '</td>' .
            '<td>' . $row['website'] . '</td>' .
            '<td>' . $row['msg'] . '</td>' .
            
            '<td>' .
            '<button class="btn-btn-primary" style="background-color: #007bff" onclick="location.href=\'update.php?Id=' . $row['contactid'] . '\'">Edit</button>' .
            '</td>' .
            '<td>' .
            '<form action="delet.php" method="post">' .
            '<input type="hidden" name="delete_id" value="' . $row['contactid'] . '">' .
            '<button type="submit" name="delete_btn" style =" background-color: #dc3545">Delete</button>' . 
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
