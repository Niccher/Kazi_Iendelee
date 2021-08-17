
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
                            echo $orders_info['Order_Name'];
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
                            echo $orders_info['Order_Body'];
                        ?>
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Citation</h5>
                                <p><?php echo ucfirst(str_replace('task_cite_', '', $orders_info['Order_Cite'])); ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Subject</h5>
                                <p><?php echo ucfirst(str_replace('task_level_', '', $orders_info['Order_Cite'])); ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Size</h5>
                                <p>Pages: <?php echo $orders_info['Order_Pages']; ?> </p>
                                <p>Words: <?php echo $orders_info['Order_Words']; ?> </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Start Date</h5>
                                <p><?php echo date('F d Y', $orders_info['Order_Created']); ?> <small class="text-muted"><?php echo date('H:i:s A', $orders_info['Order_Created']); ?></small></p>
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
                                <p><b>****</b></p>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card-body-->
                
            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Comments regarding this offer</h5>

                    <div class="card mb-1 shadow-none border">
                        <div class="p-2">
                            <p><?php echo ucfirst(str_replace('task_cite_', '', $orders_info['Order_Comment'])); ?> </p>
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
                        $each_file = explode('|||', $orders_info['Order_Attachment']);
                        for ($i=0; $i < count($each_file)-1; $i++) { 
                            $human_size = $this->mod_orders->get_attachment_size(filesize('uploads/temp_orders/'.urldecode($each_file[$i])));

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

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Submitted Files</h5>

                    <div class="card mb-1 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img src="<?php echo base_url('assets/images/projects/project-1.jpg');?>" class="avatar-sm rounded" alt="file-image" />
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                    <p class="mb-0">3.25 MB</p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                        <i class="dripicons-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    
</div> <!-- container -->