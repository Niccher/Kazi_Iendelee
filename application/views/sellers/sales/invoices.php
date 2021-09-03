
    <!-- Start Content-->
    <div class="container-fluid">

        <?php 
            $all = count($assigned);
            $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
            $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
        ?>
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <div class="text-xl-end mt-xl-0 mt-2">
                            <div class="text-sm-end">
                                <a href="<?php echo base_url('writer/'.$user_url.'/invoices/process');?>">
                                    <button type="button" class="btn btn-success mb-2 me-1">Process Invoice</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h4 class="page-title">Payable Orders</h4>
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
                                        <th>Name</th>
                                        <th>Size</th>
                                        <th>Level</th>
                                        <th>Order Status</th>
                                        <th style="width: 125px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
    <?php 
        foreach ($assigned as $order) {
            $order_info = $this->mod_orders->get_orders_id($order['Assign_Order']);
            if (!empty($order_info)) {
                $url = urlencode($this->mod_crypt->Enc_String($order_info['Order_Id']));
                $name = urlencode($this->mod_crypt->Dec_String($order_info['Order_Name']));
                $due = $order_info['Order_Deadline'];

                $words = $this->mod_crypt->Dec_String($order_info['Order_Words']);
                $cite = str_replace("task_cite_", "", $this->mod_crypt->Dec_String($order_info['Order_Cite']));
                $pages = urlencode($this->mod_crypt->Dec_String($order_info['Order_Pages']));
                $level = ucfirst(str_replace("task_level_", "", $this->mod_crypt->Dec_String($order_info['Order_Level'])));
                if ($order_info['Order_Status'] == 'Finished' ) {
                    echo '
                    <tr>
                        <td><a href="'.base_url("writer/".$user_url."/orders/view/".$url).'" class="text-body fw-bold">#'.$order_info['Order_Id'].'</a> </td>
                        <td>
                            '.$name.' <br><small class="text-muted">Assigned '.date("D M H:i", $order['Assign_Time']).'</small>
                        </td>
                        <td>
                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Pages '.$pages.'</span></h5>
                            <h5><span class="badge badge-info-lighten"><i class="mdi mdi-coin"></i> Words '.$words.'</span></h5>
                        </td>
                        <td>
                            '.$level.'<br>'.$cite.'
                        </td>
                        <td>
                            <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                        </td>
                        <td>
                            <a href="'.base_url("writer/".$user_url."/orders/view/".$url).'" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                        </td>
                    </tr>
                    ';
                }
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

</div> <!-- content -->