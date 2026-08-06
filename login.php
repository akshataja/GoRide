<?php
session_start();
include("includes/db.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
    }
    else
    {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}

include("includes/header.php");
?>

<div class="hero">

<h2>User Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required><br><br>

<input type="password" name="password" placeholder="Password" required><br><br>

<input type="submit" name="login" value="Login">

</form>

</div>

<?php include("includes/footer.php"); ?>
