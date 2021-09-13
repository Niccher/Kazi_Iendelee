    
<div class="container-fluid">

    <?php 
        $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
        $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
        $order_id = $this->mod_crypt->Dec_String($this->uri->segment(5)); 
        $id = urlencode($this->mod_crypt->Enc_String($order_id));
        $order_info = $this->mod_orders->get_orders_id($order_id);
        $order_name = $this->mod_crypt->Dec_String($order_info['Order_Name']);
        $order_cost = $this->mod_crypt->Dec_String($order_info['Order_Cost']);
        $order_date = ($order_info['Order_Deadline']);
        //print_r($order_info);
    ?>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <div class="text-xl-end mt-xl-0 mt-2">
                        <div class="text-sm-end">
                            <a href="<?php echo base_url('buyer/'.$user_url.'/orders/view/'.$id);?>">
                                <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-keyboard-backspace me-1"></i>Back</button>
                            </a>
                        </div>
                    </div>
                </div>
                <h4 class="page-title">Checkout</h4>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>    
                        
    <script type="text/javascript">
        Stripe.setPublishableKey('pk_test_51JAW36LbL1tUcWWUqOumhoq39YMVXytWgq4iXQVCCGuZXXvTCzs32ZH3SdFFboDsBLZs0BhoqJvF80DegHAj63oM00LnDKtNxp');
        
        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                $('#payBtn').removeAttr("disabled");
                //display the errors on the form
                // $('#payment-errors').attr('hidden', 'false');
                $('#payment-errors').addClass('alert alert-danger');
                $("#payment-errors").html(response.error.message);
            } else {
                var form$ = $("#paymentFrm");
                //get token id
                var token = response['id'];
                //insert the token into the form
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                //submit form to the server
                form$.get(0).submit();
            }
        }
        $(document).ready(function() {
            //on form submit
            $("#paymentFrm").submit(function(event) {
                //disable the submit button to prevent repeated clicks
                $('#payBtn').attr("disabled", "disabled");
                
                //create single-use token to charge the user
                Stripe.createToken({
                    number: $('#card_num').val(),
                    cvc: $('#card-cvc').val(),
                    exp_month: $('#card-expiry-month').val(),
                    exp_year: $('#card-expiry-year').val()
                }, stripeResponseHandler);
                
                //submit from callback
                return false;
            });
        });
    </script>
    
    <?php 
        $stripeDetails = array(
            "secretKey" => "sk_test_51JAW36LbL1tUcWWUdDb7iU1Y1BmimlhcMGEfvvvW5rBkhWfTXELXLAqU8u5uU7B2STPBhyCXpZz1OAlgpLMFrbBz00yjr5sREd",
            "publishableKey" => "pk_test_51JAW36LbL1tUcWWUqOumhoq39YMVXytWgq4iXQVCCGuZXXvTCzs32ZH3SdFFboDsBLZs0BhoqJvF80DegHAj63oM00LnDKtNxp"
        );  
        
    ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-8">
                            <h4 class="mt-2">Payment Selection</h4>

                            <p class="text-muted mb-4">Fill the form below in order to
                                send you the order's invoice.</p>

                            <!-- Pay with Paypal box-->
                            <div class="border p-3 mb-3 rounded">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input type="radio" id="BillingOptRadio2" name="billingOptions" class="form-check-input">
                                            <label class="form-check-label font-16 fw-bold" for="BillingOptRadio2">Pay with Paypal</label>
                                        </div>
                                        <p class="mb-0 ps-3 pt-1">You will be redirected to PayPal website to complete your purchase securely.</p>
                                        <p>
                                            <button class="btn btn-primary btn-block" type="button">Proceed</button>
                                        </p>
                                    </div>
                                    <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                        <img src="<?php echo base_url('assets/images/payments/paypal.png') ?>" height="25" alt="paypal-img">
                                    </div>
                                </div>
                            </div>
                            <!-- end Pay with Paypal box-->

                            <!-- Credit/Debit Card box-->
                            <div class="border p-3 mb-3 rounded">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input type="radio" id="BillingOptRadio1" name="billingOptions" class="form-check-input" checked>
                                            <label class="form-check-label font-16 fw-bold" for="BillingOptRadio1">Credit / Debit Card</label>
                                        </div>
                                        <p class="mb-0 ps-3 pt-1">Safe money transfer using your bank account. We support Mastercard, Visa, Discover and Stripe.</p>
                                        <p>
                                        <?php
                                            echo '
                                                <div class="col-4 text-center">
                                                    <form action="'.base_url("pay/stripe/".urlencode($this->mod_crypt->Enc_String($order_id)).'" method="POST">
                                                        <script
                                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                            data-key="'.$stripeDetails['publishableKey'].'"
                                                            data-amount="'.$order_cost.'"
                                                            data-name="'.$order_name).'"
                                                            data-description="Pay Before '.$this->mod_crypt->Dec_String($order_date).'"
                                                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                                            data-locale="auto">
                                                        </script>
                                                    </form>
                                                </div>';
                                        ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                        <img src="<?php echo base_url('assets/images/payments/master.png') ?>" height="24" alt="master-card-img">
                                        <img src="<?php echo base_url('assets/images/payments/discover.png') ?>" height="24" alt="discover-card-img">
                                        <img src="<?php echo base_url('assets/images/payments/visa.png') ?>" height="24" alt="visa-card-img">
                                        <img src="<?php echo base_url('assets/images/payments/stripe.png') ?>" height="24" alt="stripe-card-img">
                                    </div>
                                </div> <!-- end row -->
                            </div>
                            <!-- end Credit/Debit Card box-->

                        </div> <!-- end col -->

                        

						<div class="col-lg-4">
						    <div class="border p-3 mt-4 mt-lg-0 rounded">
						        <h4 class="header-title mb-3">Order Summary</h4>
						        <div class="table-responsive">
						            <table class="table mb-0">
						                <tbody>
						                    <tr>
						                        <td>Order Price :</td>
						                        <td><?php echo number_format($order_cost, 2); ?></td>
						                    </tr>
						                    <tr>
						                        <td>Discount : </td>
						                        <td>00.00</td>
						                    </tr>
						                    <tr>
						                        <th>Total :</th>
						                        <th><?php echo number_format($order_cost, 2); ?></th>
						                    </tr>
						                </tbody>
						            </table>
						        </div>
						        <!-- end table-responsive -->
						    </div>
						</div>
                    </div> <!-- end row-->   
                </div> 
            </div> 
        </div>
    </div>

</div>