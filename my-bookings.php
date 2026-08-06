<?php
session_start();
include("includes/db.php");
include("includes/header.php");

if(!isset($_SESSION['email']))
{
    header("Location: login.php");
}

$email = $_SESSION['email'];

$sql = "SELECT * FROM bookings WHERE email='$email'";
$result = mysqli_query($conn,$sql);
?>

<h2>My Bookings</h2>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Vehicle ID</th>
<th>Booking Date</th>
<th>Return Date</th>
<th>Status</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['vehicle_id']; ?></td>
<td><?php echo $row['booking_date']; ?></td>
<td><?php echo $row['return_date']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>

<?php } ?>

</table>

<?php include("includes/footer.php"); ?>
