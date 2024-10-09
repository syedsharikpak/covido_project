<?php
include "conn.php";

if (isset($_POST["signup"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $Type = $_POST["Type"];
    
    // Hash the password (uncomment when ready to use)
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $sql = "INSERT INTO `sign_up`(`username`, `email`, `password`, `whats_your_type`) VALUES ('$username','$email','$password','$Type')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Redirect to login page
        header("Location: Login.php");
        exit; // Make sure to exit after redirect
    } 
    // else {
    //     // Output the error message
    //     echo "Error: " . mysqli_error($conn);
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Covido</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#"/></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <?php include "header.php"; ?>
    <!-- end header -->

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_left">
                        <h2>Sign Up</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="request" method="POST" class="main_form">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Username" type="text" name="username" required>
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="email" name="email" required> 
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Password" type="password" name="password" required>                          
                            </div>
                            <div class="col-12">
                                <select class="contactus" name="Type" required>
                                    <option selected disabled>What's Your Type</option>
                                    <option value="1">Hospital</option>
                                    <option value="2">Patient</option>
                                    <option value="3">Admin</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <p>Already Have An Account? <a class="text-primary" href="Login.php">Login</a></p>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <button name="signup" class="send_btn">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="col-md-6">
                    <div class="map-responsive">
                        <img src="images/corona.png" width="600" height="540" frameborder="0" style="border:0; width: 100%;" allowfullscreen="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>Resources</h3>
                            <ul class="menu_footer">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="patient.php">Patient</a></li>
                                <li><a href="action.php">Hospital</a></li>
                                <li><a href="vaccine.php">Vaccine</a></li>
                                <li><a href="doctores.php">Doctors</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>About Us</h3>
                            <p>Our website provides comprehensive information about vaccinations. Users can learn about different vaccines and easily book their vaccination appointments.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>Contact Us</h3>
                            <ul class="top_infomation">
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Call: 0313 3223898</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:Covido@gmail.com">Email: Covido@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>Countries</h3>
                            <div class="map">
                                <img src="images/map.png" alt="#" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <p>© 2024 All Rights Reserved. Design by <a href="https://html.design/">Our Team</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
