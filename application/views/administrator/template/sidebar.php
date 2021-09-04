
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
                        <a href="<?php echo base_url('admin/home'); ?>" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Home </span>
                        </a>
                    </li>

                    <?php 
                        if ($pag =='orders') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('admin/orders'); ?>" class="side-nav-link">
                            <i class="dripicons-folder-open"></i>
                            <span> Orders </span>
                        </a>
                    </li>

                    <?php 
                        if ($pag =='users') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('admin/users'); ?>" class="side-nav-link">
                            <i class="dripicons-user-group"></i>
                            <span> Users </span>
                        </a>
                    </li>

                    <?php 
                        if ($pag =='sales') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('admin/sales'); ?>" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Sales </span>
                        </a>
                    </li>

                    <?php 
                        if ($pag =='mails') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('admin/mails'); ?>" class="side-nav-link">
                            <i class="uil-envelope"></i>
                            <span> Mails </span>
                        </a>
                    </li>

                    <?php 
                        if ($pag =='blogs') {echo '<li class="side-nav-item menuitem-active">';} 
                        else {echo '<li class="side-nav-item">';} 

                    ?>
                        <a href="<?php echo base_url('admin/blogs'); ?>" class="side-nav-link">
                            <i class="uil-rss"></i>
                            <span> Blogs </span>
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

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="<?php echo base_url('assets/images/users/avatar-1.jpg');?>" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Admin</span>
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