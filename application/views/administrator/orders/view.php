
<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">View Order Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Order Details</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-xxl-8 col-lg-6">
            <!-- project card -->
            <div class="card d-block">
                <div class="card-body">
                    <h3 class="mt-0">
                        <?php
                            echo $this->mod_crypt->Dec_String($orders_info['Order_Name']);
                        ?>
                    </h3>

                    <?php
                        if ($orders_info['Order_Status'] == '' || $orders_info['Order_Status'] == 'Inactive' ) {
                            $active = '<div class="badge bg-secondary text-light mb-3">In Active</div>';
                        }else{
                            $active = '<div class="badge badge-success text-light mb-3">Active</div>';
                        }

                        if ($orders_info['Order_Paid'] == '' || $orders_info['Order_Paid'] == '00' ) {
                            $paid = '<div class="badge bg-danger text-light mb-3">Not Paid</div>';
                        }else{
                            $paid = '<div class="badge bg-primary text-light mb-3">Paid</div>';
                        }
                    ?>

                    <div><?php echo $active . '&nbsp; &nbsp;' . $paid ?></div>

                    <h5>Order Overview:</h5>

                    <p class="text-muted mb-2">
                        <?php
                            echo $this->mod_crypt->Dec_String($orders_info['Order_Body']);
                        ?>
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Citation</h5>
                                <p><?php echo ucfirst(str_replace('task_cite_', '', $this->mod_crypt->Dec_String($orders_info['Order_Cite']))); ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Subject</h5>
                                <p><?php echo ucfirst(str_replace('task_level_', '', $this->mod_crypt->Dec_String($orders_info['Order_Level']))); ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Size</h5>
                                <p>Pages: <?php echo $this->mod_crypt->Dec_String($orders_info['Order_Pages']); ?> </p>
                                <p>Words: <?php echo $this->mod_crypt->Dec_String($orders_info['Order_Words']); ?> </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Start Date</h5>
                                <p><?php echo date('F d Y', $orders_info['Order_Created']); ?> <small class="text-muted"><?php echo date('M d H:i:s A', $orders_info['Order_Created']); ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>End Date</h5>
                                <p><?php echo str_replace('-', ' ', $orders_info['Order_Deadline']); ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Budget</h5>
                                <p><b><?php echo $this->mod_crypt->Dec_String($orders_info['Order_Cost']); ?></b></p>
                            </div>
                        </div>
                    </div>

                    <?php

                        if (empty($assign_list)) {
                            ?>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Assign and Approve Order</h5>
                    <?php $uuid = urlencode($this->mod_crypt->Enc_String($orders_info['Order_Id'])); ?>
                    <form action="<?php echo base_url('admin/assign/'.$uuid); ?>" method='POST'>
                        <div class="card mb-1 shadow-none">
                            <div class="col-12">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="assigned_price" placeholder="Estimated Price" value="<?php echo $this->mod_crypt->Dec_String($orders_info['Order_Cost']); ?>" required="">
                                        <label>Estimated Order Price <span class="badge bg-warning rounded-pill">Required</span> </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-12">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" name="assigned_writer">
                                            <?php 
                                                foreach ($user_list as $writer) {
                                                    if ($writer['Privilege'] == 'L2dtMXVzazk5MmlNSzhTWg==') {
                                                        $nam = ucfirst($this->mod_crypt->Dec_String($writer['Name']));
                                                        $ids = urlencode($this->mod_crypt->Enc_String($writer['Person_ID']));
                                                        echo '<option value="'.$ids.'">'.$nam.'</option>';
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <label for="floatingSelectGrid">Assign Writer</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="justify-content-end row">
                                <div class="col-9">
                                    <button type="submit" class="btn btn-info">Assign Writer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

                            <?php 
                        }else{
                            $writer_info = $this->mod_users->get_vars($assign_list->Assignee);
                            $writer_name = ucfirst($this->mod_crypt->Dec_String($writer_info->Name));
                            if ($assign_list->Assign_Reply == "00") {
                                $reply = "Rejected";
                                $reasn = "Not Seen";
                            }else if ($assign_list->Assign_Reply == "00") {
                                $reply = "Rejected";
                                $reasn = "Rejected Offer";
                            }else{
                                $reply = "Accepted";;
                                $reasn = "Accepted Offer";
                            }

                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h5>Assigned Writer</h5>
                                        <p><?php echo $writer_name; ?><br><small class="text-muted"><?php echo date('M d H:i:s A', $assign_list->Assign_Time); ?></small></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <h5>Writer Response</h5>
                                        <p><?php echo $reply; ?><br><small class="text-muted"><?php echo $reasn; ?></small></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                        
                    ?>



                </div> <!-- end card-body-->
                
            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Comments regarding this offer</h5>

                    <div class="card mb-1 shadow-none border">
                        <div class="p-2">
                            <p><?php echo ucfirst(str_replace('task_cite_', '', $this->mod_crypt->Dec_String($orders_info['Order_Comment']))); ?> </p>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!-- end col -->

        <div class="col-lg-6 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Attachments</h5>

                    <?php
                        $each_file = explode('|__|', $orders_info['Order_Attachment']);
                        for ($i=0; $i < count($each_file)-1; $i++) { 
                            $human_size = $this->mod_orders->get_attachment_size(filesize('uploads/orders/'.urldecode($each_file[$i])));

                            echo '
                                <div class="card mb-2 shadow-none border">
                                    <div class="p-1">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded">
                                                        .'.pathinfo($each_file[$i], PATHINFO_EXTENSION).'
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="'.base_url('admin/orders/attachment/'.$each_file[$i]).'" class="text-muted fw-bold">'.$each_file[$i].'</a>
                                                <p class="mb-0">'.$human_size.'</p>
                                            </div>
                                            <div class="col-auto" id="tooltip-container9">
                                                <!-- Button -->
                                                <a href="'.base_url('admin/orders/attachment/'.$each_file[$i]).'" target="_blank"
                                                    class="btn btn-link text-muted btn-lg p-0">
                                                    <i class="uil uil-cloud-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    ';

                        }
                    ?>

                </div>
            </div>

        </div>
    </div>
    <!-- end row -->
    
</div> <!-- container -->