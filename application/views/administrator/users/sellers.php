                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Sellers</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Sellers</h4>
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
                                            <button type="button" class="btn btn-success mb-2">Sellers</button>
                                        </a> 
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Seller</th>
                                                        <th>Store Name</th>
                                                        <th>Orders</th>
                                                        <th>Wallet Balance</th>
                                                        <th>Create Date</th>
                                                        <th>Revenue</th>
                                                        <th style="width: 75px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="<?php echo base_url('assets/images/users/avatar-4.jpg');?>" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">User 1</a>
                                                        </td>
                                                        <td>
                                                            Homovee
                                                        </td>
                                                        <td>
                                                            <span class="fw-semibold">128</span>
                                                        </td>
                                                        <td>
                                                            $128,250
                                                        </td>
                                                        <td>
                                                            07/07/2018
                                                        </td>
                                                        <td>
                                                            <div class="spark-chart" data-dataset="[25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]"></div>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                                <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="<?php echo base_url('assets/images/users/avatar-4.jpg');?>" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Seller User 1</a>
                                                        </td>
                                                        <td>
                                                            Execucy
                                                        </td>
                                                        <td>
                                                            <span class="fw-semibold">09</span>
                                                        </td>
                                                        <td>
                                                            $78,410
                                                        </td>
                                                        <td>
                                                            09/12/2021
                                                        </td>
                                                        <td>
                                                            <div class="spark-chart" data-dataset="[25, 66, 41, 45, 63, 25, 66, 12, 45, 9, 54]"></div>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                                <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="<?php echo base_url('assets/images/users/avatar-4.jpg');?>" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Seller User 1</a>
                                                        </td>
                                                        <td>
                                                            Epiloo
                                                        </td>
                                                        <td>
                                                            <span class="fw-semibold">78</span>
                                                        </td>
                                                        <td>
                                                            $89,458
                                                        </td>
                                                        <td>
                                                            06/30/2021
                                                        </td>
                                                        <td>
                                                            <div class="spark-chart" data-dataset="[25, 66, 41, 34, 63, 25, 34, 12, 434, 9, 54]"></div>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck5">
                                                                <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="<?php echo base_url('assets/images/users/avatar-4.jpg');?>" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Seller User 1</a>
                                                        </td>
                                                        <td>
                                                            Uberer
                                                        </td>
                                                        <td>
                                                            <span class="fw-semibold">847</span>
                                                        </td>
                                                        <td>
                                                            $258,125
                                                        </td>
                                                        <td>
                                                            09/08/2021
                                                        </td>
                                                        <td>
                                                            <div class="spark-chart" data-dataset="[25, 66, 41, 34, 33, 25, 34, 50, 65, 9, 54]"></div>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck6">
                                                                <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="<?php echo base_url('assets/images/users/avatar-4.jpg');?>" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Seller User 1</a>
                                                        </td>
                                                        <td>
                                                            Symic
                                                        </td>
                                                        <td>
                                                            <span class="fw-semibold">235</span>
                                                        </td>
                                                        <td>
                                                            $56,210
                                                        </td>
                                                        <td>
                                                            07/15/2021
                                                        </td>
                                                        <td>
                                                            <div class="spark-chart" data-dataset="[25, 66, 45, 34, 33, 34, 34, 50, 55, 9, 54]"></div>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->