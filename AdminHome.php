<?php
session_start();?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


    <head>

        <meta charset="utf-8" />
        <title>Dashboard |Design Master</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <!-- jsvectormap css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

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
            include './AdminHeader.php';
            ?>

            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col">

                                <div class="h-100">
                                    <div class="row mb-3 pb-1">
                                        <div class="col-12">
                                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                                <div class="flex-grow-1">
                                                    <h4 class="fs-16 mb-1">Hello Naveen!</h4>
                                                    <p class="text-muted mb-0">Here's what's happening today.</p>
                                                </div>
                                                <div class="mt-3 mt-lg-0">

                                                </div>
                                            </div><!-- end card header -->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->

                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Designers</p>
                                                        </div>

                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                        <div>
                                                            <?php
                                                            include './Phpfiles/DB.php';





                                                            $llz = "SELECT COUNT(id_user) as x FROM user_details where usertype='Designer'";
                                                            $llz2 = $conn->query($llz);
                                                            $ordercount_loadingzzasd = 0;
                                                            foreach ($llz2 as $value4z) {
                                                                $ordercount_loadingzzasd = $value4z['x'];
                                                            }
                                                            ?>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><?php echo $ordercount_loadingzzasd;?></h4>

                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-success rounded fs-3">
                                                                <i class="bx bx-dollar-circle text-success"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                        <div class="col-xl-3 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Employers</p>
                                                        </div>

                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                          <?php
                                                            include './Phpfiles/DB.php';





                                                            $llz1 = "SELECT COUNT(id_user) as x FROM user_details where usertype='Employer'";
                                                            $llz21 = $conn->query($llz1);
                                                            $ordercount_loadingzzasd144 = 0;
                                                            foreach ($llz21 as $value4z1) {
                                                                $ordercount_loadingzzasd144 = $value4z1['x'];
                                                            }
                                                            ?>
                                                        <div>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo $ordercount_loadingzzasd144;?>">0</span></h4>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-info rounded fs-3">
                                                                <i class="bx bx-shopping-bag text-info"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                        <div class="col-xl-3 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Reviews</p>
                                                        </div>

                                                    </div>
                                                          <?php
                                                            include './Phpfiles/DB.php';





                                                            $llz1zasd = "SELECT COUNT(idreview) as x FROM itemhasreview";
                                                            $llz21z = $conn->query($llz1zasd);
                                                            $ordercount_loadingzzasd1z = 0;
                                                            foreach ($llz21z as $value4z1z) {
                                                                $ordercount_loadingzzasd1z = $value4z1z['x'];
                                                            }
                                                            ?>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                        <div>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo $ordercount_loadingzzasd1z;  ?>">0</span></h4>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-warning rounded fs-3">
                                                                <i class="bx bx-user-circle text-warning"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                        <div class="col-xl-3 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Gigs</p>
                                                        </div>

                                                    </div>
                                                          <?php
                                                            include './Phpfiles/DB.php';





                                                            $tyty= "SELECT COUNT(id) as x FROM designerpostitem";
                                                            $gg = $conn->query($tyty);
                                                            $ordercount_loadingzzasd1zyy = 0;
                                                            foreach ($gg as $hjhj) {
                                                                $ordercount_loadingzzasd1zyy = $hjhj['x'];
                                                            }
                                                            ?>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                        <div>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo $ordercount_loadingzzasd1zyy; ?>">0</span></h4>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-primary rounded fs-3">
                                                                <i class="bx bx-wallet text-primary"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div> <!-- end row-->


                                </div> <!-- end .h-100-->

                            </div> <!-- end col -->


                        </div>

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

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



        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>


    <!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 18:34:22 GMT -->
</html>