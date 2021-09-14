<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <!-- task details -->
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-body">
                    <?php 
                        $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
                        $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
                        $delte_id = urlencode($this->mod_crypt->Enc_String($order_info['Order_Id']));
                        

                        if ($order_info['Order_Status'] == "Finished") {
                            $final = '
                            <a href="javascript:void(0)">
                                <button type="button" class="btn btn-primary mb-2"><i class="mdi mdi-progress-check me-1"></i>Order Marked as Complete</button>
                            </a> 
                            ';
                        }else{
                            $final ="";
                        }
                    ?>

                    <div class="row">
                        <div class="row mb-2">
                            <div class="col-xl-6"></div>
                            <div class="col-xl-6">
                                <div class="text-xl-end mt-xl-0 mt-2">
                                    <div class="text-sm-end">
                                        
                                        <a href="<?php echo base_url('buyer/'.$user_url.'/orders');?>">
                                            <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-keyboard-backspace me-1"></i>Back</button>
                                        </a>
                                        <a href="<?php echo base_url('buyer/'.$user_url.'/orders/edit/'.$delte_id);?>">
                                            <button type="button" class="btn btn-primary mb-2"><i class="mdi mdi-book-edit me-1"></i>Edit</button>
                                        </a> 
                                        <a href="<?php echo base_url('buyer/'.$user_url.'/orders/delete/'.$delte_id);?>">
                                            <button type="button" class="btn btn-danger mb-2"><i class="mdi mdi-trash-can me-1"></i>Delete</button>
                                        </a> 
                                    </div>
                                </div>
                            </div><!-- end col-->
                        </div>
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col">

                            <h4><?php echo ucfirst($this->mod_crypt->Dec_String($order_info['Order_Name'])); ?></h4>

                            <div class="row">
                                <div class="col-4">
                                    <!-- assignee -->
                                    <p class="mt-2 mb-1 text-muted">Order From</p>
                                    <div class="d-flex">
                                        <img src="<?php echo base_url('uploads/profiles/'.$user_info->Avatar);?>" class="rounded-circle me-2" height="24" />
                                            <h5 class="mt-1 font-14">
                                                <?php echo ucfirst($this->mod_crypt->Dec_String($user_info->Name));?>
                                            </h5>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-4">
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

                                <div class="col-4">
                                    <!-- start due date -->
                                    <p class="mt-2 mb-1 text-muted">Due Date</p>
                                    <div class="d-flex">
                                        <i class='uil uil-schedule font-18 text-success me-1'></i>
                                        <div>
                                            <h5 class="mt-1 font-14">
                                                <?php echo $this->mod_crypt->Dec_String($order_info['Order_Deadline']); ?>
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
                                                <?php echo $this->mod_crypt->Dec_String($order_info['Order_Pages']); ?>
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
                                                <?php echo $this->mod_crypt->Dec_String($order_info['Order_Words']); ?>
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
                                                <?php echo str_replace("task_cite_", "", $this->mod_crypt->Dec_String($order_info['Order_Cite'])); ?>
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
                                                <?php echo ucfirst(str_replace("task_level_", "", $this->mod_crypt->Dec_String($order_info['Order_Level']))); ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- task description -->
                            <div class="row mt-3">
                                <?php echo $this->mod_crypt->Dec_String($order_info['Order_Body']); ?>
                            </div>
                            <!-- end task description -->

                            <h5 class="mt-4 mb-2 font-16">Attachments</h5>
                            <div class="row mt-3" data-simplebar style="max-height: 560px"> 
                                <div class="row">
                                    <?php
                                    $all = str_replace("|__||__||__|", "|__|", $order_info['Order_Attachment']);
                                    $each_file = explode('|__|', str_replace("|__||__|", "|__|", $all)) ;
                         
                                        for ($i=1; $i < count($each_file); $i++) { 
                                            $human_size = $this->mod_orders->get_attachment_size(filesize('uploads/orders/'.urldecode($each_file[$i])));

                                            echo '
                                                <div class="col-6">
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
                                                                <a href="'.base_url('writer/'.$user_url.'/orders/attachment/'.$each_file[$i]).'" class="text-muted fw-bold">'.character_limiter($each_file[$i], 30).'</a>
                                                                <p class="mb-0">'.$human_size.'</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ';
                                        }
                                        if ($order_info['Order_Attachment'] == "") {
                                            echo 'No attachment';
                                        }
                                    ?>
                                </div>
                                
                            </div>

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
                                                            <a href="'.base_url('writer/'.$user_url.'/orders/submision/'.$all_files[$i]).'" class="text-muted fw-bold">'.$all_files[$i].'</a>
                                                            <p class="mb-0">'.$human_size.'</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="'.base_url('writer/'.$user_url.'/orders/submision/'.$all_files[$i]).'" target="_blank"
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

                                    if ($order_chat['Sender'] == $user_info->Person_ID || $order_chat['Sender'] == "Admin" || $order_chat['Recipient'] == $user_info->Person_ID || $order_chat['Recipient'] == "Admin" ) {
                                        
                                        if ($order_chat['Sender'] == $user_info->Person_ID) {
                                            $img = base_url('uploads/profiles/'.$user_info->Avatar);
                                            echo '
                                                <li class="clearfix odd">
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
                                        }else{
                                            echo '
                                                <li class="clearfix">
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

                                    
                                }
                            ?>
                                    </div>                                  
                            
                                 </ul>
                            </div>

                            <?php
                                if ($order_info['Order_Status'] == "Finished") {
                                    echo '
                                    <div class="alert alert-success" role="alert">
                                        <strong>Work as been marked as complete
                                    </div>';
                                }else{
                                    ?>

                            <div class="row mt-2">
                                <div class="col">
                                    <div class="border rounded">
                                        <form action="<?php echo base_url('buyer/'.$user_url.'/orders/convo/'.urlencode($this->mod_crypt->Enc_String($order_info['Order_Id']))); ?>" method="POST" class="comment-area-box">
                                            <textarea rows="3" class="form-control border-0 resize-none"
                                            placeholder="Converse with the admin, Send him a message regarding the work" id="convo_msg"></textarea>
                                            <div class="p-2 bg-light">
                                                <div class="float-end">
                                                    <button type="button" id="convo_send" name="<?php echo urlencode($this->mod_crypt->Enc_String($order_info['Order_Id'])); ?>" class="btn btn-sm btn-success">
                                                        <i class='uil uil-message me-1'></i>Submit
                                                    </button>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn btn-sm px-1 btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">
                                                        <i class='uil uil-cloud-upload' data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg"></i>
                                                    </a>
                                                </div>
                                                <div class="made_submissions" name="made_submissions"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            </div>
                                    <?php
                                }
                            ?>

                            <!-- end comments -->
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row-->

</div> <!-- container -->


<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid" id="uploader_view">
                    <div class="col-12">
                        <form action="<?php echo base_url('writer/'.$user_url.'/orders_make_order_attachment'); ?>" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>

                            <div class="dz-message needsclick">
                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                <h3>Upload your attachments.</h3>
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