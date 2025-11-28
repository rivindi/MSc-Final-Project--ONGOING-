<?php
$shopnamez = $_SESSION["nameinfull"];
$selleremail = $_SESSION["emailz"];
?>
<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="DesignerHome.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="CustomImages/Logo.png" alt="index.php" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="CustomImages/Logo.png" alt="index.php" height="17">
                        </span>
                    </a>

                    <a href="DesignerHome.php" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="CustomImages/Logo.png" alt="index.php" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="CustomImages/Logo.png" alt="index.php" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->

            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>







                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>
                <?php
                include './Phpfiles/DB.php';





                $sqlzy34 = "SELECT COUNT(id) as x FROM messages_employer_to_designer where designeremail='$selleremail' and statuz='notread'";
                $query4 = $conn->query($sqlzy34);
                $ordercount_loading = 0;
                foreach ($query4 as $value4) {
                    $ordercount_loading = $value4['x'];
                }
                ?>

                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-bell fs-22'></i>


                        <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><?php echo $ordercount_loading; ?><span class="visually-hidden">unread message</span></span>


                    </button>


                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">



                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                    <div class="col-auto dropdown-tabs">

                                        <span class="badge badge-soft-light fs-13"> <?php echo $ordercount_loading; ?> New</span>


                                    </div>
                                </div>
                            </div>

                            <div class="px-2 pt-2">
                                <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                            All (<?php echo $ordercount_loading; ?>)
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>

                        <div class="tab-content position-relative" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <a href="DesignerInbox.php" class="stretched-link">
                                                    <?php
                                                    if ($ordercount_loading == "0") {
                                                        ?>
                                                        <h6 class="mt-0 mb-2 lh-base">You  
                                                            <span class="text-secondary">haven't</span> any unread Messages
                                                        </h6>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <h6 class="mt-0 mb-2 lh-base">You have 
                                                            <span class="text-secondary">Unread</span> Messages
                                                        </h6>
                                                        <?php
                                                    }
                                                    ?>
                                                </a>

                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>


                            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"></div>


                        </div>



                    </div>

                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="CustomImages/programmer.png" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $shopnamez; ?> !</span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Designer</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome <?php echo $shopnamez; ?> !</h6>
                        <a class="dropdown-item" onclick="Logzoutzbuyer()"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- removeNotificationModal -->



<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="DesignerHome.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="CustomImages/Logo.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="CustomImages/Logo.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="DesignerHome.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="CustomImages/Logo.png" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="CustomImages/Logo.png" alt="" height="60">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="DesignerHome.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>

                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">Gigs</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="AddnewGig.php" class="nav-link" data-key="t-calendar"> Create new gig </a>
                            </li>
                            <li class="nav-item">
                                <a href="DesignerActiveGigs.php" class="nav-link" data-key="t-chat"> Active gigs </a>
                            </li>
                            <li class="nav-item">
                                <a href="RemovedgigsDesigner.php" class="nav-link" data-key="t-chat"> Removed Gigs </a>
                            </li>
                            <li class="nav-item">
                                <a href="DesignerGIgHistory.php" class="nav-link" data-key="t-chat"> Gig History </a>
                            </li>



                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-pencil-ruler-2-line"></i>  <span data-key="t-apps">Messages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="DesignerInbox.php" class="nav-link" data-key="t-calendar"> Unread Messages </a>
                            </li>
                            <li class="nav-item">
                                <a href="ReadMessagesDesigner.php" class="nav-link" data-key="t-chat"> Read Messages</a>
                            </li>
                            <li class="nav-item">
                                <a href="SentMessagesbyDesigner.php" class="nav-link" data-key="t-chat"> Sent Messages</a>
                            </li>




                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps222444" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-pencil-ruler-2-line"></i>  <span data-key="t-apps">Projects</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps222444">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="DesignerPendingProject.php" class="nav-link" data-key="t-calendar"> Pending Projects</a>
                            </li>
                            <li class="nav-item">
                                <a href="OngoingProjects.php" class="nav-link" data-key="t-chat"> Ongoing Projects</a>
                            </li>
                            <li class="nav-item">
                                <a href="WaitingPayments.php" class="nav-link" data-key="t-chat">Waiting payments</a>
                            </li>
                            <li class="nav-item">
                                <a href="ReceivedpaymentsDesigner.php" class="nav-link" data-key="t-chat">Received payments</a>
                            </li>




                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps222" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-pencil-ruler-2-line"></i>  <span data-key="t-apps">Profile</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps222">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="UpdateDesignerProfile.php" class="nav-link" data-key="t-calendar">Update profile</a>
                            </li>





                        </ul>
                    </div>
                </li>










            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
                            function Logzoutzbuyer() {
                                var k = "g";
                                $.post("phpfiles/userlogout.php",
                                        {
                                            pw: k

                                        },
                                function(data, status) {

                                    if (data == "ok") {


                                        swal("Logout sucess...!", {
                                            icon: "success",
                                        });
                                        window.location = "Login.php";


                                    }

                                });
                            }
</script>