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
   <!-- Bootstrap CSS -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

   <!-- Bootstrap JS (for dropdown functionality) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- top -->

   <!-- header        -->
   <?php
   include "header.php";
   ?>
   <div class="full_bg">
      <!-- header inner -->
      <div class="section">
         <!-- carousel code -->
         <div id="banner1" class="carousel slide slider_main">
            <ol class="carousel-indicators ">
               <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
               <li data-target="#banner1" data-slide-to="1" class="">02</li>
               <li data-target="#banner1" data-slide-to="2" class="active">03</li>
            </ol>
            <div class="carousel-inner">
               <!-- first slide -->
               <div class="carousel-item active">
                  <div class="carousel-caption cuplle">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="photog">
                                 <h1>Care early<br>Coronavirus</h1>
                                 <?php
                      if (isset($_SESSION["username"])) :
                        ?>
                        <a class="read_more" href="about.php">About Virus</a>
                        <?php
                        else :
                        ?>
                        
                         <a class="read_more" href="Login.php">About Virus</a>
                          
                        <?php
                        endif;
                        ?>   
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- second slide -->
               <div class="carousel-item">
                  <div class="carousel-caption cuplle">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="photog">
                                 <h1>Care early<br>Dengue virus </h1>
                                 <?php
                      if (isset($_SESSION["username"])) :
                        ?>
                        <a class="read_more" href="Dengue.php">About Virus</a>
                        <?php
                        else :
                        ?>
                         <a class="read_more" href="Login.php">About Virus</a>
                          
                        <?php
                        endif;
                        ?> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- third slide -->
               <div class="carousel-item">
                  <div class="carousel-caption cuplle">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="photog">
                                 <h1>Care early<br>Poliovirus</h1>
                                 <?php
                      if (isset($_SESSION["username"])) :
                        ?>
                        <a class="read_more" href="Poliovirus.php">About Virus</a>
                        <?php
                        else :
                        ?>
                         <a class="read_more" href="Login.php">About Virus</a>
                          
                        <?php
                        endif;
                        ?> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- controls -->
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
   <!-- end banner -->
   <!-- about -->
   <div class="about">
      <div class="container_width">
         <div class="row d_flex">
            <div class="col-md-7">
               <div class="titlepage text_align_left">
                  <h2>About Poliovirus </h2>
                  <p>Poliovirus is a highly contagious virus that primarily affects the nervous system and can lead to poliomyelitis (polio), a disease characterized by paralysis.
                  </p>
                  <?php
                      if (isset($_SESSION["username"])) :
                        ?>
                        <a class="read_more" href="Poliovirus.php">About Virus</a>
                        <?php
                        else :
                        ?>
                         <a class="read_more" href="Login.php">About Virus</a>
                          
                        <?php
                        endif;
                        ?> 
               </div>
            </div>
            <div class="col-md-5">
               <div class="about_img text_align_center">
                  <figure><img src="images/polio.png" alt="#" /></figure>
               </div>
            </div>

         </div>
      </div>
   </div>
   <!-- end about -->
   <!-- coronata -->
   <div class="coronata">
      <div class="container">
         <div class="row d_flex grid">
            <div class="col-md-7">
               <div class="coronata_img text_align_center">
                  <figure><img src="images/corona.png" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-5 oder1">
               <div class="titlepage text_align_left">
                  <h2>Coronavirus what it is?</h2>
                  <p>Coronaviruses are a large family of viruses that can cause illnesses ranging from the common cold to more severe diseases
                  </p>
                  <?php
                      if (isset($_SESSION["username"])) :
                        ?>
                        <a class="read_more" href="about.php">About Virus</a>
                        <?php
                        else :
                        ?>
                         <a class="read_more" href="Login.php">About Virus</a>
                          
                        <?php
                        endif;
                        ?> 
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end coronata -->

   <!-- protect -->
   <div class="protect">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center">
                  <h2>How to Protect Yourself</h2>
                  <p>Impliment On These Thing To Save Your Self From Any Virus.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="protect_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="protect_box text_align_center">
                           <div class="desktop">
                              <i><img src="images/pro1.png" alt="#" /></i>
                              <h3> Wear Mask</h3>
                              <span>Wear Mask When You Go Outside.</span>
                           </div>

                        </div>
                     </div>
                     <div class="item">
                        <div class="protect_box text_align_center">
                           <div class="desktop">
                              <i><img src="images/pro2.png" alt="#" /></i>
                              <h3> Wash Your Hands</h3>
                              <span> Wash Hand When You Come Back.</span>
                           </div>

                        </div>
                     </div>
                     <div class="item">
                        <div class="protect_box text_align_center">
                           <div class="desktop">
                              <i><img src="images/pro3.png" alt="#" /></i>
                              <h3> Stay at Home</h3>
                              <span> Do Not Go Outside Without Need.</span>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- end protect -->
   <!-- cases -->
   <div class="cases">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center ">
                  <h2>Coronavirus Cases</h2>
                  <p>Understanding the Current Trends in Coronavirus Cases</p>
               </div>
            </div>
         </div>
         <div class="row d_flex">
            <div class=" col-md-4">
               <div class="latest text_align_center">
                  <figure><img src="images/cases1.png" alt="#" /></figure>

                  <div class="nostrud">
                     <h3>Case 1</h3>
                     <p>A 35-year-old male tested positive for COVID-19 after experiencing mild symptoms, including a sore throat and fatigue. He self-isolated at home and monitored his condition. Over the course of a week, his symptoms gradually improved without the need for hospitalization. He remained in touch with his healthcare provider for guidance.He remained in touch with his healthcare provider for guidance.</p>
                  </div>
               </div>
            </div>
            <div class=" col-md-4">
               <div class="latest text_align_center">
                  <figure><img src="images/cases2.png" alt="#" /></figure>

                  <div class="nostrud">
                     <h3>Case 2</h3>
                     <p>A 62-year-old female with underlying health conditions was admitted to the hospital due to severe respiratory distress caused by COVID-19. She required supplemental oxygen and supportive care during her stay. After a two-week treatment, her condition stabilized, allowing her to be discharged with instructions for continued home care. Follow-up appointments were scheduled to monitor her recovery.</p>
                  </div>
               </div>
            </div>
            <div class=" col-md-4">
               <div class="latest text_align_center">
                  <figure><img src="images/cases3.png" alt="#" /></figure>

                  <div class="nostrud">
                     <h3>Case 3</h3>
                     <p>A 28-year-old male was identified as an asymptomatic carrier of COVID-19 during routine testing at his workplace. Despite showing no symptoms, he followed guidelines for self-isolation and notified close contacts for testing. His case highlights the importance of testing, as asymptomatic individuals can still spread the virus. He remained healthy throughout his isolation period and tested negative after two weeks.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end cases -->
   <!-- doctors -->
   <div class="doctors">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center ">
                  <h2>What doctors say about Coronaviruse</h2>
               </div>
            </div>
         </div>
         <div class="row d_flex">
            <div class=" col-md-6">
               <div id="ho_efcet" class="reader text_align_center">

                  <h3>Dr. Anthony Fauci</h3>
                  <p>Director of the National Institute of Allergy and Infectious Diseases, emphasizes the importance of vaccination: "The best way to prevent infection is to get vaccinated. Vaccines are safe and effective and are our best tool to end the pandemic. By getting vaccinated, we not only protect ourselves but also those around us, especially vulnerable populations."</p>
                  <span><img src="images/do.png" alt="#" /></span>
               </div>
            </div>
            <div class=" col-md-6">
               <div id="ho_efcet" class="reader text_align_center">

                  <h3>Dr. Tedros Adhanom Ghebreyesus,</h3>
                  <p>Director-General of the World Health Organization, highlights a comprehensive approach: "Vaccination is a crucial part of the solution to control the pandemic, but it must be accompanied by public health measures such as wearing masks, practicing good hand hygiene, and maintaining physical distance. We must work together to ensure equitable access to vaccines worldwide to truly combat this global health crisis.</p>
                  <span><img src="images/do.png" alt="#" /></span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end cases -->
   <!-- update -->
   <div class="update">
      <div class="cevery_white">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Get Every Update.... </h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="cevery_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <form id="colof" class="form_subscri">
                     <input class="newsl" placeholder="Your Email" type="text" name="Email">
                     <?php
                      if (isset($_SESSION["username"])) :
                        ?>

                        <button class="subsci_btn">Subscribe Now</button>
                        <?php
                        else :
                        ?>
                         <button href="Login.php" class="subsci_btn">Subscribe Now</button>
                          
                        <?php
                        endif;
                        ?> 
                     
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- update -->
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