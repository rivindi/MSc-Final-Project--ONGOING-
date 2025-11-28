<?php
session_start();
?><!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


    <head>

        <meta charset="utf-8" />
        <title>Employer Completed projects | Design Master </title>
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

        <link rel="stylesheet" href="../../../../cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <!--datatable responsive css-->
        <link rel="stylesheet" href="../../../../cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

        <link rel="stylesheet" href="../../../../cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


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
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Sweet Alert css-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Completed projects</h4>

                                    </div><!-- end card header -->

                                </div>
                            </div>
                            <!--end col-->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Completed projects assigned by you</h5>
                                    </div>
                                    <div class="card-body">
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
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $emaillog = $_SESSION["emailz"];
                                                ?>
                                                <?php
                                                include './phpfiles/DB.php';


                                                $sqlzy34 = "SELECT * FROM newprojectz where empemailz='$emaillog' and statusz='Completed'";
                                                $query4 = $conn->query($sqlzy34);

                                                foreach ($query4 as $value4) {
                                                    ?>

                                                    <tr>
                                                <input type="hidden" id="lod1<?php echo $value4['id']; ?>" value="<?php echo $value4['designeremaizl']; ?>"/>
                                                <input type="hidden" id="lod2<?php echo $value4['id']; ?>" value="<?php echo $value4['desigername']; ?>"/>
                                                <input type="hidden" id="lod3<?php echo $value4['id']; ?>" value="<?php echo $value4['proid']; ?>"/>
                                                <input type="hidden" id="lod4<?php echo $value4['id']; ?>" value="<?php echo $value4['projecttitlez']; ?>"/>
                                                <td><?php echo $value4['proid']; ?></td>
                                                <td><?php echo $value4['projecttitlez']; ?></td>
                                                <td><?php echo $value4['desigername']; ?></td>
                                                <td><?php echo $value4['datez']; ?></td>
                                                <td><?php echo $value4['timez']; ?></td>
                                                <td><?php echo $value4['deadlienrz']; ?></td>
                                                <td>LKR <?php echo $value4['cost']; ?></td>
                                                <td><button class="btn btn-success" onclick="LoadModelzz(<?php echo $value4['id']; ?>)">Make Payment</button></td>


                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
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
        <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Make project payment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <div class="tablelist-form">
                        <div class="modal-body">
                            <input type="hidden" id="id-field" />

                            <div class="mb-3" id="modal-id">
                                <label for="id-field1" class="form-label">Project ID</label>
                                <input type="text" id="c33" class="form-control" placeholder="ID" readonly disabled="" />
                                <input type="hidden" id="loadzid" class="form-control" placeholder="ID" readonly disabled="" />
                            </div>

                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Designer Name</label>
                                <input type="text" id="c11" class="form-control" placeholder="Enter name" disabled=""  />
                                <div class="invalid-feedback">Please enter a customer name.</div>
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Designer Email</label>
                                <input type="email" id="c22" class="form-control" placeholder="Enter email" disabled=""  />
                                <div class="invalid-feedback">Please enter an email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email-field" class="form-label">Project Title</label>
                                <input type="text" id="c44" class="form-control" placeholder="Enter project title" disabled=""/>
                                <div class="invalid-feedback">Please enter an title.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email-field" class="form-label">Project Cost</label>
                                <input type="text" id="c66" class="form-control" placeholder="Please enter cost LKR" />
                                <div class="invalid-feedback">Please enter cost LKR.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email-field" class="form-label">Card Number</label>
                                <input type="text" id="c77" class="form-control" placeholder="Please Enter your Credit/Debit Card Number" />
                                <div class="invalid-feedback">Please enter cost LKR.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email-field" class="form-label">CNN</label>
                                <input type="text" id="c88" class="form-control" placeholder="Please enter your Credit/Debit Card CNN Number" />
                                <div class="invalid-feedback">Please enter cost LKR.</div>
                            </div>





                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success" onclick="makepayzz()">Pay</button>
                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- list.js min js -->
        <script src="assets/libs/list.js/list.min.js"></script>
        <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

        <!--ecommerce-customer init js -->
        <script src="assets/js/pages/ecommerce-customer-list.init.js"></script>

        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <!-- Theme Settings -->

        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!--ckeditor js-->
        <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

        <!-- mailbox init -->
        <script src="assets/js/pages/mailbox.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
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

        <script src="assets/js/pages/datatables.init.js"></script>
        <script src="assets/js/pages/datatables.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="../../../../code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!--datatable js-->
        <script src="../../../../cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="../../../../cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="../../../../cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="../../../../cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="../../../../cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="../../../../cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>

            function LoadModelzz(dd) {

                var designeremail = $('#lod1' + dd).val();
                var designername = $('#lod2' + dd).val();
                var proidz = $('#lod3' + dd).val();
                var protitlez = $('#lod4' + dd).val();


                document.getElementById("c11").value = designername;
                document.getElementById("c22").value = designeremail;
                document.getElementById("c33").value = proidz;
                document.getElementById("c44").value = protitlez;
                document.getElementById("loadzid").value = dd;

                $('#showModal').modal('show');
            }


            function makepayzz() {

                var designeremail = $('#c11').val();
                var designername = $('#c22').val();
                var proidz = $('#c33').val();
                var protitlez = $('#c44').val();
                var proidzrow = $('#loadzid').val();

                var paymentz = $('#c66').val();
                var crdno = $('#c77').val();
                var ads = $('#c88').val();

                if (paymentz == "") {

                    swal("Error!", "Enter valid project cost..!", "error");

                } else if (crdno == "" || ads == "") {
                    swal("Error!", "Enter Card Details..!", "error");

                } else {
                    swal({
                        title: "Are you sure?",
                        text: "You want to make pay for this project?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                            .then(function(willDelete) {
                                if (willDelete) {

                                    $.post("Phpfiles/makeprojectpayment.php",
                                            {
                                                designeremail: designeremail,
                                                designername: designername,
                                                proidz: proidz,
                                                protitlez: protitlez,
                                                proidzrow: proidzrow,
                                                paymentz: paymentz

                                            },
                                    function(data, status) {
                                        if (data == "ok") {


                                            swal("Done!Payment Sucess..!", {
                                                icon: "success",
                                            });

                                            window.location = "CompletedProjectsEmployer.php";


                                        } else {

                                            swal("Error!", "" + data, "error");

                                        }

                                    });




                                } else {

                                }
                            });

                }

            }


        </script>
    </body>





</html>