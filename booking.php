<?php
session_start();
include("includes/db.php");
include("includes/header.php");

if(!isset($_SESSION['email']))
{
    header("Location: login.php");
}

$id = $_GET['id'];

if(isset($_POST['book']))
{
    $email = $_SESSION['email'];
    $booking_date = $_POST['booking_date'];
    $return_date = $_POST['return_date'];

    $sql = "INSERT INTO bookings(vehicle_id,email,booking_date,return_date,status)
    VALUES('$id','$email','$booking_date','$return_date','Pending')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Vehicle Booked Successfully');</script>";
    }
}
?>

<div class="hero">

<h2>Book Vehicle</h2>

<form method="POST">

<label>Booking Date</label><br>
<input type="date" name="booking_date" required><br><br>

<label>Return Date</label><br>
<input type="date" name="return_date" required><br><br>

<input type="submit" name="book" value="Book Now">

</form>

</div>

<?php
include("includes/footer.php");
?>
