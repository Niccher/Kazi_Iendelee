    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">My Sales</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

    	<?php 
            $persons = array(); $uniq = array(); $code = 0;
            foreach ($assigned as $orders) {
                $order_info = $this->mod_orders->get_orders_id($orders['Assign_Order']);
                array_push($persons, $orders['Assignee']);
            }

            $uniq = array_values(array_unique($persons));

            echo '
                <div class="table-responsive">
                    <table class="table table-centered table-striped table-bordered mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Writer</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                ';

            foreach ($uniq as $person) {
                foreach ($assigned as $orders) {
                    $order_info = $this->mod_orders->get_orders_id($orders['Assign_Order']);
                    $user_info = $this->mod_users->get_vars($orders['Assignee']);
                    $user_as = urlencode($this->mod_crypt->Enc_String($orders['Assignee']));
                    if ($person == $orders['Assignee']) {
                        if(!empty($order_info['Order_Status'])){
                            $code = $code + $this->mod_crypt->Dec_String($order_info['Order_Cost']);
                            echo '
                                <tr>
                                    <th>'.$order_info['Order_Id'].'</th>
                                    <th>'.ucfirst($this->mod_crypt->Dec_String($user_info->Name)).'</th>
                                    <th>'.$this->mod_crypt->Dec_String($order_info['Order_Name']).'</th>
                                    <th>'.number_format($this->mod_crypt->Dec_String($order_info['Order_Cost']), 2).'</th>
                                    <th><a href="'.base_url("admin/invoices/process/".$user_as).'"><span class="mdi mdi-comment-eye"></span></a>
                                    </th>
                                </tr>
                                ';
                        }
                    }
                }
                
            }
            echo '
                <tr>
                    <th></th>
                    <th></th>
                    <th><span class="text-info">Totals (Payable to Writers)</span></th>
                    <th class="text-info">'.number_format($code, 2).'</th>
                    <th></th>
                </tr>
                ';

            echo '
                        </tbody>
                    </table>
                </div>';
            
        ?>
        
    </div> <!-- container -->