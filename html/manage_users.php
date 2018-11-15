<?php 
ob_start();
include('server.php');
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
        <?php 
            include('nav.php');
         ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Users</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       
                        <ol class="breadcrumb">
                            <li><a href="#">Ligtas Pinas</a></li>
                            <li class="active">Manage Users</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <?= $result_register; ?>
                            <h3 class="box-title">Add Users</h3>
                            <!-- <div class="container"> -->
                                <form action="" method="post">
                                    <div class="form-group">
                                        <code>*Name</code>
                                        <input type="text" name="name" class="form-control" required placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <code>*Email</code>
                                        <input type="email" name="email" class="form-control" required placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <code>*Contact Number</code>
                                        <input type="number" name="contact_number" class="form-control" required placeholder="Enter Contact Number">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <code>*Region</code>
                                                <select name="region" class="form-control">
                                                    <?php 
                                                        $get_region = mysqli_query($db, "SELECT * FROM tblregion");
                                                        while ($res = mysqli_fetch_array($get_region)) {
                                                            echo "<option>".$res['regionname']."</option>";
                                                        }
                                                     ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <code>*City</code>
                                                <select name="city" class="form-control">
                                                <?php 
                                                        $get_city = mysqli_query($db, "SELECT * FROM tblcity");
                                                        while ($res = mysqli_fetch_array($get_city)) {
                                                            echo "<option>".$res['cityname']."</option>";
                                                        }
                                                     ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <code>*Position</code>
                                        <select name="position" class="form-control">
                                            <option>Technical Support</option>
                                            <option>Staff</option>
                                            <option>LGU</option>
                                            <option>Barangay Captain</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-dark btn-block" name="adduser">Add user</button>
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
