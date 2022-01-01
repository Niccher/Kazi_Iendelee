
<!-- Start Content-->
<div class="container-fluid">

    <?php 
    $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
    $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
    ?>

    <div class="row">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <div class="text-sm-end">
                            <a href="<?php echo base_url('buyer/'.$user_url.'/orders');?>">
                                <button type="button" class="btn btn-success mb-2 me-1">All</button>
                            </a>
                            <a href="<?php echo base_url('buyer/'.$user_url.'/orders/add');?>">
                                <button type="button" class="btn btn-info mb-2 me-1">Create New</button>
                            </a>
                            <a href="<?php echo base_url('buyer/'.$user_url.'/orders/pending');?>">
                                <button type="button" class="btn btn-light mb-2">Pending</button>
                            </a> 
                            <a href="<?php echo base_url('buyer/'.$user_url.'/orders/completed');?>">
                                <button type="button" class="btn btn-light mb-2">Completed</button>
                            </a> 
                        </div>
                    </div>
                    <h4 class="page-title">My Orders</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">
            <div class="table-responsive">
                <table class="table table-centered mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Attachment</th>
                            <th>Size</th>
                            <th>Status</th>
                            <th>Paid</th>
                            <th style="width: 125px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($user_orders as $order){
                                $o_id = urlencode($this->mod_crypt->Enc_String($order['Order_Id']));
                                $started = date('d-M-Y', $order['Order_Created']);
                                $stopped = $this->mod_crypt->Dec_String($order['Order_Deadline']);
                                $cite =  $this->mod_crypt->Dec_String($order['Order_Cite']);
                                $page = $this->mod_crypt->Dec_String($order['Order_Pages']);
                                $word = $this->mod_crypt->Dec_String($order['Order_Words']);
                                $paid = $order['Order_Paid'];
                                $status = $order['Order_Status'];
                                $attachment = str_replace("|||","", $order['Order_Attachment']);

                                $delte_id = urlencode($this->mod_crypt->Enc_String($order['Order_Id']));
                                
                                if ($attachment != '') {
                                    $attached = '<h5><span class="badge badge-info-lighten">Present</span></h5>';
                                }else{
                                    $attached = '<h5><span class="badge badge-warning-lighten">Absent</span></h5>';
                                }

                                if ($paid == '00') {
                                    $payment = '<h5><span class="badge badge-warning-lighten">Unpaid</span></h5>';
                                }else{
                                    $payment = '<h5><span class="badge badge-success-lighten">Paid</span></h5>';
                                }

                                if ($status == 'Inactive') {
                                    $state = '<h5><span class="badge badge-warning-lighten">Inactive</span></h5>';
                                }else{
                                    $state = '<h5><span class="badge badge-success-lighten">Active</span></h5>';
                                }

                                if ($status == 'Finished') {
                                    $editable = '';
                                }else{
                                    $editable = '<a href="'.base_url('buyer/'.$user_url.'/orders/edit/'.$delte_id).'" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>';
                                }


                                echo '
                                        <tr> 
                                            <td><a href="'.base_url('buyer/'.$user_url.'/orders/view/'.$o_id).'" class="text-body fw-bold">#'.$order['Order_Id'].'</a> 
                                            </td>
                                            <td>
                                                <small class="text-muted">Created '.$started.'</small><br>
                                                <small class="text-muted">Due '.$stopped.'</small>
                                            </td>
                                            <td>
                                                <small class="text-muted">'.$attached.'</small>
                                            </td>
                                            <td>
                                                <small class="text-muted">Pages '.$page.' </small><br>
                                                <small class="text-muted">Words '.$word.'</small>
                                            </td>
                                            <td>
                                                <small class="text-muted">'.$state.'</small>
                                            </td>
                                            <td>
                                                <small class="text-muted">'.$payment.'</small>
                                            </td>
                                            <td>
                                                <a href="'.base_url('buyer/'.$user_url.'/orders/view/'.$o_id).'" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                '.$editable.'
                                            </td>
                                        </tr>
                                    ';

                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- end row-->
    
    </div> <!-- container -->

</div> <!-- content -->