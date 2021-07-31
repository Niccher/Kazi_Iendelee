
<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">
    
            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo_sm.png" alt="" height="16">
                </span>
            </a>

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo_sm_dark.png" alt="" height="16">
                </span>
            </a>
    
            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Kazi Iendelee</li>

                    <?php 
                        if ($pag =='home') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('reseller/home'); ?>" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Home </span>
                        </a>
                    </li>

                    <?php 
                        if ($pag =='questions') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('reseller/orders'); ?>" class="side-nav-link">
                            <i class="dripicons-folder-open"></i>
                            <span> Orders </span>
                        </a>
                    </li>

                    <?php 
                        if ($pag =='analytics') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('reseller/sales'); ?>" class="side-nav-link">
                            <i class="mdi mdi-google-analytics"></i>
                            <span> Sales </span>
                        </a>
                    </li>

                    <?php 
                        if ($pag =='invoices') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('reseller/invoices'); ?>" class="side-nav-link">
                            <i class="mdi mdi-credit-card-clock"></i>
                            <span> Invoices </span>
                        </a>
                    </li>

                    <?php 
                        if ($pag =='mails') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('reseller/mails'); ?>" class="side-nav-link">
                            <i class="uil-envelope"></i>
                            <span> Mails </span>
                        </a>
                    </li>

                </ul>

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="apps-calendar.html#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="apps-calendar.html#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="javascript: void(0);" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div style="max-height: 230px;" data-simplebar>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Client 4 commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Reseller liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="apps-calendar.html#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="<?php echo base_url('assets/images/users/avatar-1.jpg');?>" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Reseller</span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="<?php echo base_url('auth/locked');?>" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="<?php echo base_url('auth/logout');?>" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                <!-- end Topbar -->