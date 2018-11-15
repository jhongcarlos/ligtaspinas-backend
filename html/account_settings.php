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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                        <h4 class="page-title">Account Settings</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Ligtas Pinas</a></li>
                            <li class="active">Account Settings</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <table class="table table-hover">
                                <tbody>
                                    <?php 
                                        // $email = $_SESSION['lp_email'];
                                        $sql = mysqli_query($db, "SELECT * FROM tblbackend_users WHERE email = ''");
                                        while ($res = mysqli_fetch_array($sql)) {
                                            ?>
                                            <tr>
                                                <td width="33%">Full Name</td>
                                                <td width="33%"><?= $res['name'] ?></td>
                                                <td width="33%"><a class="btn btn-warning text-white" data-toggle="modal" data-target="#edit_name">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td width="33%">Email</td>
                                                <td width="33%"><?= $res['email'] ?></td>
                                                <td width="33%"><a class="btn btn-warning text-white" data-toggle="modal" data-target="#edit_email">Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td width="33%">Contact Number</td>
                                                <td width="33%"><?= $res['contact_number'] ?></td>
                                                <td width="33%"><a class="btn btn-warning text-white" data-toggle="modal" data-target="#edit_number">Edit</a></td>
                                            </tr>
                                            <?php
                                        }
                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Name Edit -->
            <div class="modal fade" id="edit_name" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Name</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- <div class="container"> -->
                    <form action="" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Enter your UPDATED Name</label>
                        <input type="text" name="edit_name" class="form-control"><br>
                      <button class="btn btn-danger text-white" name="btnupdate_name" style="float: right;">Update</button>
                      </div>
                    </form>
                  <!-- </div> -->
                </div>
              </div>
              </div>
            </div>
    <!-- End of name edit -->

    <!-- Email Edit -->
            <div class="modal fade" id="edit_email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Email</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- <div class="container"> -->
                    <form action="" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Enter your UPDATED Email</label>
                        <input type="text" name="edit_email" class="form-control"><br>
                      <button class="btn btn-danger text-white" name="btnupdate_email" style="float: right;">Update</button>
                      </div>
                    </form>
                  <!-- </div> -->
                </div>
              </div>
              </div>
            </div>
    <!-- End of email edit -->

    <!-- Contact Number Edit -->
            <div class="modal fade" id="edit_number" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Number</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- <div class="container"> -->
                    <form action="" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Enter your UPDATED Number</label>
                        <input type="text" name="edit_number" class="form-control"><br>
                      <button class="btn btn-danger text-white" name="btnupdate_number" style="float: right;">Update</button>
                      </div>
                    </form>
                  <!-- </div> -->
                </div>
              </div>
              </div>
            </div>
    <!-- End of email edit -->
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
