<?php
include("includes/db.php");
include("includes/header.php");

$id = $_GET['id'];

$sql = "SELECT * FROM vehicles WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container">

    <h2>Vehicle Details</h2>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <td><b>Vehicle Name</b></td>
            <td><?php echo $row['vehicle_name']; ?></td>
        </tr>

        <tr>
            <td><b>Brand</b></td>
            <td><?php echo $row['brand']; ?></td>
        </tr>

        <tr>
            <td><b>Category</b></td>
            <td><?php echo $row['category']; ?></
