<?php
session_start();
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
                   <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <h2>About Dengue virus </h2>
                     <p>Dengue virus (DENV) is an arbovirus belonging to the Flaviviridae family, primarily transmitted by Aedes mosquitoes, particularly Aedes aegypti and Aedes albopictus. It causes dengue fever, a tropical disease that can lead to severe flu-like symptoms and serious complications in some cases. The virus is prevalent in tropical and subtropical regions worldwide, with transmission occurring through the bite of infected mosquitoes, often in urban areas. Symptoms typically appear 4 to 10 days after infection and include high fever, severe headaches, joint and muscle pain, fatigue, nausea, and rash. In severe cases, dengue can progress to dengue hemorrhagic fever (DHF) or dengue shock syndrome (DSS), which can be life-threatening due to bleeding and organ impairment. There is no specific antiviral treatment for dengue; management focuses on supportive care, including hydration and pain relief with acetaminophen. Preventive measures include vector control to eliminate breeding sites, personal protection against mosquito bites, and vaccination with Dengvaxia, which is recommended for individuals with a history of dengue infection. The global incidence of dengue has been rising, underscoring the importance of ongoing public health efforts to manage and reduce the diseases burden.
                     </p>
                     <a class="read_more" href="index.php">Go Back</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="images/dengue.jpg" alt="#" /></figure>
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