<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background-color: #041f30">
                <img src="../plugins/images/logo2.png" height="75" width="300" class="light-logo" style="padding: 3px">
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a href="https://www.unionbankph.com/" target="blank"><img src="../plugins/images/u_icon.png" height="80" width="80"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->

        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation" style="margin-top: 20px">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="evacuation_center.php" class="waves-effect"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>Evacuation center</a>
                    </li>
                    <li>
                        <a href="emergency_contact.php" class="waves-effect"><i class="fa fa-phone fa-fw" aria-hidden="true"></i>Emergency Contact</a>
                    </li>
                    <li>
                        <a href="incident_report.php" class="waves-effect"><i class="fa fa-file fa-fw" aria-hidden="true"></i>Incident Reports</a>
                    </li>
                    <li>
                        <a href="city_registration.php" class="waves-effect"><i class="fa fa-building fa-fw" aria-hidden="true"></i>City Registration</a>
                    </li>
                    <li>
                        <a href="reports.php" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i>Reports</a>
                    </li>
                    <li>
                        <a href="manage_users.php" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Manage Users</a>
                    </li>
                    <li>
                        <a href="announcement.php" class="waves-effect"><i class="fa fa-bullhorn fa-fw" aria-hidden="true"></i>Announcement</a>
                    </li>
                    <li>
                        <a href="advertisement.php" class="waves-effect"><i class="fa fa-money fa-fw" aria-hidden="true"></i>Manage Advertisement</a>
                    </li>
                    <li>
                        <a href="account_settings.php" class="waves-effect"><i class="fa fa-cogs fa-fw" aria-hidden="true"></i>Account Settings</a>
                    </li>
                    <li>
                        <a href="systemlog.php" class="waves-effect"><i class="fa fa-file-o fa-fw" aria-hidden="true"></i>System Log</a>
                    </li>
                    <li>
                        <form action="" method="post" style="padding: 10px;margin-bottom: 20px">
                            <button name="logout" class="btn btn-block btn-warning">Log out</button>
                        </form>
                        <?php 
                            if (isset($_POST['logout'])) {
                                header('Location: login.php');
                                session_destroy();
                            }
                         ?>
                    </li>
                </ul>
            </div>
            
        </div>