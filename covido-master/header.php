
<header class="header-area">
   <div class="left">

   </div>
   <div class="right">
      <?php
   if (isset($_SESSION["username"])) :
                        ?>
                        <a href="logout.php" class="fa fa-sign-out" style="font-size:24px;color:white"></a>
                        <?php
                        else :
                        ?>
                        
                        <a  href="Login.php" class="fa fa-user" style="font-size:24px;color:white"></a>
                          
                        <?php
                        endif;
                        ?>      
            </div>


   <div class="container">
      <div class="row d_flex">
         <div class="col-sm-3 logo_sm">
            <div class="logo">
               <a href="index.php"></a>
            </div>
         </div>
         <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
            <div class="navbar-area">
               <nav class="site-navbar">
                  <ul>
                     <li><a class="active" href="index.php">Home</a></li>
                     <li><a href="patient.php">Patient</a></li>
                     <li><a href="action.php">Hospital</a></li>
                     <li><a href="index.php" class="logo_midle">Covido</li>
                     <li><a href="vaccine.php">Vaccine</a></li>
                     <li><a href="doctores.php">doctores</a></li>
                     <li><a href="contact.php">Contact </a></li>

                  </ul>
                  <button href="action.php" class="nav-toggler">
                     <span></span>
                  </button>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>
