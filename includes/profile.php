<?php
session_start();

include 'includes/db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $query);

$user = mysqli_fetch_assoc($result);

include 'includes/header.php';
?>

<div class="container">
    <h2>My Profile</h2>

    <div class="profile-box">

        <p><b>Name:</b> <?php echo $user['name']; ?></p>

        <p><b>Email:</b> <?php echo $user['email']; ?></p>

        <p><b>Phone:</b> <?php echo $user['phone']; ?></p>

        <p><b>Address:</b> <?php echo $user['address']; ?></p>

        <a href="edit_profile.php" class="btn">
            Edit Profile
        </a>

    </div>
</div>

<?php
include 'includes/footer.php';
?>
