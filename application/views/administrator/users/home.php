
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Users</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Line Charts</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">

                            <div class="row mb-2">
                                <div class="col-sm-12 float-left">
                                    <div class="text-sm-end">
                                        <a href="<?php echo base_url('users/buyers');?>">
                                        	<button type="button" class="btn btn-light mb-2 me-1">Buyers</button>
                                        </a>
                                        <a href="<?php echo base_url('users/sellers');?>">
                                        	<button type="button" class="btn btn-light mb-2">Sellers</button>
                                        </a> 
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Buyers and Sellers Activities</h4>
                                        <div dir="ltr">
                                            <div id="line-chart-datalabel" class="apex-charts" data-colors="#6c757d,#727cf5"></div>
                                        </div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Buyers and Sellers interactions</h4>
                                        <div id="line-chart-syncing2" data-colors="#727cf5"></div>
                                        <div dir="ltr">
                                            <div id="line-chart-syncing" class="apex-charts" data-colors="#6c757d"></div>
                                        </div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->