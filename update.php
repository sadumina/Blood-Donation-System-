<?php

include 'config.php';


$aid = isset($_POST['id']) ? $_POST['id'] : "";
$name = isset($_POST['name']) ? $_POST['name'] : "";
$ge = isset($_POST['gender']) ? $_POST['gender'] : "";
$tel = isset($_POST['phone']) ? $_POST['phone'] : "";
$dat = isset($_POST['date']) ? $_POST['date'] : "";
$tim = isset($_POST['timeslot']) ? $_POST['timeslot'] : "";
$loc = isset($_POST['location']) ? $_POST['location'] : "";
$btype = isset($_POST['type']) ? $_POST['type'] : "";
$donatedb = isset($_POST['donate_before']) ? $_POST['donate_before'] : "";
$disease = isset($_POST['diseases']) ? $_POST['diseases'] : "";
$allergie = isset($_POST['allergies']) ? $_POST['allergies'] : "";
$tattoo = isset($_POST['tattoos']) ? $_POST['tattoos'] : "";

$sql = "UPDATE appointments SET name='$name', gender='$ge', phone='$tel', date='$dat', time='$tim', location='$loc', btype='$btype', donatedb='$donatedb', diseases='$disease', allergies='$allergie', tattoos='$tattoo' WHERE BRID='$aid'";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location:crud.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
