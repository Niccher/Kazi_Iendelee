
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
                                    <h4 class="page-title">Orders</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">

                        <?php 
                        $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
                        $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
                        ?>


                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-xl-6"></div>
                                            <div class="col-xl-6">
                                                <div class="text-xl-end mt-xl-0 mt-2">
                                                	<div class="text-sm-end">
				                                        <a href="<?php echo base_url('buyer/'.$user_url.'/orders');?>">
				                                            <button type="button" class="btn btn-light mb-2 me-1">All</button>
				                                        </a>
                                                         <a href="<?php echo base_url('buyer/'.$user_url.'/orders/add');?>">
                                                            <button type="button" class="btn btn-info mb-2 me-1">Create New</button>
                                                        </a>
				                                        <a href="<?php echo base_url('buyer/'.$user_url.'/orders/pending');?>">
				                                            <button type="button" class="btn btn-success mb-2">Pending</button>
				                                        </a> 
				                                        <a href="<?php echo base_url('buyer/'.$user_url.'/orders/completed');?>">
				                                            <button type="button" class="btn btn-light mb-2">Completed</button>
				                                        </a> 
				                                    </div>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Order ID</th>
                                                        <th>Date</th>
                                                        <th>Payment Status</th>
                                                        <th>Total</th>
                                                        <th>Payment Method</th>
                                                        <th>Order Status</th>
                                                        <th style="width: 125px;">Action</th>
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
                                                        <td><a href="<?php echo base_url('buyer/'.$user_url.'/orders/view');?>" class="text-body fw-bold">#BM9708</a> </td>
                                                        <td>
                                                            August 05 2018 <small class="text-muted">10:29 PM</small>
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            $176.41
                                                        </td>
                                                        <td>
                                                            Mastercard
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                                        <td><a href="<?php echo base_url('buyer/'.$user_url.'/orders/view');?>" class="text-body fw-bold">#BM9707</a> </td>
                                                        <td>August 04 2018 <small class="text-muted">08:18 AM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten"><i class="mdi mdi-timer-sand"></i> Awaiting Authorization</span></h5>
                                                        </td>
                                                        <td>
                                                            $1,458.65
                                                        </td>
                                                        <td>
                                                            Visa
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                                        <td><a href="<?php echo base_url('buyer/'.$user_url.'/orders/view');?>" class="text-body fw-bold">#BM9706</a> </td>
                                                        <td>August 04 2018 <small class="text-muted">10:29 PM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            $801.99
                                                        </td>
                                                        <td>
                                                            Credit Card
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                                        <td><a href="<?php echo base_url('buyer/'.$user_url.'/orders/view');?>" class="text-body fw-bold">#BM9705</a> </td>
                                                        <td>August 03 2018 <small class="text-muted">07:56 AM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            $215.35
                                                        </td>
                                                        <td>
                                                            Mastercard
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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

                </div> <!-- content -->pending.php