<?php 
ob_start();
include('server.php'); 
if (!isset($_SESSION['lp_email'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ligtas Pinas</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <?php include('nav.php'); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title" style="margin-top: 10px">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Evacuation Center</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Ligtas Pinas</a></li>
                            <li class="active">Evacuation Center</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <?= $result_evacuation; ?>
                            <h3 class="box-title">Add Evacuation Center</h3>
                            <div id="googleMap" style="width:100%;height:380px;"></div>
                              <script>
                                var lat = 0;
                                var lng = 0;

                                function myMap() {
                                var mapProp= {
                                    center:new google.maps.LatLng(14.653687,120.968495),
                                    zoom:14,
                                };
                                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

                                google.maps.event.addListener(map, 'click', function(event) {
                                    lat = event.latLng.lat();
                                    lng = event.latLng.lng();
                                  window.location.href = "evacuation_add.php?lat=" + lat + "&lng=" + lng;
                                });
                                }
                                myMap();
                                </script>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbS4HN65gf6HMB18FweVuDTvDli1fWhfo&callback=myMap"></script>
                        <?php
                          if (isset($_GET["lat"]) && isset($_GET["lng"])) {
                            $hello = $_GET["lat"] . " " . $_GET["lng"];

                            $_SESSION['lat'] = $_GET["lat"];
                            $_SESSION['lng'] = $_GET["lng"];

                            echo "<script>alert('Evacuation Center Located!')</script>";
                        }
                        ?><br>
                        <form action="" method="post">
                            <div class="form-group">
                                <code>Location name</code>
                                <input type="text" name="location" class="form-control" placeholder="Enter location name">
                            </div>
                            <div class="form-group">
                                <code>Description</code>
                                <input type="text" name="description" class="form-control" placeholder="Enter Description"><br>
                                <button name="addevacuation" class="btn btn-warning" style="float: right;">Add Evacuation Center</button>
                            </div>
                        </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <?php include('footer.php') ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
