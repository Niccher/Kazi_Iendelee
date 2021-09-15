<!-- Start Content-->
<div class="container-fluid">
    <?php $uuid = urlencode($this->mod_crypt->Enc_String($orders_info['Order_Id'])); ?>
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <div class="row mb-2">
                        <div class="col-xl-12">
                            <div class="text-xl-end mt-xl-0 mt-2">
                                <div class="text-sm-end">
                                    <a href="<?php echo base_url('admin/orders');?>">
                                        <button type="button" class="btn btn-success mb-2 me-1">Back to Orders</button>
                                    </a>
                                    <a href="<?php echo base_url('admin/orders/create');?>">
                                        <button type="button" class="btn btn-info mb-2 me-1">Create</button>
                                    </a>
                                    
                                </div>
                            </div>
                        </div><!-- end col-->
                    </div>
                </div>
                <h4 class="page-title">Order Details</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
    
    <div class="row">
        <div class="col-xxl-8 col-lg-12">
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
                                <p><?php echo date('d M Y', $orders_info['Order_Created']); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>End Date</h5>
                                <p><?php echo str_replace('-', ' ', $this->mod_crypt->Dec_String($orders_info['Order_Deadline'])); ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Budget</h5>
                                <p><b><?php echo $this->mod_crypt->Dec_String($orders_info['Order_Cost']); ?></b></p>
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
                            <p><?php echo ucfirst(str_replace('task_cite_', '', $this->mod_crypt->Dec_String($orders_info['Order_Comment']))); ?> </p>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!-- end col -->

        <div class="col-lg-12 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Attachments</h5>

                    <?php
                        $all = str_replace("|__||__||__|", "|__|", $orders_info['Order_Attachment']);
                        $each_file = explode('|__|', str_replace("|__||__|", "|__|", $all)) ;
                         
                        for ($i=1; $i < count($each_file); $i++) { 
                            $human_size = $this->mod_orders->get_attachment_size(filesize('uploads/orders/'.urldecode($each_file[$i])));
                            if ($each_file[$i] == ".") {
                                echo "Dope";
                            }

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

        <?php 
            $assignement = $this->mod_orders->get_orders_assigned_id($orders_info['Order_Id']); 
            $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
            if (empty($assignement)) {
                // code...
            }else if($assignement['Assign_Reply'] == "11") {
                ?>

            <!-- comments -->
            <div class="row mt-3">
                <ul class="conversation-list" data-simplebar style="max-height: 537px">
                    <h5 class="mb-2 font-16">Conversations</h5>
                    <div id="message_view_box" name="message_view_box" class="message_view_box" >
            <?php
                foreach ($order_chats as $order_chat) {
                    $attached = "";
                    if ($order_chat['Attachment'] != "" || $order_chat['Attachment'] != NULL) {
                        $all_files = explode("|__|", $order_chat['Attachment']);
                        
                        for ($i=1; $i < count($all_files); $i++) {
                            $human_size = $this->mod_orders->get_attachment_size(filesize('uploads/submissions/'.urldecode($all_files[$i])));
                            $attached .= '
                            <div class="card mt-2 mb-1 shadow-none border text-start">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar-sm">
                                                <span class="avatar-title rounded">
                                                    .'.pathinfo($all_files[$i], PATHINFO_EXTENSION).'
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col ps-0">
                                            <a href="'.base_url('admin/orders/submision/'.$all_files[$i]).'" class="text-muted fw-bold">'.$all_files[$i].'</a>
                                            <p class="mb-0">'.$human_size.'</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="'.base_url('admin/orders/submision/'.$all_files[$i]).'" target="_blank"
                                                class="btn btn-link text-muted btn-lg p-0">
                                                <i class="uil uil-cloud-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    }else{
                        $attached = "";
                    }

                    if ($order_chat['Sender'] != "Admin") {
                        if ($this->mod_crypt->Dec_String($user_info->Privilege) != "Client") {
                            echo '
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="'.base_url('uploads/profiles/'.$user_info->Avatar).'" alt="'.$this->mod_crypt->Dec_String($user_info->Name).'" class="rounded avatar-sm" />
                                    <i>'.date('d H:i',$order_chat['Sent']).'</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>'.$this->mod_crypt->Dec_String($user_info->Name).':</i>
                                        <p>
                                            '.$this->mod_crypt->Dec_String($order_chat['Message']).'
                                        </p>
                                        '.$attached.'
                                    </div>
                                </div>
                            </li>
                            ';
                        }
                        
                    }else if ($order_chat['Sender'] == "Admin") {
                        echo '
                            <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="'.base_url('assets/images/waves.png').'" alt="Admin:" class="rounded" />
                                    <i>'.date('H:i:s A',$order_chat['Sent']).'</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Admin:</i>
                                        <p>
                                            '.$this->mod_crypt->Dec_String($order_chat['Message']).'
                                        </p>
                                        '.$attached.'
                                    </div>
                                </div>

                            </li>
                        ';
                    }
                }
            ?>
                    </div>                                  
            
                 </ul>
            </div>

            <div class="row mt-2">
                <div class="col">

                    <?php if ($orders_info['Order_Status'] != "Finished") { ?>
                         <div class="border rounded">
                            <form action="<?php echo base_url('admin/orders/convo/'.urlencode($this->mod_crypt->Enc_String($orders_info['Order_Id']))); ?>" method="POST" class="comment-area-box">
                                <textarea rows="3" class="form-control border-0 resize-none"
                                placeholder="Converse with the writer, Send him a message regarding the work" id="convo_msg"></textarea>
                                <div class="p-2 bg-light">
                                    <div class="float-end">
                                        <a type="button" name="<?php echo urlencode($this->mod_crypt->Enc_String($orders_info['Order_Id'])); ?>" class="btn btn-sm btn-outline-primary" href="<?php echo base_url('admin/orders/complete/'.urlencode($this->mod_crypt->Enc_String($orders_info['Order_Id']))); ?>">
                                            <i class='mdi mdi-sticker-check me-1'></i>Mark as Completed
                                        </a>
                                        <button type="button" id="convo_deliver_msg" name="<?php echo urlencode($this->mod_crypt->Enc_String($orders_info['Order_Id'])); ?>" class="btn btn-sm btn-success">
                                            <i class='uil uil-message me-1'></i>Submit
                                        </button>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-sm px-1 btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">
                                            <i class='uil uil-cloud-upload' data-bs-toggle="modal" data-bs-target="#final_upload"></i>
                                        </a>
                                    </div>
                                    <div class="made_submissions" name="made_submissions"></div>
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                   
                </div> 
            </div>
                <?php
            }
        ?>

    </div>
    <!-- end row -->
    
</div> <!-- container -->

<div class="modal fade" id="final_upload" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-12">
                        <form action="<?php echo base_url('admin/orders_make/delivery_attachment/'.$uuid); ?>" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>

                            <div class="dz-message needsclick">
                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                <h3>Upload your attachments to send to the client.</h3>
                            </div>
                        </form>
                        <!-- Preview -->
                        <div class="dropzone-previews mt-3" id="file-previews"></div>

                        <!-- file preview template -->
                        <div class="d-none" id="uploadPreviewTemplate">
                            <div class="card mt-1 mb-0 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                            <p class="mb-0" data-dz-size></p>
                                        </div>                                
                                    </div>
                                    <br>
                                    <div class="container-fluid">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" data-dz-uploadprogress>
                                                <span class="progress-text"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </diV>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->