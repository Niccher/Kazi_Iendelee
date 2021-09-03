
<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <div class="row mb-2">
                        <div class="col-xl-12">
                            <div class="text-xl-end mt-xl-0 mt-2">
                                <div class="text-sm-end">
                                    <a href="<?php echo base_url('admin/orders');?>">
                                        <button type="button" class="btn btn-light mb-2 me-1">All</button>
                                    </a>
                                    <a href="<?php echo base_url('admin/orders/create');?>">
                                        <button type="button" class="btn btn-info mb-2 me-1">Create</button>
                                    </a>
                                    <a href="<?php echo base_url('orders/pending');?>">
                                        <button type="button" class="btn btn-light mb-2">Pending</button>
                                    </a> 
                                    <a href="<?php echo base_url('orders/completed');?>">
                                        <button type="button" class="btn btn-success mb-2">Completed</button>
                                    </a> 
                                </div>
                            </div>
                        </div><!-- end col-->
                    </div>
                </div>
                <h4 class="page-title">Orders</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Order Name</th>
                                    <th>Estimated</th>
                                    <th>Paid</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php
        foreach ($orders_list as $order) {
            $order_id = urlencode($this->mod_crypt->Enc_String($order['Order_Id']));
            if ($order['Order_Paid'] == '' || $order['Order_Paid'] == '00' ) {
                $active = '<span class="badge badge-danger-lighten">In-active</span>';
                $paid = '<h5><span class="badge badge-warning-lighten">un-Paid</span></h5>';
            }else{
                $active = '<span class="badge badge-success-lighten">Active</span>';
                $paid = '<h5><span class="badge badge-info-lighten">Paid</span></h5>';
            }
            if ($order['Order_Status'] == 'Finished' || $order['Order_Status'] == '11') {
                echo '
                    <tr>
                    <td><a href="'.base_url('orders/view/'.$order_id).'" class="text-body fw-bold">'.$order['Order_Id'].'</a> </td>
                    <td>
                        '.date('M d Y',$order['Order_Created']).'<small class="text-muted">'.date('H:i:s A',$order['Order_Created']).'</small>
                    </td>
                    <td>
                        '.$this->mod_crypt->Dec_String($order['Order_Name']).'
                    </td>
                    <td>
                        $176.41
                    </td>
                    <td>
                        '.$paid.'
                    </td>
                    <td>
                        '.$active.'
                    </td>
                    <td>
                        <a href="'.base_url('orders/view/'.$order_id).'" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>';
            }
        }
    ?>
                                
                            </tbody>
                        </table>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row --> 
    
</div> <!-- container -->