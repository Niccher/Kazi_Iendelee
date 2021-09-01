
<!-- Start Content-->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Chat</li>
                    </ol>
                </div>
                <h4 class="page-title">Chat</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <!-- chat area -->
        <div class="col-xxl-12 col-xl-12 order-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="conversation-list" data-simplebar style="max-height: 537px">
                        <div id="message_view_box"> <?php echo $msgs;?></div>
                    </ul>
                    <div class="row">
                        <div class="col">
                            <div class="mt-2 bg-light p-3 rounded">
                                <form class="needs-validation" novalidate="" name="chat-form"
                                    id="chat-form">
                                    <div class="row">
                                        <div class="col mb-2 mb-sm-0">
                                            <input type="text" class="form-control border-0" placeholder="Enter your text" id="reseller_msg_box" required="">
                                            <div class="invalid-feedback">
                                                Please enter your messsage
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-light">
                                                    <i class="uil uil-paperclip"></i>
                                                </a>
                                                <a href="#" class="btn btn-light"> 
                                                    <i class='uil uil-smile'></i> 
                                                </a>
                                                <div class="d-grid">
                                                    <button type="button" class="btn btn-success chat-send" id="reseller_send">
                                                        <i class='uil uil-message'></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row-->
                                </form>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end chat area-->
        <!-- end user detail -->
    </div>
    <!-- end row-->
</div>
<!-- container -->