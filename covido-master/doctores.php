<?php
include "conn.php";
session_start();


$sqlInsName = "SELECT * FROM `doctors`";
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
    <!-- site metas -->
    <title>Covido</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
</head>
<body class="main-layout inner_page">
    <!-- loader -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#"/></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <?php include "header.php"; ?>

    <!-- doctors -->
    <div class="doctors">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>What doctors say..</h2>
                    </div>
                </div>
            </div>
            <div class="row d_flex">
                <?php
                while ($data = mysqli_fetch_array($result1)) {
                    ?>
                    <div class="col-md-6">
                        <div id="ho_efcet" class="reader text_align_center">
                            <h3><?= htmlspecialchars($data[1]); ?></h3>
                            <p><?= htmlspecialchars($data[2]); ?></p>
                            <span><img src="images/do.png" alt="#"/></span>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- end doctors -->

    <!-- footer -->
    <?php include "footer.php"; ?>
    <!-- end footer -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
