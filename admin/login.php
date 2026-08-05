<?php
session_start();

include '../includes/db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['admin'] = $email;

        header("Location: dashboard.php");
        exit();

    }else{

        $error = "Invalid Email or Password";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login - GoRide</title>

<link rel="stylesheet" href="../css/style.css">

</head>

<body>

<div class="login-box">

<h2>Admin Login</h2>

<?php
if(isset($error)){
    echo "<p>".$error."</p>";
}
?>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<br><br>

<input type="password" name="password" placeholder="Password" required>

<br><br>

<button type="submit" name="login">
Login
</button>

</form>

</div>

</body>
</html>
