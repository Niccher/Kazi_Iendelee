
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

        <?php 
            $all = count($assigned);
            $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
            $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
        ?>

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-xl-8">
                                <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">

                                </form>                            
                            </div>
                            <div class="col-xl-4">
                                <div class="text-xl-end mt-xl-0 mt-2">
                                	<div class="text-sm-end">
                                        <a href="<?php echo base_url('writer/'.$user_url.'/orders');?>">
                                            <button type="button" class="btn btn-light mb-2 me-1">All</button>
                                        </a>
                                        <a href="<?php echo base_url('writer/'.$user_url.'/orders/pending');?>">
                                            <button type="button" class="btn btn-success mb-2">Pending</button>
                                        </a> 
                                        <a href="<?php echo base_url('writer/'.$user_url.'/orders/completed');?>">
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
        //print_r($assigned); 
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
                if ($order_info['Order_Level'] == 'Inactive' || $order_info['Order_Paid'] == '00' ) {
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