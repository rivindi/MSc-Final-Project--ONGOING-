<?php
session_start();?><!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


    <head>

        <meta charset="utf-8" />
        <title>Profile Settings | Design Master</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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

                            <div class="position-relative mx-n4 mt-n4">
                                <div class="profile-wid-bg profile-setting-img">
                                    <img src="CustomImages/admin.png" class="profile-wid-img" alt="">
                                    <div class="overlay-content">
                                        <div class="text-end p-3">
                                            <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                                <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <!--end col-->
                                <div class="col-xxl-9">
                                    <div class="card mt-xxl-n5">
                                        <div class="card-header">
                                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                        <i class="fas fa-home"></i> Train system chat bot
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                        <div class="card-body p-4">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                                    <form action="javascript:void(0);">
                                                        <div class="row">

                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="firstnameInput" class="form-label">Command</label>
                                                                    <input type="text" class="form-control" id="ff1" placeholder="Enter bot command" >
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="lastnameInput" class="form-label">Reply</label>
                                                                    <input type="text" class="form-control" id="ff2" placeholder="Enter command reply">
                                                                </div>
                                                            </div>
                                                            <!--end col-->

                                                            <!--end col-->

                                                            <!--end col-->

                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="button" class="btn btn-primary" onclick="updateprofilez()">Add command</button>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </form>
                                                </div>
                                                <!--end tab-pane-->


                                                <!--end tab-pane-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                        </div>
                        <!-- container-fluid -->
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
                <!-- end main content-->
                <?php
            }
            ?>
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

        <!-- profile-setting init js -->
        <script src="assets/js/pages/profile-setting.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>

            function updateprofilez() {

                var namez = $('#ff1').val();
                var contzt = $('#ff2').val();

                if (namez == "" || contzt == "") {
                    swal("Error!", "please fill all feilds..!", "error");

                } else {

                    $.post("phpfiles/addnewchatbotcommadn.php",
                            {
                                namez: namez,
                                contzt: contzt
                            },
                    function(data, status) {
                        if (data == "ok") {


                            swal("Done!Command Added..!", {
                                icon: "success",
                            });

                            window.location = "Trainchatbot.php";


                        } else if (data == "Invalid") {

                            swal("Error!", "Command already exists", "error");
                        } else {

                            swal("Error!", "" + data, "error");

                        }

                    });


                }
            }
    </script>

</html>