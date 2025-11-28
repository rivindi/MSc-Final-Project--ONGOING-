<?php
session_start();
?><!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


    <head>

        <meta charset="utf-8" />
        <title>Profile | Designer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- swiper css -->
        <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php
            include './DesignerHeader.php';
            ?>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <?php
            $emaillog = $_SESSION["emailz"];
            ?>
            <?php
            include './phpfiles/DB.php';


            $sqlzy34 = "SELECT * FROM user_details where email='$emaillog'";
            $query4 = $conn->query($sqlzy34);

            foreach ($query4 as $value4) {
                ?>
                <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">
                            <div class="profile-foreground position-relative mx-n4 mt-n4">
                                <div class="profile-wid-bg">
                                    <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                                </div>
                            </div>
                            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                                <div class="row g-4">
                                    <div class="col-auto">
                                        <div class="avatar-lg">
                                            <img src="CustomImages/programmer.png" alt="user-img" class="img-thumbnail rounded-circle" />
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col">
                                        <div class="p-2">
                                            <h3 class="text-white mb-1"><?php echo $value4['nameinfull']; ?></h3>
                                            <p class="text-white-75">Designer</p>
                                            <div class="hstack text-white-50 gap-1">
                                                <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i><?php echo $value4['addressz']; ?></div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <!--end col-->

                                </div>
                                <!--end row-->
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="d-flex profile-wrapper">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                                        <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
                                                    </a>
                                                </li>



                                            </ul>
                                            <div class="flex-shrink-0">
                                                <a href="EditprofiledeSigner.php" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                                            </div>
                                        </div>
                                        <!-- Tab panes -->
                                        <div class="tab-content pt-4 text-muted">
                                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xxl-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-5">Your Profile status</h5>
                                                                <div class="progress animated-progress custom-progress progress-label">
                                                                    <?php
                                                                    $emz = $emaillog;
                                                                    $ratpointz = 0;
                                                                    $sqlzy341 = "SELECT * FROM sellerratingz where selleremailz='$emz'";
                                                                    $query41 = $conn->query($sqlzy341);
                                                                    foreach ($query41 as $value41) {

                                                                        $ratpointz22 = $value41['ratingz'];
                                                                        $ratpointz = floatval($ratpointz22);
                                                                    }
                                                                    ?>
                                                                    <?php
                                                                    if ($ratpointz > 300) {
                                                                        ?>
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="label">100%</div>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                                                <div class="label">30%</div>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="card-title mb-3">Info</h5>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-borderless mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Full Name :</th>
                                                                                    <td class="text-muted"><?php echo $value4['nameinfull']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Mobile :</th>
                                                                                    <td class="text-muted"><?php echo $value4['contactnumber']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">E-mail :</th>
                                                                                    <td class="text-muted"><?php echo $value4['email']; ?></td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div><!-- end card body -->
                                                            </div><!-- end card -->



                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="card-title mb-4">Skills</h5>
                                                                    <div class="d-flex flex-wrap gap-2 fs-15">
                                                                        <?php
                                                                        $sqlz = "SELECT * FROM designerskills where designeremailz='$emaillog'";
                                                                        $result = $conn->query($sqlz);

                                                                        if ($result->num_rows > 0) {

                                                                            while ($row = $result->fetch_assoc()) {
                                                                                ?>
                                                                                <a href="javascript:void(0);" class="badge badge-soft-primary"><?php echo $row["skillname"]; ?></a>

                                                                                <?php
                                                                            }
                                                                        } else {
                                                                            ?>
                                                                            <a href="javascript:void(0);" class="badge badge-soft-primary"><span class="badge badge-soft-danger p-2" style="font-size: 13px;">Add skills to your profile</span></a>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div><!-- end card body -->
                                                            </div><!-- end card -->


                                                            <!--end card-->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-9">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="card-title mb-3">About</h5>

                                                                    <?php
                                                                    $deszz = $value4['skills'];
                                                                    if ($deszz == "") {
                                                                        ?>
                                                                        <p><span class="badge badge-soft-danger p-2" style="font-size: 13px;">Add profile Description to explain about your self.</span></p>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <p><?php echo $deszz; ?></p>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                                <!--end card-body-->
                                                            </div><!-- end card -->



                                                            <!-- end card -->

                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>

                                                <!--end tab-pane-->

                                                <!--end tab-pane-->

                                                <!--end tab-pane-->
                                            </div>
                                            <!--end tab-content-->
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                            </div><!-- container-fluid -->
                        </div><!-- End Page-content -->

                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <script>document.write(new Date().getFullYear())</script> © Design Master.
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end d-none d-sm-block">
                                            Design & Develop by Design Master
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>

                    <?php
                }
                ?>

                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->



            <!--start back-to-top-->
            <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
                <i class="ri-arrow-up-line"></i>
            </button>
            <!--end back-to-top-->

            <!--preloader-->
            <div id="preloader">
                <div id="status">
                    <div class="spinner-border text-primary avatar-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>

            <div class="customizer-setting d-none d-md-block">
                <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                    <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
                </div>
            </div>

            <!-- Theme Settings -->


            <!-- JAVASCRIPT -->
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>
            <script src="assets/libs/feather-icons/feather.min.js"></script>
            <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
            <script src="assets/js/plugins.js"></script>

            <!-- swiper js -->
            <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

            <!-- profile init js -->
            <script src="assets/js/pages/profile.init.js"></script>

            <!-- App js -->
            <script src="assets/js/app.js"></script>
    </body>


    <!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 18:34:39 GMT -->
</html>