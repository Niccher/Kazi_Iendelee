    <!-- Start Content-->
    <div class="container-fluid">

    	<?php 
            $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
            $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 

            $all_paid = 0;

            foreach ($assigned as $orders) {
                $order_info = $this->mod_orders->get_orders_id($orders['Assign_Order']);
                if (!empty($order_info)) {
                    if ($order_info['Order_Status'] == "Finished") {
                        $all_paid = $all_paid + $this->mod_crypt->Dec_String($order_info['Order_Cost']);
                    }
                }
            }
        ?>
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <div class="text-sm-end">
                            <a href="<?php echo base_url('writer/'.$user_url.'/invoices');?>">
                                <button type="button" class="btn btn-success mb-2 me-1">Back</button>
                            </a>
                        </div>
                    </div>
                    <h4 class="page-title">Process Invoice</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Bussiness Info</h4>

                        <h5>Kazi Mingi</h5>
                        
                        <address class="mb-0 font-14 address-lg">
                            Kiambu County<br>
                            Thika Superhigway<br>
                            <abbr title="Phone">P:</abbr> +257 ****** <br/>
                            <abbr title="Mobile">M:</abbr> +254 7 ******

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Writer Information</h4>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <p class="mb-2"><span class="fw-bold me-2">Payment Type:</span> Mobile</p>
                                <p class="mb-2"><span class="fw-bold me-2">Writer Name:</span>
                                	<?php echo $this->mod_crypt->Dec_String($user_info->Name); ?>
                                </p>
                                <p class="mb-2"><span class="fw-bold me-2">Writer Email:</span>
                                	<?php echo $this->mod_crypt->Dec_String($user_info->Email); ?>
                                </p>
                                <p class="mb-0"><span class="fw-bold me-2">Writer Phone:</span>
                                <?php echo ($user_info->Phone); ?></p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Payment Info</h4>

                        <div class="text-center">
                            <i class="mdi mdi-cash-usd-outline h2 text-success"></i>
                            <h5><b class="text-success" >Mpesa Tranfer</b></h5>
                            <p class="mb-1"><b>Invoice ID :</b> xxxx235</p>
                            <p class="mb-0"><b>Payment Amount :</b> <?php echo number_format($all_paid, 2); ?></p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>The Military Duffle Bag</td>
                                    <td>3</td>
                                    <td>$128</td>
                                    <td>$384</td>
                                </tr>
                                <tr>
                                    <td>Mountain Basket Ball</td>
                                    <td>1</td>
                                    <td>$199</td>
                                    <td>$199</td>
                                </tr>
                                <tr>
                                    <td>Wavex Canvas Messenger Bag</td>
                                    <td>5</td>
                                    <td>$180</td>
                                    <td>$900</td>
                                </tr>
                                <tr>
                                    <td>The Utility Shirt</td>
                                    <td>2</td>
                                    <td>$79</td>
                                    <td>$158</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        
    </div> <!-- container -->

