
    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <!-- Logo-->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">New Password</h4>
                                    <p class="text-muted mb-4">Create a new password that will you will use with ypur account</p>
                                </div>

                                <form action="<?php echo base_url('auth/reset'); ?>">

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">New Password</label>
                                        <input class="form-control" type="text" id="fullname" placeholder="Enter your name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Confirm Password address</label>
                                        <input class="form-control" type="email" id="emailaddress" required placeholder="Enter your email">
                                    </div>


                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary" type="submit"> Submit </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->