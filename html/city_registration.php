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
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/logo.png">
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
        <?php 
            include('nav.php');
         ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title" style="margin-top: 10px">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">City Registration</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       
                        <ol class="breadcrumb">
                            <li><a href="#">Ligtas Pinas</a></li>
                            <li class="active">City Registration</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <?= $result_city; ?>
                            <h3 class="box-title">City Registration</h3>
                            <!-- <div class="container"> -->
                                <form action="" method="post">
                                    <div class="form-group">
                                        <code>*City Name</code>
                                        <input type="text" name="city" class="form-control" required placeholder="Enter City">
                                    </div>
                                    <div class="form-group">
                                        <code>*Region</code>
                                        <select class="form-control" name="region">
                                            <?php
                                                $sql = mysqli_query($db, "SELECT * FROM tblregion");
                                                while ($res = mysqli_fetch_array($sql)) {
                                                    echo "<option>".$res['regionname']."</option>";
                                                }
                                             ?>
                                        </select>
                                    </div>
                                    
                                    <button class="btn btn-warning btn-block" name="register_city">Register City</button>
                                </form>
                            <!-- </div> -->
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
<?php ob_flush(); ?>
