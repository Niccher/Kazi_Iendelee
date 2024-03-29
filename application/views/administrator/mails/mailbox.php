
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
                    <h4 class="page-title">Chats</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <!-- start chat users-->
            <div class="col-xxl-3 col-xl-6 order-xl-1">
                <div class="card">
                    <div class="card-body p-0">
                        <ul class="nav nav-tabs nav-bordered">
                            <li class="nav-item">
                                <a href="#" data-bs-toggle="tab" aria-expanded="false" class="nav-link active py-2">
                                All
                                </a>
                            </li>
                        </ul>
                        <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active p-3" id="newpost">
                                <!-- users -->
                                <div class="row">
                                    <div class="col">
                                        <div data-simplebar style="max-height: 550px">
                                            <?php echo $Aactive_msg;?>
                                        </div>
                                        <!-- end slimscroll-->
                                    </div>
                                    <!-- End col -->
                                </div>
                                <!-- end users -->
                            </div>
                            <!-- end Tab Pane-->
                        </div>
                        <!-- end tab content-->
                    </div>
                    <!-- end card-body-->
                </div>
                <!-- end card-->
            </div>
            <!-- end chat users-->
            <!-- chat area -->
            <div class="col-xxl-6 col-xl-12 order-xl-2">
                <div class="card">
                    <div class="card-body">
                        <ul class="conversation-list" data-simplebar style="max-height: 537px">
                                <div id="message_view_box"></div>
                            </ul>
                        <div class="row">
                            <div class="col">
                                <div class="mt-2 bg-light p-3 rounded">
                                    <form class="needs-validation" novalidate="" name="chat-form"
                                            id="chat-form">
                                        <div class="row">
                                            <div class="col mb-2 mb-sm-0">
                                                <input type="text" class="form-control border-0" placeholder="Enter your text" id="admin_msg_box" required="">
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
                                                        <button type="button" class="btn btn-success chat-send" id="admin_send">
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
            <!-- start user detail -->
            <div class="col-xxl-3 col-xl-6 order-xl-1 order-xxl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="profile_info"></div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card-->
            </div>
            <!-- end col -->
            <!-- end user detail -->
        </div>
        <!-- end row-->
    </div>
    <!-- container -->
