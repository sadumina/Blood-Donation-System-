<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalyst Bank</title>
    <link rel="icon" href="https://businessgoalhacker.blogspot.com/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    include 'config.php';

    $id = isset($_GET['Id']) ? $_GET['Id'] : '';
    $name = "";
    $gender = "";
    $phone = "";
    $date = "";
    $time = "";
    $location = "";
    $btype = "";
    $donatedb = "";
    $diseases = "";
    $allergies = "";
    $tattoos = "";

    $sql = "SELECT * FROM appointments WHERE BRID ='$id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id =$row['BRID'];
            $name =$row['name'];
            $gender =$row['gender'];
            $phone =$row['phone'];
            $date =$row['date'];
            $time =$row['time'];
            $location =$row['location'];
            $btype =$row['btype'];
            $donatedb =$row['donatedb'];
            $diseases =$row['diseases'];
            $allergies =$row['allergies'];
            $tattoos =$row['tattoos'];
        }
    }
    ?>
    <div class="container">
        <div class="logo">
            <img src="styles/logo.jpeg">
        </div>

        <form id="appointment-form" method="post" action="create.php">
            <h1>Book Appointment</h1>

            <input type="text" placeholder="" name="Id" required value="<?php echo $id; ?>" readonly="readonly"><br><br>

            <label for="name">Donor Name:</label>
            <input type="text" id="name" name="name" required value="<?php echo $name; ?>"><br><br>

            <label>Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male" <?php echo ($gender == 'male') ? 'checked' : ''; ?>> Male<br>
            <input type="radio" id="female" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?>> Female<br>
            <input type="radio" id="other" name="gender" value="other" <?php echo ($gender == 'other') ? 'checked' : ''; ?>> Other<br><br>

            <label for="phone">Contact No:</label>
            <input type="tel" name="phone" id="num" required value="<?php echo $phone; ?>"><br><br>

            <label for="date">Appointment Date:</label>
            <input type="date" id="date" name="date" required value="<?php echo $date; ?>"><br><br>

            <label>Time Slot</label>
           <input type="hidden" id="timeslot" name="timeslot"  required value="<?php echo $time; ?>">
            <button type="button" data-time="9.00AM-10.00AM" onclick="selectTimeSlot('9.00AM-10.00AM')">9.00AM-10.00AM</button>
            <button type="button" data-time="10.00AM-11.00AM" onclick="selectTimeSlot('10.00AM-11.00AM')">10.00AM-11.00AM</button><br>
            <button type="button" data-time="11.00AM-12.00AM" onclick="selectTimeSlot('11.00AM-12.00AM')">11.00AM-12.00AM</button>
            <button type="button" data-time="12.00AM-1.00PM" onclick="selectTimeSlot('12.00AM-1.00PM')">12.00AM-1.00PM</button><br>
            <button type="button" data-time="1.00PM-2.00PM" onclick="selectTimeSlot('1.00PM-2.00PM')">1.00PM-2.00PM</button>
            <button type="button" data-time="2.00PM-3.00PM" onclick="selectTimeSlot('2.00PM-3.00PM')" >2.00PM-3.00PM</button><br>
       


            <label for="location">Blood Donation Centre:</label>
            <select id="location" name="location" required>
                <option value="">Select location</option>
                <option value="malabe" <?php echo ($location == 'malabe') ? 'selected' : ''; ?>>Malabe Hospital</option>
                <option value="colombo" <?php echo ($location == 'colombo') ? 'selected' : ''; ?>>General Hospital</option>
                <option value="battaramulla" <?php echo ($location == 'battaramulla') ? 'selected' : ''; ?>>Nawaloka Hospital</option>
            </select><br><br>

            <label for="type">Blood Type:</label>
            <input type="text" id="type" name="type" required value="<?php echo $btype; ?>"><br><br>

            <label>Have you ever donated blood before?</label><br>
            <input type="radio" id="yes-donate-before" name="donate_before" value="yes" <?php echo ($donatedb == 'yes') ? 'checked' : ''; ?>> Yes<br>
            <input type="radio" id="no-donate-before" name="donate_before" value="no" <?php echo ($donatedb == 'no') ? 'checked' : ''; ?>> No<br><br>

            <hr>
            <h3>Health Security Check</h3>

            <label>Do you suffer from any diseases?</label><br>
            <input type="radio" id="yes-disease" name="diseases" value="yes" <?php echo ($diseases == 'yes') ? 'checked' : ''; ?>> Yes<br>
            <input type="radio" id="no-disease" name="diseases" value="no" <?php echo ($diseases == 'no') ? 'checked' : ''; ?>> No<br><br>

            <label>Do you have any allergies?</label><br>
            <input type="radio" id="yes-allergies" name="allergies" value="yes" <?php echo ($allergies == 'yes') ? 'checked' : ''; ?>> Yes<br>
            <input type="radio" id="no-allergies" name="allergies" value="no" <?php echo ($allergies == 'no') ? 'checked' : ''; ?>> No<br><br>

            <label>Do you have any tattoos?</label><br>
            <input type="radio" id="yes-tattoos" name="tattoos" value="yes" <?php echo ($tattoos == 'yes') ? 'checked' : ''; ?>> Yes<br>
            <input type="radio" id="no-tattoos" name="tattoos" value="no" <?php echo ($tattoos == 'no') ? 'checked' : ''; ?>> No<br><br>

            <h2>Terms and Conditions</h2>
            <label>
                <input type="checkbox" id="terms" name="terms" required>
                I agree to all the <a href="#">Terms and Conditions</a>

                <button class="submit" type="submit" name="reg">Book Appointment</button>

            </label><br><br>

           
