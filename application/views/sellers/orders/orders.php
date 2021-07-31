
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Orders</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">My Orders</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="card shadow-none m-0">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-briefcase text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>29</span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Orders</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-checklist text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>715</span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Completed</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>31</span></h3>
                                                        <p class="text-muted font-15 mb-0">Clients</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-xl-3">
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                        <i class="dripicons-graph-line text-muted" style="font-size: 24px;"></i>
                                                        <h3><span>93%</span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                                                        <p class="text-muted font-15 mb-0">Productivity</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="row mb-2">
                                <div class="col-xl-8"></div>
                                <div class="col-xl-4">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <div class="text-sm-end">
                                            <a href="<?php echo base_url('reseller/orders');?>">
                                                <button type="button" class="btn btn-success mb-2 me-1">All</button>
                                            </a>
                                            <a href="<?php echo base_url('reseller/orders/pending');?>">
                                                <button type="button" class="btn btn-light mb-2">Pending</button>
                                            </a> 
                                            <a href="<?php echo base_url('reseller/orders/completed');?>">
                                                <button type="button" class="btn btn-light mb-2">Completed</button>
                                            </a> 
                                        </div>
                                    </div>
                                </div><!-- end col-->
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="dashboard-projects.html#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-4">Orders Status</h4>

                                        <div class="my-4 chartjs-chart" style="height: 202px;">
                                            <canvas id="project-status-chart" data-colors="#0acf97,#727cf5,#fa5c7c"></canvas>
                                        </div>

                                        <div class="row text-center mt-2 py-2">
                                            <div class="col-4">
                                                <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                                                <h3 class="fw-normal">
                                                    <span>64%</span>
                                                </h3>
                                                <p class="text-muted mb-0">Completed</p>
                                            </div>
                                            <div class="col-4">
                                                <i class="mdi mdi-trending-down text-primary mt-3 h3"></i>
                                                <h3 class="fw-normal">
                                                    <span>26%</span>
                                                </h3>
                                                <p class="text-muted mb-0"> In-progress</p>
                                            </div>
                                            <div class="col-4">
                                                <i class="mdi mdi-trending-down text-danger mt-3 h3"></i>
                                                <h3 class="fw-normal">
                                                    <span>10%</span>
                                                </h3>
                                                <p class="text-muted mb-0"> Behind</p>
                                            </div>
                                        </div>
                                        <!-- end row-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="dashboard-projects.html#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Orders</h4>

                                        <p><b>107</b> Orders completed out of 195</p>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="<?php echo base_url('reseller/orders/view');?>" class="text-body">Coffee detail page - Main Page</a></h5>
                                                            <span class="text-muted font-13">Due in 3 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-warning-lighten">In-progress</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned By</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Client 01</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">3h 20min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="<?php echo base_url('reseller/orders/view');?>" class="text-body">Drinking bottle graphics</a></h5>
                                                            <span class="text-muted font-13">Due in 27 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-danger-lighten">Outdated</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned By</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Client 5</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="<?php echo base_url('reseller/orders/view');?>" class="text-body">App design and development</a></h5>
                                                            <span class="text-muted font-13">Due in 7 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-success-lighten">Completed</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned By</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Client 5</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">78h 05min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1"><a href="<?php echo base_url('reseller/orders/view');?>" class="text-body">Poster illustation design</a></h5>
                                                            <span class="text-muted font-13">Due in 5 days</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Status</span> <br/>
                                                            <span class="badge badge-warning-lighten">In-progress</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Assigned By</span>
                                                            <h5 class="font-14 mt-1 fw-normal">Client 2</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted font-13">Total time spend</span>
                                                            <h5 class="font-14 mt-1 fw-normal">26h 58min</h5>
                                                        </td>
                                                        <td class="table-action" style="width: 90px;">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Your Calendar</h4>

                                        <div class="row">
                                            <div class="col-md-7">
                                                <div data-provide="datepicker-inline" data-date-today-highlight="true" class="calendar-widget"></div>
                                            </div> <!-- end col-->
                                            <div class="col-md-5">
                                                <ul class="list-unstyled">
                                                    <li class="mb-4">
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 7:30 AM - 10:00 AM
                                                        </p>
                                                        <h5>Meeting with BD Team</h5>
                                                    </li>
                                                    <li class="mb-4">
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 10:30 AM - 11:45 AM
                                                        </p>
                                                        <h5>Design Review - Hyper Admin</h5>
                                                    </li>
                                                    <li class="mb-4">
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 12:15 PM - 02:00 PM
                                                        </p>
                                                        <h5>Setup Github Repository</h5>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-1 font-13">
                                                            <i class="mdi mdi-calendar"></i> 5:30 PM - 07:00 PM
                                                        </p>
                                                        <h5>Meeting with Design Studio</h5>
                                                    </li>
                                                </ul>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                        </div>
                        <!-- end row-->

                        
                    </div> <!-- container -->

                </div> <!-- content -->