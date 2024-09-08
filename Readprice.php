<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="price.css">
    <title>Document</title>
</head>
<body>

<?php
    include 'config.php';

    $did = isset($_GET['Id']) ? $_GET['Id'] : '';
    $blood_type = "";
    $tot_pin_requested = "";
    $tot_amount = "";
    $name = "";
    $hname = "";
    $email = "";
    $pnum = "";
    
    $sql = "SELECT * FROM demo WHERE Demo_ID ='$did'";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $did = $row['Demo_ID'];
            $blood_type = $row['btype'];
            $tot_pin_requested = $row['pin'];
            $tot_amount = $row['amount'];
            $name = $row['Name'];
            $hname = $row['hName'];
            $email = $row['Email'];
            $pnum = $row['Pnum'];
        }
    }
?>
    <div class="container">
    <h1>Get a price estimate</h1>
  
    <form method="post" action="Update.php" name="details"  >
        <input type="hidden" name="mode" value="PinRequest"/>
        <div class="estimate">
        
        <input type="text" placeholder="Enter the name" name="did" required value="<?php echo $did;?> "  readonly="readonly">

        <label class="type" ><b>Blood Type</b></label>
        <select  required value="<?php echo $blood_type;?> " >
            <option value="" disabled selected>Select Blood Type</option>
            <option value="200">A+</option>
            <option value="300">A-</option>
            <option value="150">B+</option>
            <option value="250">B-</option>
            <option value="500">AB+</option>
            <option value="600">AB-</option>
            <option value="550">O+</option>
            <option value="700">O-</option>
        </select>
        <label class="w3-text-green"><b>Quantity(pints)</b></label>
        <select name="tot_pin_requested" required value="<?php echo $tot_pin_requested;?> "  >
            <option value="" disabled selected>choose your option</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>&nbsp&nbsp&nbsp&nbsp;<br><br>
        <label><b>price</b></label>
        <input class="price" name="tot_amount"  required value="<?php echo $tot_amount;?> "  >
    </div>
       <div class="demo">
      <h3>Update a demo</h3>
      <label>Name</label>
      <input type="text"  placeholder="Name" name="name"  required value="<?php echo $name;?> "  ><br><br>
      <label>Hospital Name</label>
      <input type="text"  placeholder="Hospital Name" name="hname" required value="<?php echo $hname;?> "  ><br><br>
      <label>Email</label>
      <input type="text"  placeholder="Email" name="email" required value="<?php echo $email;?> "  ><br><br>
      <label>Phone number</label>
      <input type="tel"  placeholder="Phone" name="pnum" required value="<?php echo $pnum;?> "  ><br><br>


      <button type="submit" class="btn-btn-primary" name="reg" >Update</button>
    </div>
    </form>
</div>
<script src="price.js"></script>
</body>
</html>