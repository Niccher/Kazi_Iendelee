    
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <?php 
            $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
            $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 

            $all = count($assigned);
            $last_five = array();
            $all_cost = 0; $all_paid = 0; $all_completed = 0;

            foreach ($assigned as $orders) {
                $order_info = $this->mod_orders->get_orders_id($orders['Assign_Order']);
                if (!empty($order_info)) {
                    $all_cost.= $this->mod_crypt->Dec_String($order_info['Order_Cost']);
                    if ($order_info['Order_Status'] == "Completed") {
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

        <div class="row">
            <div class="col-xl-12 col-lg-12">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of all assigned Clients">Assigned Orders</h5>
                                <h3 class="mt-3 mb-3"><i class="uil-tag"></i> &nbsp;<?php echo $all;?></h3>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-lg-3">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Completed Orders">Completed Orders</h5>
                                <h3 class="mt-3 mb-3"><i class="uil-pricetag-alt"></i> &nbsp;<?php echo $all_completed;?></h3>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-lg-3">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-currency-usd widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Revenue</h5>
                                <h3 class="mt-3 mb-3"><i class="uil-dollar-alt"></i> &nbsp;KES <?php echo number_format($all_cost, 2);?></h3>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-lg-3">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-pulse widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Paid Order">Paid Orders</h5>
                                <h3 class="mt-3 mb-3"><i class="uil-dollar-alt"></i> &nbsp;KES <?php echo number_format($all_paid, 2);?></h3>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Revenue</h4>

                        <div class="chart-content-bg">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <p class="text-muted mb-0 mt-3">Last 30 Days</p>
                                    <h2 class="fw-normal mb-3">
                                        <small class="mdi mdi-checkbox-blank-circle text-primary align-middle me-1"></small>
                                        <span>KES <?php echo number_format($all_cost, 2);?></span>
                                    </h2>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-muted mb-0 mt-3">Previous Month</p>
                                    <h2 class="fw-normal mb-3">
                                        <small class="mdi mdi-checkbox-blank-circle text-success align-middle me-1"></small>
                                        <span>KES <?php echo number_format($all_cost, 2);?></span>
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="dash-item-overlay d-none d-md-block" dir="ltr">
                            <h5>Today's Earning: $2,562.30</h5>
                        </div>
                        <div dir="ltr">
                            <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-xl-12 col-lg-12 order-lg-1">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-2">Activity Timeline</h4>
                        <div data-simplebar style="max-height: 419px;"> 
                            <div class="timeline-alt pb-0">
                                <?php
                                    foreach ($last_five as $this_order) {
                                        //print_r($this_order);
                                        $order_info = $this->mod_orders->get_orders_id($this_order['Assign_Order']);
                                        $url = urlencode($this->mod_crypt->Enc_String($order_info['Order_Id']));
                                        $name = character_limiter(strip_tags($this->mod_crypt->Dec_String($order_info['Order_Name'])), 150);
                                        $desc = character_limiter(strip_tags($this->mod_crypt->Dec_String($order_info['Order_Body'])), 200);
                                        $assigned_at = date('M d H:i:s A', $this_order['Assign_Time']);
                                        echo '
                                <div class="timeline-item">
                                    <i class="uil-calendar-alt bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <a href="'.base_url("writer/".$user_url."/orders/view/".$url).'" class="text-info fw-bold mb-1 d-block">#'.$this_order['Assign_Order'].'</a>
                                        <small>'.$name.'</small>
                                        <p class="mb-0 pb-2">
                                            <small class="text-info">'.$desc.'</small>
                                        </p>
                                        <p class="mb-0 pb-2">
                                            <small class="text-muted">'.$assigned_at.'</small>
                                        </p>
                                    </div>
                                </div>
                                        ';
                                    }
                                ?>
                            </div>
                            <!-- end timeline -->
                        </div> <!-- end slimscroll -->
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card-->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- container -->