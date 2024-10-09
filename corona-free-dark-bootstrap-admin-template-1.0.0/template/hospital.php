<?php
session_start();
include "conn.php";
if (!isset($_SESSION["username"])) {
  header("Location: login.php"); // Redirect to login page
  exit();
}

// Check if the user is logged in
// Handle form submission
if (isset($_POST["submit"])) {
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $description = mysqli_real_escape_string($conn, $_POST["des"]);
  
  // Handle image upload
  if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
      $imgTmp = $_FILES['image']['tmp_name'];
      $imgName = $_FILES['image']['name'];
      $imgPath =  basename($imgName); // Change to your desired upload directory
      
      // Move the uploaded file
      if (move_uploaded_file($imgTmp,'uploads/' . $imgPath)) {
          $img = mysqli_real_escape_string($conn, $imgPath);
          
          // Prepare SQL statement
          $sqlCategory = "INSERT INTO `hospital` (`img`, `hospitalname`, `description`) VALUES ('$img', '$name', '$description')";
          
          if (mysqli_query($conn, $sqlCategory)) {
              echo "<script>alert('New Hospital Inserted');</script>";
          } else {
              echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
          }
      } else {
          echo "<script>alert('Failed to upload image.');</script>";
      }
  } else {
      echo "<script>alert('Error with image upload.');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>𝐂𝐎𝐕𝐈𝐃𝐎 Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <h1><b>𝐂𝐎𝐕𝐈𝐃𝐎</b></h1>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle" src="assets/images/faces/admin.png" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal"><?= $_SESSION["username"] ?></h5>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item"></a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.php">
            <span class="menu-icon"><i class="mdi mdi-speedometer"></i></span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="patient.php">
            <span class="menu-icon"><i class="mdi mdi-account"></i></span>
            <span class="menu-title">Patient</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="hospital.php">
            <span class="menu-icon"><i class="mdi mdi-hospital"></i></span>
            <span class="menu-title">Hospital</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="vaccine.php">
            <span class="menu-icon"><i class="mdi mdi-needle"></i></span>
            <span class="menu-title">Vaccine</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="doctors.php">
            <span class="menu-icon"><i class="mdi mdi-doctor"></i></span>
            <span class="menu-title">Doctor</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="helpcenter.php">
            <span class="menu-icon"><i class="mdi mdi-file-document-box"></i></span>
            <span class="menu-title">Help Center</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="logout.php">
            <span class="menu-icon">
              <i class="mdi mdi-logout text-danger"></i>
            </span>
            <span class="menu-title">Log Out</span>

          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          <ul class="navbar-nav navbar-nav-right">
          <li>
              <a href="../../covido-master/index.php" type="button" class="btn btn-danger">Open Website</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="assets/images/faces/admin.png" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $_SESSION["username"] ?></p>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item"></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="logout.php">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Hospital Registration Form</h4>
                <p class="card-description">Fill out the details below to register a new hospital.</p>
                <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="hospitalName">Hospital Name</label>
                    <input name="name" type="text" class="form-control" id="hospitalName" placeholder="Enter hospital name" required>
                  </div>
                  <div class="form-group">
                     <label for="hospitalImg">Upload Image</label>
                     <input name="image" type="file" class="form-control" id="hospitalImg" accept="image/*" required>
              </div>
                  <div class="form-group">
                    <label for="hospitalDescription">Description</label>
                    <textarea name="des" class="form-control" id="hospitalDescription" rows="4" placeholder="Enter hospital description" required></textarea>
                  </div>
                  <button name="submit" type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>
