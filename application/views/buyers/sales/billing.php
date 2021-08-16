    
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Checkout</h4>
                </div>
            </div>
        </div>

        <?php 
            $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
            $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
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
                                        </div>
                                        <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                            <img src="<?php echo base_url('assets/images/payments/master.png') ?>" height="24" alt="master-card-img">
                                            <img src="<?php echo base_url('assets/images/payments/discover.png') ?>" height="24" alt="discover-card-img">
                                            <img src="<?php echo base_url('assets/images/payments/visa.png') ?>" height="24" alt="visa-card-img">
                                            <img src="<?php echo base_url('assets/images/payments/stripe.png') ?>" height="24" alt="stripe-card-img">
                                        </div>
                                    </div> <!-- end row -->
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="card-number" class="form-label">Card Number</label>
                                                <input type="text" id="card-number" class="form-control" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" placeholder="4242 4242 4242 4242">
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="card-name-on" class="form-label">Name on card</label>
                                                <input type="text" id="card-name-on" class="form-control" placeholder="Master Shreyu">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="card-expiry-date" class="form-label">Expiry date</label>
                                                <input type="text" id="card-expiry-date" class="form-control" data-toggle="input-mask" data-mask-format="00/00" placeholder="MM/YY">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="card-cvv" class="form-label">CVV code</label>
                                                <input type="text" id="card-cvv" class="form-control" data-toggle="input-mask" data-mask-format="000" placeholder="012">
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div>
                                <!-- end Credit/Debit Card box-->

                                <!-- Pay with Payoneer box-->
                                <div class="border p-3 mb-3 rounded">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                                <input type="radio" id="BillingOptRadio3" name="billingOptions" class="form-check-input">
                                                <label class="form-check-label font-16 fw-bold" for="BillingOptRadio3">Pay with Payoneer</label>
                                            </div>
                                            <p class="mb-0 ps-3 pt-1">You will be redirected to Payoneer website to complete your purchase securely.</p>
                                        </div>
                                        <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                            <img src="<?php echo base_url('assets/images/payments/payoneer.png') ?>" height="30" alt="paypal-img">
                                        </div>
                                    </div>
                                </div>
                                <!-- end Pay with Payoneer box-->


                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <a href="<?php echo base_url("buyer/".$user_url."/orders"); ?>" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                            <i class="mdi mdi-arrow-left"></i> Back to Home </a>
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="text-sm-end">
                                            <a href="#" class="btn btn-danger">
                                                <i class="mdi mdi-cash-multiple me-1"></i> Complete Order </a>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->

                            </div> <!-- end col -->

                            

							<div class="col-lg-4">
							    <div class="border p-3 mt-4 mt-lg-0 rounded">
							        <h4 class="header-title mb-3">Order Summary</h4>
							        <div class="table-responsive">
							            <table class="table mb-0">
							                <tbody>
							                    <tr>
							                        <td>Grand Total :</td>
							                        <td>$80.19</td>
							                    </tr>
							                    <tr>
							                        <td>Discount : </td>
							                        <td>-$12.11</td>
							                    </tr>
							                    <tr>
							                        <td>Estimated Tax : </td>
							                        <td>$01.22</td>
							                    </tr>
							                    <tr>
							                        <th>Total :</th>
							                        <th>$68.3</th>
							                    </tr>
							                </tbody>
							            </table>
							        </div>
							        <!-- end table-responsive -->
							    </div>
							    <div class="alert alert-warning mt-3" role="alert">
							        Use coupon code <strong>Hhaha</strong> and get 10% discount !
							    </div>
							    <div class="input-group mt-3">
							        <input type="text" class="form-control form-control-light" placeholder="Coupon code" aria-label="Recipient's username">
							        <button class="input-group-text btn-light" type="button">Apply</button>
							    </div>
							</div>
                        </div> <!-- end row-->                                

                    </div> 
                </div> 
            </div>
        </div>

    </div>