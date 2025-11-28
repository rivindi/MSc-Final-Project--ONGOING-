<?php
session_start();
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Employer </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
            include './EmployerHeader.php';
            ?>

            <!-- /.modal -->
            <!-- ========== App Menu ========== -->

            <!-- Left Sidebar End -->
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
                                                    <h4 class="fs-16 mb-1">Hello there!</h4>
                                                    <p class="text-muted mb-0">Here's what's happening with your profile today.</p>
                                                </div>
                                                <div class="mt-3 mt-lg-0">
                                                    <form action="javascript:void(0);">
                                                        <div class="row g-3 mb-0 align-items-center">


                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </form>
                                                </div>
                                            </div><!-- end card header -->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->



                                    <!-- end row-->


                                    <div class="row">


                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">Accepted projects of you</h4>

                                                </div><!-- end card header -->

                                                <div class="card-body">
                                                    <div class="table-responsive table-card">
                                                        <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Project Id</th>
                                                                    <th>Title</th>
                                                                    <th>Assigned To</th>
                                                                    <th>Date</th>
                                                                    <th>Time</th>
                                                                    <th>Deadline</th>
                                                                    <th>Payment</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $emaillog = $_SESSION["emailz"];
                                                                ?>
                                                                <?php
                                                                include './phpfiles/DB.php';


                                                                $sqlzy34 = "SELECT * FROM newprojectz where empemailz='$emaillog' and statusz='Accepted'";
                                                                $query4 = $conn->query($sqlzy34);

                                                                foreach ($query4 as $value4) {
                                                                    ?>

                                                                    <tr>

                                                                        <td><?php echo $value4['proid']; ?></td>
                                                                        <td><?php echo $value4['projecttitlez']; ?></td>
                                                                        <td><?php echo $value4['desigername']; ?></td>
                                                                        <td><?php echo $value4['datez']; ?></td>
                                                                        <td><?php echo $value4['timez']; ?></td>
                                                                        <td><?php echo $value4['deadlienrz']; ?></td>
                                                                        <td>LKR <?php echo $value4['cost']; ?></td>

                                                                    </tr>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table><!-- end table -->
                                                    </div>
                                                </div>
                                            </div> <!-- .card-->
                                        </div> <!-- .col-->
                                    </div> <!-- end row-->

                                </div> <!-- end .h-100-->

                            </div> <!-- end col -->


                            <!-- end col -->
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


</html>