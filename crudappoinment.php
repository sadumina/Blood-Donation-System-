<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
    <?php
    include "config.php";

    $sql = "SELECT * FROM appointments";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<table border="3" cellspacing="15" cellpadding="8" align="center" bordercolor="#ff0000">
        <tr>
            <td><b>User ID</b></td>
            <td><b>Name</b></td>
            <td><b>Gender</b></td>
            <td><b>Phone</b></td>
            <td><b>Date</b></td>
            <td><b>Time</b></td>
            <td><b>Location</b></td>
            <td><b>Blood Type</b></td>
            <td><b>Donated Before</b></td>
            <td><b>Diseases</b></td>
            <td><b>Allergies</b></td>
            <td><b>Tattoos</b></td>
            <td colspan="2"><b>Actions</b></td>
        </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>' .
                '<td>' . $row['BRID'] . '</td>' .
                '<td>' . $row['name'] . '</td>' .
                '<td>' . $row['gender'] . '</td>' .
                '<td>' . $row['phone'] . '</td>' .
                '<td>' . $row['date'] . '</td>' .
                '<td>' . $row['time'] . '</td>' .
                '<td>' . $row['location'] . '</td>' .
                '<td>' . $row['btype'] . '</td>' .
                '<td>' . $row['donatedb'] . '</td>' .
                '<td>' . $row['diseases'] . '</td>' .
                '<td>' . $row['allergies'] . '</td>' .
                '<td>' . $row['tattoos'] . '</td>' .
                '<td>' .
                '<button class="submit" style="background-color: #007bff" onclick="location.href=\'Read.php?Id=' . $row['BRID'] . '\'">Edit</button>' .
                '</td>' .
                '<td>' .
                '<form action="delete_appointment.php" method="post">' .
                '<input type="hidden" name="delete_id" value="' . $row['BRID'] . '">' .
                '<button type="submit" name="delete_btn" style="background-color: #dc3545">Delete</button>' . 
                '</form>' .
                '</td>' .
                '</tr>';
        }

        echo '</table>';
    }
    ?>
</div>
</body>
</html>
