<?php
session_start();
include "conn.php";

$sqlInsName = "SELECT * from patient inner join vaccine
on patient.vaccine_id = vaccine.id";
$result1 = mysqli_query($conn, $sqlInsName);
$numOfIns = mysqli_num_rows($result1);

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
  <!-- endinject -->
  <!-- Layout styles -->
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
                <img class="img-xs rounded-circle " src="assets/images/faces/admin.png" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal"><?= $_SESSION["username"] ?></h5>

              </div>
            </div>
            <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">


              </a>

              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>

        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          </ul>
        </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="patient.php">
            <span class="menu-icon">
              <i class="mdi mdi-account"></i>
            </span>
            <span class="menu-title">Patient</span>

          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="hospital.php">
            <span class="menu-icon">
              <i class="mdi mdi-hospital"></i>
            </span>
            <span class="menu-title">Hospital</span>

          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="vaccine.php">
            <span class="menu-icon">
              <i class="mdi mdi-needle"></i>
            </span>
            <span class="menu-title">Vaccine</span>

          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="doctors.php">
            <span class="menu-icon">
              <i class="mdi mdi-doctor"></i>
            </span>
            <span class="menu-title">Doctor</span>

          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="helpcenter.php">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
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

            </a>

            </li>
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
          
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <!-- <ul class="navbar-nav w-25">
    <li class="nav-item w-100">
        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" method="GET" action="">
            <input type="text" name="search" class="form-control" placeholder="Search by name" required>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </li>
</ul> -->
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Patient Requests</h4>
                <div class="table-responsive">
                    <table class="table">
                                    <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Address</th>
                                <th>Select Vaccine</th>
                            </tr>
                        </thead>
                        <?php
while ($data = mysqli_fetch_array($result1)) {
?>
                        <tbody id="patient-requests">
                            <tr class="patient-row">
                                <td><span class="pl-2"><?= htmlspecialchars($data['firstname']); ?></span></td>
                                <td><?= htmlspecialchars($data['lastname']); ?></td>
                                <td><?= htmlspecialchars($data['phone']); ?></td>
                                <td><?= htmlspecialchars($data['email']); ?></td>
                                <td><?= htmlspecialchars($data['date']); ?></td>
                                <td><?= htmlspecialchars($data['time']); ?></td>
                                <td><?= htmlspecialchars($data['address']); ?></td>
                                <td><?= htmlspecialchars($data['vaccine_name']); ?></td>
                            </tr>
                            <?php
}	
?> 
                        </tbody>

                    </table>
                </div>
                <button id="show-more" class="btn btn-primary mt-3">Show More</button>
<button id="show-less" class="btn btn-secondary mt-3 d-none">Show Less</button>

            </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const rows = document.querySelectorAll('.patient-row');
        const showMoreButton = document.getElementById('show-more');
        const showLessButton = document.getElementById('show-less');
        let visibleCount = 4; // Initial visible rows count
        let totalRows = rows.length; // Total rows count

        // Initially hide all rows except the first four
        rows.forEach((row, index) => {
            if (index >= visibleCount) {
                row.classList.add('d-none');
            }
        });

        // Function to display more rows
        showMoreButton.addEventListener('click', function () {
            let newVisibleCount = Math.min(visibleCount + 4, totalRows); // Show up to 4 more

            for (let i = visibleCount; i < newVisibleCount; i++) {
                rows[i].classList.remove('d-none');
            }

            visibleCount = newVisibleCount; // Update the visible count

            // Hide the Show More button if all rows are displayed
            if (visibleCount >= totalRows) {
                showMoreButton.classList.add('d-none');
            }

            // Show the Show Less button
            showLessButton.classList.remove('d-none');
        });

        // Function to hide rows
        showLessButton.addEventListener('click', function () {
            if (visibleCount > 4) {
                visibleCount = Math.max(visibleCount - 4, 4); // Reduce to a minimum of 4

                for (let i = visibleCount; i < rows.length; i++) {
                    rows[i].classList.add('d-none');
                }

                // Show the Show More button if not all rows are displayed
                if (visibleCount < totalRows) {
                    showMoreButton.classList.remove('d-none');
                }
            }

            // Hide the Show Less button if only the initial rows are visible
            if (visibleCount === 4) {
                showLessButton.classList.add('d-none');
            }
        });
    });
</script>

