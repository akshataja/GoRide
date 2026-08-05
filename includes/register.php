<?php
include("includes/db.php");

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="INSERT INTO users(name,email,phone,password)
    VALUES('$name','$email','$phone','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Registration Successful');window.location='login.php';</script>";
    }
    else
    {
        echo "<script>alert('Registration Failed');</script>";
    }
}

include("includes/header.php");
?>

<div class="hero">

<h2>Create Account</h2>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" required><br><br>

<input type="email" name="email" placeholder="Email" required><br><br>

<input type="text" name="phone" placeholder="Phone Number" required><br><br>

<input type="password" name="password" placeholder="Password" required><br><br>

<input type="submit" name="register" value="Register">

</form>

</div>

<?php include("includes/footer.php"); ?>
