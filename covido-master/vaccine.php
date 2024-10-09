<?php

include "conn.php";
session_start();

$sqlInsName = "SELECT * FROM `vaccine`";
$result1 = mysqli_query($conn, $sqlInsName);
$numOfIns = mysqli_num_rows($result1);

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
      <?php
while ($data = mysqli_fetch_array($result1)) {
?>
    
      <div class="about">
         <div class="container_width">
       
            <div class="row d_flex">
            
                   <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <h2><?= htmlspecialchars($data['vaccine_name']); ?></h2>
                     <p><?= htmlspecialchars($data['description_vaccine']); ?>
                     </p>
                     <?php
                      if (isset($_SESSION["username"])) :
                        ?>
                        <a class="read_more" href="patient.php">Apply For Vaccination</a>
                        <?php
                        else :
                        ?>
                         <a class="read_more" href="Login.php">Apply For Vaccination</a>
                          
                        <?php
                        endif;
                        ?> 
                      
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img text_align_center">
                  <figure><a href="patient.php"><img src="<?= "../corona-free-dark-bootstrap-admin-template-1.0.0/template/uploads/".$data['img_vaccine']; ?>" alt="#"/></a></figure>
                  </div>
             
               </div>
             
       

            </div>
         </div>
       
         
</div>
<?php
}
?> 
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