<?php
include("includes/db.php");
include("includes/header.php");

$result = mysqli_query($conn,"SELECT * FROM vehicles");
?>

<div class="hero">

<h1>Available Vehicles</h1>

<table border="1" cellpadding="10" cellspacing="0" style="margin:auto;background:white;">

<tr>
<th>ID</th>
<th>Vehicle</th>
<th>Brand</th>
<th>Category</th>
<th>Price/Day</th>
<th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['vehicle_name']; ?></td>

<td><?php echo $row['brand']; ?></td>

<td><?php echo $row['category']; ?></td>

<td>₹<?php echo $row['price']; ?></td>

<td>
<a href="vehicle-details.php?id=<?php echo $row['id']; ?>">
View
</a>
</td>

</tr>

<?php
}
?>

</table>

</div>

<?php
include("includes/footer.php");
?>
