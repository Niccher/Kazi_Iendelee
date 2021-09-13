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

                            <?php 
                                $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
                                $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
                            ?>

                            <h4><?php echo ucfirst($this->mod_crypt->Dec_String($order_info['Order_Name'])); ?></h4>

                            <div class="row">
                                <div class="col-4">
                                    <!-- assignee -->
                                    <p class="mt-2 mb-1 text-muted">Assigned To</p>
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
                                <div class="col-12">
                                    <h3>Order Description.</h3>
                                    <?php echo $this->mod_crypt->Dec_String($order_info['Order_Body']); ?>
                                </div> <!-- end col -->
                            </div>
                            <!-- end task description -->

                            <!-- start sub tasks/checklists -->
                            <h5 class="mt-4 mb-2 font-16">Order Progress and Milestones</h5>

                                <div class="form-check mt-1">
                                        <?php 
                                            if ($order_info['Order_Paid'] == '00') {
                                                echo '
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Not Paid - </strong> your order has not been paid for, this means that it cannot be worked upon. To overcome this please pay. 

                                                    <br>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <a href="'.base_url("buyer/".$user_url."/orders/pay/".urlencode($this->mod_crypt->Enc_String($order_info["Order_Id"]))).'">
                                                                <button type="button" class="btn btn-primary btn-block btn-rounded">Proceed to pay
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>    
                                                </div>
                                                ';
                                            }
                                        ?>
                                </div>
                            <!-- end sub tasks/checklists -->

                            <!-- start attachments -->
                            <h5 class="mt-4 mb-2 font-16">Attachments</h5>

                            <?php
                                $each_file = explode('|__|', $order_info['Order_Attachment']);
                                for ($i=1; $i < count($each_file); $i++) { 
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
                                                        <a href="'.base_url('buyer/'.$user_url.'/orders/attachment/'.$each_file[$i]).'" class="text-muted fw-bold">'.$each_file[$i].'</a>
                                                        <p class="mb-0">'.$human_size.'</p>
                                                    </div>
                                                    <div class="col-auto" id="tooltip-container9">
                                                        <!-- Button -->
                                                        <a href="'.base_url('buyer/'.$user_url.'/orders/attachment/'.$each_file[$i]).'" target="_blank"
                                                            class="btn btn-link text-muted btn-lg p-0">
                                                            <i class="uil uil-cloud-download"></i>
                                                        </a>
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
                            <!-- end attachments -->

                            <!-- comments -->
                            <div class="row mt-3">
                                <div class="col">
                                    <h5 class="mb-2 font-16">Comments</h5>
                                    <div class="comment_section" id="comment_section">
                                    <?php
                                        foreach ($order_chats as $order_chat) {
                                            if ($order_chat['Sender'] == $user_info->Person_ID) {
                                                $img = base_url('uploads/profiles/'.$user_info->Avatar);
                                                echo '
                                                    <div class="d-flex mt-3 p-1">
                                                        <img src="'.$img.'" class="me-2 rounded-circle" height="36" />
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0">
                                                                <span class="float-end text-muted font-12">'.date('H:i:s A',$order_chat['Sent']).'</span>
                                                                '.$this->mod_crypt->Dec_String($user_info->Name).'
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted">
                                                                '.$this->mod_crypt->Dec_String($order_chat['Message']).'
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                ';
                                            }else{
                                                echo '
                                                    <div class="d-flex mt-3 p-1">
                                                        <img src="" class="me-2 rounded-circle" height="36" />
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0">
                                                                <span class="float-end text-muted font-12">'.date('H:i:s A',$order_chat['Sent']).'</span>
                                                                '.$order_chat['Sender'].'
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted">
                                                                '.$this->mod_crypt->Dec_String($order_chat['Message']).'
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                ';
                                            }
                                        }
                                    ?>
                                    </div>

                                </div>
                            </div>

                            

                        <?php
                            if (($order_info['Order_Paid']) == "00") {
                                // code...
                            }else{
                                echo '
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="border rounded">
                                            <form action="'.base_url('buyer/'.$user_url.'/orders/convo/'.urlencode($this->mod_crypt->Enc_String($order_info['Order_Id']))).'" method="POST" class="comment-area-box">
                                                <textarea rows="3" class="form-control border-0 resize-none"
                                                placeholder="Your comment..." id="convo_msg"></textarea>
                                                <div class="p-2 bg-light">
                                                    <div class="float-end">
                                                        <button type="button" id="convo_send" class="btn btn-sm btn-success"><i class="uil uil-message me-1"></i>Submit</button>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class="uil uil-cloud-upload"></i></a>
                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class="uil uil-at"></i></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> 
                                </div>
                                ';
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