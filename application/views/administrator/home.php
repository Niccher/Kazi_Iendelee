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
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <?php
        $buyer = 0; $seller = 0; $total = 0;
        foreach ($users_list as $user) {
            if ($user['Privilege'] == $this->mod_crypt->Enc_String('cat_Reseller')) {
                $seller++;
            }
            if ($user['Privilege'] == $this->mod_crypt->Enc_String('cat_Buyer')) {
                $buyer++;
            }
        }

        foreach ($orders_list as $order) {
            $total = $total + $this->mod_crypt->Dec_String($order['Order_Cost']);
        }
    ?>

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-check widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Registered Buyers">Registered Buyers</h5>
                            <h3 class="mt-3 mb-3"><?php echo $buyer; ?></h3>
                            <p class="mb-0 text-muted">
                                <span class="text-nowrap">Only users registered as Buyers</span>  
                            </p>
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col-->
                <div class="col-lg-3">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-cowboy-hat widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Registered Sellers">Registered Sellers</h5>
                            <p class="mb-0 text-muted"><h3 class="mt-3 mb-3"><?php echo $seller; ?></h3>
                                <span class="text-nowrap">Only users registered as Sellers</span>  
                            </p>
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col-->
                <div class="col-lg-3">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-cart-arrow-down widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Orders made">Orders made</h5>
                            <h3 class="mt-3 mb-3"><?php echo count($orders_list); ?></h3>
                            <p class="mb-0 text-muted">
                                <span class="text-nowrap">All orders (Pending and Completed)</span>  
                            </p>
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col-->
                <div class="col-lg-3">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-cart-plus widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Sales made">Sales made</h5>
                            <h3 class="mt-3 mb-3"><?php echo $total; ?></h3>
                            <p class="mb-0 text-muted">
                                <span class="text-nowrap">All orders estimated cost.</span>  
                            </p>
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col-->
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div id="external-events" class="m-t-20">
                                <br>
                                <div class="external-event bg-success-lighten text-success"
                                    data-class="bg-success">
                                    <i
                                        class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>New Order Created
                                </div>
                                <div class="external-event bg-info-lighten text-info"
                                    data-class="bg-info">
                                    <i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>Order Paid
                                </div>
                                <div class="external-event bg-warning-lighten text-warning"
                                    data-class="bg-warning">
                                    <i
                                        class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>Payment DOne
                                </div>
                                <div class="external-event bg-danger-lighten text-danger"
                                    data-class="bg-danger">
                                    <i
                                        class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>Order Cancelled
                                </div>
                            </div>


                            <div class="mt-5 d-none d-xl-block">
                                <h5 class="text-center">How It Works ?</h5>

                                <ul class="ps-3">
                                    <li class="text-muted mb-3">
                                        It has survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- end col-->

                        <div class="col-lg-9">
                            <div class="mt-4 mt-lg-0">
                                <div id="calendar"></div>
                            </div>
                        </div> <!-- end col -->

                    </div> <!-- end row -->
                </div> <!-- end card body-->
            </div> <!-- end card -->

        </div>
        <!-- end col-12 -->

        <div class="col-12">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Latest new Orders</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $cat = '';
                                            foreach ($orders_last_5 as $order) {
                                                if ($order['Order_Status'] == "Active") {
                                                    $cat = '<span class="badge badge-success-lighten">Active</span>';
                                                }
                                                if ($order['Order_Status'] == "Inactive") {
                                                    $cat = '<span class="badge badge-warning-lighten">Inactive</span>';
                                                }

                                                echo '
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">'.ucfirst(character_limiter($this->mod_crypt->Dec_String($order["Order_Name"]), 30)).'</h5>
                                                            <span class="text-muted font-13">'.$cat.'</span>
                                                        </td>
                                                        <td>'.date('M d',$order["Order_Created"]).'</td>
                                                    </tr>
                                                ';
                                            }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive-->
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col-->
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Newest Users</h4>
                            <?php
                                $cat = '';
                                foreach ($users_last_5 as $user) {
                                    if ($user['Privilege'] == $this->mod_crypt->Enc_String('cat_Reseller')) {
                                        $cat = '<span class="badge badge-info-lighten">Seller</span>';
                                    }
                                    if ($user['Privilege'] == $this->mod_crypt->Enc_String('cat_Buyer')) {
                                        $cat = '<span class="badge badge-success-lighten">Seller</span>';
                                    }

                                    echo '
                                    <div class="d-flex align-items-start">
                                        <img class="me-3 rounded-circle" src="'.base_url("uploads/profiles/".($user['Avatar'])).'" alt="'.$this->mod_crypt->Dec_String($user["Name"]).'" width="40">
                                        <div class="w-100 overflow-hidden">
                                            <h5 class="mt-0 mb-1">'.ucfirst($this->mod_crypt->Dec_String($user["Name"])).'</h5>
                                            <span class="font-13">'.ucfirst($this->mod_crypt->Dec_String($user["Email"])).'</span>
                                            '.$cat.'
                                        </div>
                                    </div>
                                    ';
                                }
                        ?>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col --> 
                <!-- end col -->   
            </div>
        </div>
    </div> <!-- end row -->

</div> <!-- container -->