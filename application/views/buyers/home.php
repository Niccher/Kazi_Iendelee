
<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Overview</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

<?php
    $completed = 0; $cost = 0;
    foreach ($user_orders as $orders) {
        if ($orders['Order_Status'] == 'Completed') {
            $completed++;
        }
        
        $price = $this->mod_crypt->Dec_String($orders['Order_Cost']);
        $cost = $cost + $price;
    }
?>

    <div class="row">
        <div class="col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">My Orders</h5>
                            <h3 class="my-2 py-1"><?php echo count($user_orders);?></h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2">All Orders made.</span>
                            </p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Completed Orders</h5>
                            <h3 class="my-2 py-1"><?php echo $completed;?></h3>
                            <p class="mb-0 text-muted">
                                <span class="text-info me-2">Order marked 'Complete'.</span>
                            </p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted fw-normal mt-0 text-truncate" title="Paid">Paid</h5>
                            <h3 class="my-2 py-1"><?php echo $cost;?></h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2">Total spent </span>
                            </p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Messages</h5>
                            <h3 class="my-2 py-1">$253k</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                            </p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <?php 
    $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
    $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
    ?>

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
                $stopped =  $this->mod_crypt->Dec_String($order['Order_Deadline']);
                $cite =  $this->mod_crypt->Dec_String($order['Order_Cite']);
                $page = $this->mod_crypt->Dec_String($order['Order_Pages']);
                $word = $this->mod_crypt->Dec_String($order['Order_Words']);
                $paid = ($order['Order_Paid']);
                $status = $order['Order_Status'];
                $attachment = str_replace("|||","", $order['Order_Attachment']);
                if ($attachment != '') {
                    $attached = '<h5><span class="badge badge-info-lighten">Present</span></h5>';
                }else{
                    $attached = '<h5><span class="badge badge-danger-lighten">Absent</span></h5>';
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

                $delte_id = urlencode($this->mod_crypt->Enc_String($order['Order_Id']));


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
                                <a href="'.base_url('buyer/'.$user_url.'/orders/delete/'.$delte_id).'" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
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