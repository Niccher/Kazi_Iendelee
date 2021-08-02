
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">My Profile</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Profile -->
                                <div class="card bg-primary">
                                    <div class="card-body profile-user-box">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-lg">
                                                            <img src="<?php echo base_url('assets/images/users/avatar-2.jpg');?>" alt="" class="rounded-circle img-thumbnail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <h4 class="mt-1 mb-1 text-white">User here Name</h4>
                                                            <p class="font-13 text-white-50"> Authorised Seller</p>
    
                                                            <ul class="mb-0 list-inline text-light">
                                                                <li class="list-inline-item me-3">
                                                                    <h5 class="mb-1">$ 25,184</h5>
                                                                    <p class="mb-0 font-13 text-white-50">Total Revenue</p>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <h5 class="mb-1">5482</h5>
                                                                    <p class="mb-0 font-13 text-white-50">Number of Orders</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-sm-4">
                                                <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                                    <button type="button" class="btn btn-light">
                                                        <i class="mdi mdi-account-edit me-1"></i> Edit Profile
                                                    </button>
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body/ profile-user-box-->
                                </div><!--end profile/ card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-4">
                                <!-- Personal-Information -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Seller Information</h4>
                                        <p class="text-muted font-13">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                        <hr/>

                                        <div class="text-start">
                                            <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2">Full Name</span></p>

                                            <p class="text-muted"><strong>Mobile :</strong><span class="ms-2"> +254 5555 5555</span></p>

                                            <p class="text-muted"><strong>Email :</strong> <span class="ms-2">user1@gmail.com</span></p>

                                            <p class="text-muted"><strong>Location :</strong> <span class="ms-2">Kenya</span></p>

                                            <p class="text-muted"><strong>Languages :</strong>
                                                <span class="ms-2"> English, Swahili </span>
                                            </p>
                                            <p class="text-muted mb-0" id="tooltip-container"><strong>Elsewhere :</strong>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="pages-profile.html" title="Facebook"><i class="mdi mdi-facebook"></i></a>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="pages-profile.html" title="Twitter"><i class="mdi mdi-twitter"></i></a>
                                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="pages-profile.html" title="Skype"><i class="mdi mdi-skype"></i></a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- Personal-Information -->

                            </div> <!-- end col-->

                            <div class="col-xl-8">

                                <!-- Chart-->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Orders & Revenue</h4>
                                        <div dir="ltr">
                                            <div style="height: 260px;" class="chartjs-chart">
                                                <canvas id="high-performing-product"></canvas>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                                <!-- End Chart-->

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-basket float-end text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                                                <h2 class="m-b-20">1,587</h2>
                                                <span class="badge bg-primary"> +11% </span> <span class="text-muted">From previous period</span>
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-box float-end text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                                                <h2 class="m-b-20">$<span>46,782</span></h2>
                                                <span class="badge bg-danger"> -29% </span> <span class="text-muted">From previous period</span>
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-jewel float-end text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                                                <h2 class="m-b-20">1,890</h2>
                                                <span class="badge bg-primary"> +89% </span> <span class="text-muted">Last year</span>
                                            </div> <!-- end card-body-->
                                        </div> <!--end card-->
                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->

                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

