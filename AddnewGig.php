<?php
session_start();
?><!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


    <head>

        <meta charset="utf-8" />
        <title>Add new Gig | Design Master </title>
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
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- dropzone css -->
        <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css" type="text/css" />

        <!-- Filepond css -->
        <link rel="stylesheet" href="assets/libs/filepond/filepond.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">

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
                                                    <h4 class="fs-16 mb-1">Boost your profile with a new Gig</h4>
                                                    <p class="text-muted mb-0"></p>
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



                                </div> <!-- end .h-100-->

                            </div> <!-- end col -->


                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Gig information</h4>

                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">

                                                <form class="login-form" method="POST" action="phpfiles/addnewGigDesigner.php" enctype="multipart/form-data"  id="form">

                                                    <div class="col-xxl-3 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Gig Title</label>
                                                            <input type="text" class="form-control" id="p1" name="p1">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Price Range</label>
                                                            <input type="text" class="form-control" id="p2" name="p2">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Add some Tags</label>
                                                            <textarea class="form-control" id="p3" name="p3"></textarea>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="col-xxl-6 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Gig Cover</label>
                                                            <input type='file' onchange="readURL(this);" accept="image/*" name="thumbimage"  placeholder="Thumbnail Image"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-xxl-6 col-md-6">
                                                        <div>

                                                            <img style="display: none;border: 2px solid black;" id="blah"  alt="Thumbnail Image" /> 
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="col-xxl-12 col-md-12">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Description</label>
                                                            <textarea class="form-control" id="p4" name="p4" style="height: 200px;"></textarea>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="col-xxl-12 col-md-12">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Design Category</label>
                                                            <select class="form-control" id="p5" name="p5">
                                                                <?php
                                                                include 'phpfiles/DB.php';





                                                                $sqlzy34 = "SELECT * FROM designcato";
                                                                $query4 = $conn->query($sqlzy34);

                                                                foreach ($query4 as $value4) {
                                                                    ?>

                                                                    <option class="level-0" value="<?php echo $value4['catoname']; ?>"><?php echo $value4['catoname']; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>

                                                    <center>
                                                        <input type="submit" class="btn btn-info btn-lg" value="Add Gig"/>

                                                    </center>

                                                    <!--end col-->
                                                </form>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->



                        <!--end row-->


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
                                    Design & Developed by Design Master
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
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- dropzone min -->
        <script src="assets/libs/dropzone/dropzone-min.js"></script>
        <!-- filepond js -->
        <script src="assets/libs/filepond/filepond.min.js"></script>
        <script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
        <script src="assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
        <script src="assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
        <script src="assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>

        <script src="assets/js/pages/form-file-upload.init.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#blah')
                                .attr('src', e.target.result)
                                .width(500)
                                .height(300);
                    };
                    reader.readAsDataURL(input.files[0]);
                    document.getElementById("blah").style.display = "block";
                }
            }
        </script>
        <script>
            $("#form").on('submit', (function(e) {


                e.preventDefault();
                $.ajax({
                    url: "phpfiles/addnewGigDesigner.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function()
                    {
                        //$("#preview").fadeOut();
                        //  $("#err").fadeOut();
                    },
                    success: function(data)
                    {
                        
                        if (data == 'empty') {

                            swal("Error", "Please Fill All feilds to continue...!", "error");
                        } else if (data == 'imageone') {

                            swal("Error", "Please Select Valid Image...!", "error");
                        }

                        else
                        {
                            swal("Gig Created...!", {
                                icon: "success",
                            });
                            window.location = "AddnewGig.php";
                        }
                    },
                    error: function(e)
                    {
                        $("#err").html(e).fadeIn();
                    }
                });
            }));
            $("#form").bind('ajax:complete', function() {

                swal("Gig Created....!", {
                    icon: "success",
                });
            });
        </script>
    </body>





</html>