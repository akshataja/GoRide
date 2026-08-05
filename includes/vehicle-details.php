<?php
include("includes/db.php");
include("includes/header.php");

$id = $_GET['id'];

$sql = "SELECT * FROM vehicles WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="hero">

<h1><?php echo $row['vehicle_name']; ?></h1>

<p><b>Brand :</b> <?php echo $row['brand']; ?></p>

<p><b>Category :</b> <?php echo $row['category']; ?></p>

<p><b>Price :</b> ₹<?php echo $row['price']; ?> / Day</p>

<p><?php echo $row['description']; ?></p>

<br>

<a href="booking.php?id=<?php echo $row['id']; ?>">Book Now</a>

</div>

<?php
include("includes/footer.php");
?>
