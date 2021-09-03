
    <!-- Start Content-->
    <div class="container-fluid">

        <?php 
            $all = count($assigned);
            $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
            $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 


            $all_cost = 0; $all_paid = 0; $all_completed = 0;

            foreach ($assigned as $orders) {
                $order_info = $this->mod_orders->get_orders_id($orders['Assign_Order']);
                if (!empty($order_info)) {
                    $all_cost.= $this->mod_crypt->Dec_String($order_info['Order_Cost']);
                    if ($order_info['Order_Status'] == "Finished") {
                        $all_paid.= $this->mod_crypt->Dec_String($order_info['Order_Cost']);
                        $all_completed++;
                    }
                }
            }

            if ($all < 5) {
                $last_five = $assigned;
            }else{
                $last_five = array_slice($assigned,-5,5);
            }
        ?>
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <div class="text-sm-end">
                            <a href="<?php echo base_url('writer/'.$user_url.'/orders');?>">
                                <button type="button" class="btn btn-success mb-2 me-1">All</button>
                            </a>
                            <a href="<?php echo base_url('writer/'.$user_url.'/orders/pending');?>">
                                <button type="button" class="btn btn-light mb-2">Pending</button>
                            </a> 
                            <a href="<?php echo base_url('writer/'.$user_url.'/orders/completed');?>">
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
            <div class="col-12">
                <div class="card widget-inline">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-sm-4 col-xl-4">
                                <div class="card shadow-none m-0">
                                    <div class="card-body text-center">
                                        <i class="dripicons-briefcase text-muted" style="font-size: 24px;"></i>
                                        <h3><span><?php echo $all;?></span></h3>
                                        <p class="text-muted font-15 mb-0">Assigned Orders</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xl-4">
                                <div class="card shadow-none m-0 border-start">
                                    <div class="card-body text-center">
                                        <i class="dripicons-checklist text-muted" style="font-size: 24px;"></i>
                                        <h3><span><?php echo $all_completed;?></span></h3>
                                        <p class="text-muted font-15 mb-0">Completed Orders</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xl-4">
                                <div class="card shadow-none m-0 border-start">
                                    <div class="card-body text-center">
                                        <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                        <h3><span>31</span></h3>
                                        <p class="text-muted font-15 mb-0">Messages</p>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3"> My Orders</h4>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover mb-0">
                                <tbody>
            <?php
                foreach ($assigned as $order) {
                    $order_info = $this->mod_orders->get_orders_id($order['Assign_Order']);
                    if (!empty($order_info)) {
                        $url = urlencode($this->mod_crypt->Enc_String($order_info['Order_Id']));
                        $name = ($this->mod_crypt->Dec_String($order_info['Order_Name']));
                        $due = $order_info['Order_Deadline'];

                        $words = $this->mod_crypt->Dec_String($order_info['Order_Words']);
                        $cite = str_replace("task_cite_", "", $this->mod_crypt->Dec_String($order_info['Order_Cite']));
                        $pages = ($this->mod_crypt->Dec_String($order_info['Order_Pages']));
                        $level = ucfirst(str_replace("task_level_", "", $this->mod_crypt->Dec_String($order_info['Order_Level'])));

                        if ($order['Assign_Reply'] == "11") {
                            $steps = '<span class="badge bg-success rounded-pill">Accepted</span>';
                        }elseif ($order['Assign_Reply'] == "22") {
                            $steps = '<span class="badge bg-danger rounded-pill">Rejected</span>';
                        }else{
                            $steps = '<span class="badge bg-primary rounded-pill">Pending</span>';
                        }

                        echo '
                    <tr>
                        <td>
                            <h5 class="font-14 my-1">
                                <a href="'.base_url("writer/".$user_url."/orders/view/".$url).'" class="text-body">'.$name.'
                                </a>
                            </h5>
                            <span class="text-muted font-13">Due '.$due.'</span>
                        </td>
                        <td>
                            <span class="text-muted font-13">'.$cite.'</span> <br/>
                            <h5 class="font-14 mt-1 fw-normal">'.$level.'</h5>
                        </td>
                        <td>
                            <span class="text-muted font-13">Pages '.$pages.'</span> <br/>
                            <h5 class="font-14 mt-1 fw-normal">Words '.$words.'</h5>
                        </td>
                        <td>
                            <span class="text-muted font-13">Accepted </span> <br/>
                            <h5 class="font-14 mt-1 fw-normal">'.$steps.'</h5>
                        </td>
                        
                    </tr>
                        ';
                    }
                }
            ?>
                                    
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->

</div> <!-- content -->