<?php
session_start();
?><!doctype html>
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
            include './EmployerHeader.php';
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
                                    <img src="CustomImages/businessman.png" class="profile-wid-img" alt="">
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
                                <div class="col-xxl-3">
                                    <div class="card mt-n5">
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                                    <img src="CustomImages/businessman.png" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                                    <div class="avatar-xs p-0 rounded-circle profile-photo-edit">

                                                    </div>
                                                </div>
                                                <h5 class="fs-16 mb-1"><?php echo $value4['nameinfull']; ?></h5>
                                                <p class="text-muted mb-0">Employer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-->

                                    
                                    <!--end card-->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-9">
                                    <div class="card mt-xxl-n5">
                                        <div class="card-header">
                                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                        <i class="fas fa-home"></i> Personal Details
                                                    </a>
                                                </li>
                                                

                                            </ul>
                                        </div>
                                        <div class="card-body p-4">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                                    <form action="javascript:void(0);">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="firstnameInput" class="form-label">Name in full</label>
                                                                    <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="<?php echo $value4['nameinfull']; ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="lastnameInput" class="form-label">Email</label>
                                                                    <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname" value=" <?php echo $value4['email']; ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                                    <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="<?php echo $value4['contactnumber']; ?>" disabled="">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="firstnameInput" class="form-label">New Name in full</label>
                                                                    <input type="text" class="form-control" id="ff1" placeholder="Enter your Name" >
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="lastnameInput" class="form-label">New Phone Number</label>
                                                                    <input type="text" class="form-control" id="ff2" placeholder="Enter your contact">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                           
                                                            <!--end col-->
                                                           
                                                            <!--end col-->
                                                          
                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="button" class="btn btn-primary" onclick="updateprofilez()">Update</button>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </form>
                                                </div>
                                                <!--end tab-pane-->
                                                <div class="tab-pane" id="changePassword" role="tabpanel">
                                                    <form action="javascript:void(0);">
                                                        <div class="row g-2">
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                                    <input type="password" class="form-control" id="oldpasswordInput" placeholder="Enter current password">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <label for="newpasswordInput" class="form-label">New Password*</label>
                                                                    <input type="password" class="form-control" id="newpasswordInput" placeholder="Enter new password">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                                                    <input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirm password">
                                                                </div>
                                                            </div>
                                                            <!--end col-->

                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div class="text-end">
                                                                    <button type="submit" class="btn btn-success">Change Password</button>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </form>


                                                </div>

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

                    $.post("phpfiles/Updatedesignerprofile2.php",
                            {
                                namez: namez,
                                contzt: contzt
                            },
                    function(data, status) {
                        if (data == "ok") {


                            swal("Done!Profile Updated..!", {
                                icon: "success",
                            });

                            window.location = "EditprofiledeSigner2.php";


                        } else {

                            swal("Error!", "" + data, "error");

                        }

                    });


                }
            }
    </script>

</html>