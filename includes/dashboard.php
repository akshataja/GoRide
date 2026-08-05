<?php
session_start();

if(!isset($_SESSION['email']))
{
    header("Location: login.php");
}

include("includes/header.php");
?>

<div class="hero">

<h1>User Dashboard</h1>

<p>Welcome <?php echo $_SESSION['email']; ?></p>

<br>

<a href="vehicles.php">View Vehicles</a>

<br><br>

<a href="my-bookings.php">My Bookings</a>

<br><br>

<a href="profile.php">My Profile</a>

<br><br>

<a href="logout.php">Logout</a>

</div>

<?php
include("includes/footer.php");
?>
