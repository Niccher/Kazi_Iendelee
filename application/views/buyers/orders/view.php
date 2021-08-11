    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- task details -->
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-body">
                    
                        <hr class="mt-4 mb-2" />

                        <div class="row">
                            <div class="col">

                                <h4><?php echo $order_info['Order_Name']; ?></h4>

                                <div class="row">
                                    <div class="col-6">
                                        <!-- assignee -->
                                        <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                        <div class="d-flex">
                                            <img src="<?php echo '../../../../uploads/profiles/'.$user_info->Avatar;?>" class="rounded-circle me-2" height="24" />
                                                <h5 class="mt-1 font-14">
                                                    <?php echo ucfirst($this->mod_crypt->Dec_String($user_info->Name));?>
                                                </h5>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-3">
                                        <!-- start due date -->
                                        <p class="mt-2 mb-1 text-muted">Started</p>
                                        <div class="d-flex">
                                            <i class='uil uil-schedule font-18 text-success me-1'></i>
                                            <div>
                                                <h5 class="mt-1 font-14">
                                                    <?php echo date('F d Y H:i:s A', $order_info['Order_Created']); ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <!-- start due date -->
                                        <p class="mt-2 mb-1 text-muted">Due Date</p>
                                        <div class="d-flex">
                                            <i class='uil uil-schedule font-18 text-success me-1'></i>
                                            <div>
                                                <h5 class="mt-1 font-14">
                                                    <?php echo $order_info['Order_Deadline']; ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-3">
                                        <!-- start due date -->
                                        <p class="mt-2 mb-1 text-muted">Pages</p>
                                        <div class="d-flex">
                                            <i class='mdi mdi-book-open-page-variant font-18 text-success me-1'></i>
                                            <div>
                                                <h5 class="mt-1 font-14">
                                                    <?php echo $order_info['Order_Pages']; ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <!-- start due date -->
                                        <p class="mt-2 mb-1 text-muted">Words</p>
                                        <div class="d-flex">
                                            <i class='uil uil-schedule font-18 text-success me-1'></i>
                                            <div>
                                                <h5 class="mt-1 font-14">
                                                    <?php echo $order_info['Order_Words']; ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <!-- start due date -->
                                        <p class="mt-2 mb-1 text-muted">Citation</p>
                                        <div class="d-flex">
                                            <i class='mdi mdi-format-quote-close-outline font-18 text-success me-1'></i>
                                            <div>
                                                <h5 class="mt-1 font-14">
                                                    <?php echo str_replace("task_cite_", "", $order_info['Order_Cite']); ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <!-- start due date -->
                                        <p class="mt-2 mb-1 text-muted">Level</p>
                                        <div class="d-flex">
                                            <i class='mdi mdi-home-group font-18 text-success me-1'></i>
                                            <div>
                                                <h5 class="mt-1 font-14">
                                                    <?php echo $order_info['Order_Level']; ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- task description -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="border rounded">
                                            <div id="bubble-editor" style="height: 130px;">
                                                <h3>Order Description.</h3>
                                                <ul>
                                                    <li>
                                                        <?php echo $order_info['Order_Body']; ?>
                                                    </li>
                                                </ul>
                                            </div> <!-- end Snow-editor-->
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task description -->

                                <!-- start sub tasks/checklists -->
                                <h5 class="mt-4 mb-2 font-16">Order Progress and Milestones</h5>

                                    <div class="form-check mt-1">
                                        Paid:
                                            <?php 
                                                if ($order_info['Order_Paid'] == '00') {
                                                    echo '<span class="badge badge-outline-danger">Initiate the payment to proceed with your order</span>';
                                                }else{
                                                    echo '<span class="badge badge-outline-success">Order has been paid for</span>';
                                                }
                                            ?>
                                            <br>
                                            Started:
                                            <?php 
                                                if ($order_info['Order_Paid'] == '00') {
                                                    echo '<span class="badge badge-outline-danger">Initiate the payment to proceed with your order</span>';
                                                }
                                            ?>
                                    </div>
                                <!-- end sub tasks/checklists -->

                                <!-- start attachments -->
                                <h5 class="mt-4 mb-2 font-16">Attachments</h5>
                                <div class="card mb-2 shadow-none border">
                                    <div class="p-1">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded">
                                                        .attach
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold"><?php echo $order_info['Order_Attachment']; ?></a>
                                                <p class="mb-0">2.3 MB</p>
                                            </div>
                                            <div class="col-auto" id="tooltip-container9">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" data-bs-container="#tooltip-container9" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download"
                                                    class="btn btn-link text-muted btn-lg p-0">
                                                    <i class='uil uil-cloud-download'></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end attachments -->

                                <!-- comments -->
                                <!--<div class="row mt-3">
                                    <div class="col">
                                        <h5 class="mb-2 font-16">Comments</h5>
                                        <div class="d-flex mt-3 p-1">
                                            <img src="<?php echo base_url('assets/images/users/avatar-9.jpg');?>" class="me-2 rounded-circle"
                                                height="36" alt="Arya Stark" />
                                            <div class="w-100">
                                                <h5 class="mt-0 mb-0">
                                                    <span class="float-end text-muted font-12">4:30am</span>
                                                    Client
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    Should I review the last 3 years legal documents as well?
                                                </p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="d-flex mt-2 p-1">
                                            <img src="<?php echo base_url('assets/images/users/avatar-5.jpg');?>"
                                                class="me-2 rounded-circle" height="36" alt="Dominc B" />
                                            <div class="w-100">
                                                <h5 class="mt-0 mb-0">
                                                    <span class="float-end text-muted font-12">3:30am</span>
                                                    Me
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    have created some general guidelines last year.
                                                </p>
                                            </div>
                                        </div> 

                                        <hr />

                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="border rounded">
                                            <form action="#" class="comment-area-box">
                                                <textarea rows="3" class="form-control border-0 resize-none"
                                                placeholder="Your comment..."></textarea>
                                                <div class="p-2 bg-light">
                                                    <div class="float-end">
                                                        <button type="submit" class="btn btn-sm btn-success"><i class='uil uil-message me-1'></i>Submit</button>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='uil uil-cloud-upload'></i></a>
                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='uil uil-at'></i></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> 
                                </div> -->


                                <!-- end comments -->
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->