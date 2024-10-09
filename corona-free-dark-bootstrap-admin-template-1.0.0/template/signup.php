<?php
include "conn.php";
if (isset($_POST["signup"])) {
    $username =$_POST["username"];
    $email = $_POST["email"];
    $password =$_POST["password"];

    // Hash the password
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $sql = "INSERT INTO `signup` (`username`, `gmail`, `password`) VALUES ('$username', '$email', '$password')";
    $result= mysqli_query($conn, $sql);
    if ($result) {
        // echo "Registration successful!";
        $_SESSION["username"] = $username;
        header("Location: login.php");
        exit();
    } 
    // else {
    //     // Output the error message
    //     echo "Error: " . mysqli_error($conn);
    // }
}
if (!empty($username) && !empty($email) && !empty($password)) {
    // Proceed with the signup process
} else {
    echo "All fields are required.";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
     <link rel="stylesheet" href="./style.css"> 
</head>
<body> <!-- partial:index.partial.html --> 

<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 
        

        <div class="signin">
            <div class="content">
                <h2>Sign Up</h2>
                <form method="POST" class="form"> 
                    <div class="inputBox">
                        <input type="text" name="username" required> 
                        <i>Username</i>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" required> 
                        <i>Email</i>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" required> 
                        <i>Password</i>
                    </div>
                    <div class="links">
                        <a href="#">Already Have Account?</a>
                        <a href="login.php">Log In</a>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="signup" value="Sign Up"> 
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
