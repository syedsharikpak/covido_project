<?php
session_start();
include "conn.php";
if (!isset($_SESSION["username"])) {
    header("location: Login.php");
}
if (isset($_POST["submit"])) {
   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $phone = $_POST["phone"];
   $email = $_POST["email"];
   $date = $_POST["date"];
   $time = $_POST["time"];
   $address = $_POST["address"];
   $vaccine_id = $_POST["select_vaccine"]; // Ensure this is the id of the vaccine

   $sqlCategory = "INSERT INTO patient (firstname, lastname, phone, email, date, time, address, vaccine_id) 
                   VALUES ('$firstname', '$lastname', '$phone', '$email', '$date', '$time', '$address', '$vaccine_id')";

   $result = mysqli_query($conn, $sqlCategory);
   if ($result) {
       echo "<script>
       alert('Your Request Has Been Submitted. You Will Get Your Confirmation On Your Email Or Phone');
       </script>";
   } else {
       echo "<script>
       alert('Error: Unable to submit data. Please check the database connection or query.');
       </script>";
   }
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
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
       <!-- header        -->
       <?php  
       include "header.php";
       ?>
      <!-- end header -->
      <!-- about -->
      <div class="about">
         <div class="container_width"> 
           <div class="row d_flex">
            <form id="request" class="main_form" method="POST" >
            <div class="col-12">
            <h1 class="fw-normal text-secondary fs-4 text-uppercase mb-4"><b>Appointment Form For Vaccination</b></h1>
                     <div class="row">
                        <div class="col-md-6 ">
                           <input class="contactus" placeholder="First Name" type="type" name="firstname"> 
                        </div>
                        <div class="col-md-6 ">
                           <input class="contactus" placeholder="Last Name" type="type" name="lastname"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Phone" type="type" name="phone">                          
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Email" type="type" name="email"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Enter Date" type="date" name="date"> 
                        </div>
                        
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Enter Time" type="time" name="time"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Address" type="type" name="address"> 
                        </div>
                        
                        <div class="col-12">
    <select class="contactus" id="select_vaccine" name="select_vaccine" required>
        <option value="" disabled selected>Select a vaccine</option>
        <?php
        // Fetch vaccines from the database
        $vaccineQuery = "SELECT id, vaccine_name FROM vaccine";
        $vaccineResult = mysqli_query($conn, $vaccineQuery);
        while ($vaccineRow = mysqli_fetch_assoc($vaccineResult)) {
            echo "<option value='" . $vaccineRow['id'] . "'>" . $vaccineRow['vaccine_name'] . "</option>";
        }
        ?>
    </select>
    </div>
                       
                        <div class="col-md-12">
                           <button name="submit" class="send_btn">Get Appointment</button>
                        </div>
                     </div>
                  </form>
               </div>
               
     <div class="col-md-4">
                  <div class="about_img text_align_center">
                     <figure><img src="images/pro1.png" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="about_img text_align_center">
                     <figure><img src="images/pro2.png" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="about_img text_align_center">
                     <figure><img src="images/pro3.png" alt="#" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!--  footer -->
      <?php 
     include "footer.php";
     ?>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>