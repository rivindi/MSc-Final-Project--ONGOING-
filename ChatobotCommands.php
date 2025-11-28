<?php
session_start();?><!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


    <head>

        <meta charset="utf-8" />
        <title>All Command</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
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
            include './AdminHeader.php';
            ?>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Commands</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" id="customerList">
                                    <div class="card-header border-bottom-dashed">

                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm">
                                                <div>
                                                    <h5 class="card-title mb-0">Commands List</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div class="d-flex flex-wrap align-items-start gap-2">
<!--                                                    <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                    <button type="button" class="btn btn-info"><i class="ri-file-download-line align-bottom me-1"></i> Import</button>
                                                    -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-bottom-dashed border-bottom">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-xl-6">
                                                    <div class="search-box">
                                                        <input type="text" class="form-control search" placeholder="Search for customer, email, phone, status or something...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xl-6">
                                                    <div class="row g-3">
                                                        
                                                        <!--end col-->

                                                        <div class="col-sm-4">
                                                            <div>
                                                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="table-responsive table-card mb-1">
                                                <table class="table align-middle" id="customerTable">
                                                    <thead class="table-light text-muted">
                                                        <tr>

                                                            
                                                            <th class="sort" data-sort="customer_name">Command</th>
                                                            <th class="sort" data-sort="email">Reply</th>  
                                                            <th class="sort" data-sort="action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list form-check-all">
                                                        <?php
                                                        include './phpfiles/DB.php';


                                                        $sqlzy34 = "SELECT * FROM chatbot";
                                                        $query4 = $conn->query($sqlzy34);

                                                        foreach ($query4 as $value4) {
                                                            ?>
                                                            <tr>

                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"><?php echo $value4['id']; ?></a></td>
                                                                
                                                        
                                                        <td class="customer_name" id="selernnz<?php echo $value4['id']; ?>"><?php echo $value4['queries']; ?></td>
                                                        <td class="email"><?php echo $value4['replies']; ?></td>
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="ASsign Project">
                                                                    <button type="button" class="btn btn-danger add-btn" onclick="LoadModelz(<?php echo $value4['id']; ?>)">Remove</button>

                                                                </li>

                                                            </ul>
                                                        </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <div class="noresult" style="display: none">
                                                    <div class="text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                                        <p class="text-muted mb-0">We've searched more than 150+ customer We did not find any customer for you search.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="pagination-wrap hstack gap-2">
                                                    <a class="page-item pagination-prev disabled" href="#">
                                                        Previous
                                                    </a>
                                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                                    <a class="page-item pagination-next" href="#">
                                                        Next
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-light p-3">
                                                        <h5 class="modal-title" id="exampleModalLabel">Assign new project</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                    </div>
                                                    <div class="tablelist-form">
                                                        <div class="modal-body">
                                                            <input type="hidden" id="id-field" />

                                                            <div class="mb-3" id="modal-id">
                                                                <label for="id-field1" class="form-label">Project ID</label>
                                                                <input type="text" id="c33" class="form-control" placeholder="ID" readonly disabled="" />
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
                                                                <input type="text" id="c44" class="form-control" placeholder="Enter project title" />
                                                                <div class="invalid-feedback">Please enter an title.</div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email-field" class="form-label">Project Cost</label>
                                                                <input type="text" id="c66" class="form-control" placeholder="Please enter cost LKR" />
                                                                <div class="invalid-feedback">Please enter cost LKR.</div>
                                                            </div>



                                                            <div class="mb-3">
                                                                <label for="date-field" class="form-label">Deadline</label>
                                                                <input type="date" id="c555" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" required placeholder="Select date" />
                                                                <div class="invalid-feedback">Please select a date.</div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-danger" onclick="AssignProjectz()">Assign project</button>
                                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <!--                                        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div class="mt-2 text-center">
                                                                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                                                        <h4>Are you sure ?</h4>
                                                                                                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this record ?</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                                                                    <button type="button" class="btn w-sm btn-danger" id="delete-record">Yes, Delete It!</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>-->
                                        <!--end modal -->
                                    </div>
                                </div>

                            </div>
                            <!--end col-->
                        </div>
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

        <!-- list.js min js -->
        <script src="assets/libs/list.js/list.min.js"></script>
        <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

        <!--ecommerce-customer init js -->
        <script src="assets/js/pages/ecommerce-customer-list.init.js"></script>

        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
            function LoadModelz(dd) {
                swal({
                        title: "Are you sure?",
                        text: "You want to Remove this Command?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                            .then(function(willDelete) {
                                if (willDelete) {


                                    $.post("phpfiles/removerecom.php",
                                            {
                                                dd: dd
                                            },
                                            function(data, status) {
                                                if (data == "ok") {


                                                    swal("Done!Command Removed..!", {
                                                        icon: "success",
                                                    });

                                                    window.location = "ChatobotCommands.php";


                                                } else {

                                                    swal("Error!", "" + data, "error");

                                                }

                                            });


                                } else {

                                }
                            });
                
            }
            

    </script>


</html>