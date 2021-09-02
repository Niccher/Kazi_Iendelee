
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
                                        <button type="button" class="btn btn-success mb-2 me-1">All</button>
                                    </a>
                                    <a href="<?php echo base_url('admin/orders/create');?>">
                                        <button type="button" class="btn btn-info mb-2 me-1">Create</button>
                                    </a>
                                    <a href="<?php echo base_url('orders/pending');?>">
                                        <button type="button" class="btn btn-light mb-2">Pending</button>
                                    </a> 
                                    <a href="<?php echo base_url('orders/completed');?>">
                                        <button type="button" class="btn btn-light mb-2">Completed</button>
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
            if ($order['Order_Paid'] == '00' ) {
                $active = '<span class="badge badge-danger-lighten">In-active</span>';
                $paid = '<span class="badge badge-warning-lighten">un-Paid</span>';
            }else{
                $active = '<span class="badge badge-success-lighten">Active</span>';
                $paid = '<span class="badge badge-info-lighten">Paid</span>';
            }
            if ($order['Order_Owner'] == 'Admin' ) {
                $delete = '
                <a href="javascript:void(0)" class="action-icon delete" name="'.$this->mod_crypt->Dec_String($order['Order_Name']).'" id="'.$order_id.'">
                    <i class="text-danger mdi mdi-delete" ></i>
                </a>';
            }else{
                $delete = '';
            }
            echo '
                <tr>
                    <td><a href="'.base_url('orders/view/'.$order_id).'" class="text-body text-danger fw-bold">'.$order['Order_Id'].'</a> 
                    </td>
                    <td>
                        '.date('M d Y',$order['Order_Created']).'<small class="text-muted">'.date('H:i:s A',$order['Order_Created']).'</small>
                    </td>
                    <td>
                        '.$this->mod_crypt->Dec_String($order['Order_Name']).'
                    </td>
                    <td>
                        '.$this->mod_crypt->Dec_String($order['Order_Cost']).'
                    </td>
                    <td>
                        '.$paid.'
                    </td>
                    <td>
                        '.$active.'
                    </td>
                    <td>
                        <a href="'.base_url('orders/view/'.$order_id).'" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                        '.$delete.'
                    </td>
                </tr>
            ';
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


<div class="modal fade" id="delete_info" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Delete Order</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="pers_name" id="pers_name"></div>
                    </div>
                </diV>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-danger pop_order"><i class="text-danger mdi mdi-delete" ></i>Delete Order</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
