
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
                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start mt-1 p-2">
                                                        <img src="<?php echo base_url('assets/images/users/avatar-2.jpg'); ?>" class="me-2 rounded-circle" height="48" alt="User M" />
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span class="float-end text-muted font-12">4:30am</span>
                                                                User M
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">3</span></span>
                                                                <span class="w-75">How are you today?</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start bg-light p-2">
                                                        <img src="<?php echo base_url('assets/images/users/avatar-5.jpg'); ?>" class="me-2 rounded-circle" height="48" alt="User N" />
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span class="float-end text-muted font-12">5:30am</span>
                                                                User N
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-75">Hey! a reminder for tomorrow's meeting...</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="text-body">
                                                    <div class="d-flex align-items-start mt-1 p-2">
                                                        <img src="<?php echo base_url('assets/images/users/avatar-7.jpg'); ?>" class="me-2 rounded-circle" height="48" alt="User O" />
                                                        <div class="w-100 overflow-hidden">
                                                            <h5 class="mt-0 mb-0 font-14">
                                                                <span class="float-end text-muted font-12">Thu</span>
                                                                User O
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-14">
                                                                <span class="w-25 float-end text-end">
                                                                    <span class="badge badge-danger-lighten">2</span>
                                                                </span>
                                                                <span class="w-75">Are we going to have this week's planning meeting today?</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
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
                                <li class="clearfix">
                                    <div class="chat-avatar">
                                        <img src="<?php echo base_url('assets/images/users/avatar-5.jpg'); ?>" class="rounded" alt="User N" />
                                        <i>10:00</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>User N</i>
                                            <p>
                                                Hello!
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="chat-avatar">
                                        <img src="<?php echo '../../uploads/profiles/'.$user_info->Avatar; ?>" class="rounded" alt="Me:" />
                                        <i>10:01</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>Me:</i>
                                            <p>
                                                Hi, How are you? What about our next meeting?
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="chat-avatar">
                                        <img src="<?php echo base_url('assets/images/users/avatar-5.jpg'); ?>" class="rounded" alt="User N" />
                                        <i>10:01</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>User N</i>
                                            <p>
                                                Yeah everything is fine
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="chat-avatar">
                                        <img src="<?php echo '../../uploads/profiles/'.$user_info->Avatar; ?>" class="rounded" alt="Me:" />
                                        <i>10:02</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>Me:</i>
                                            <p>
                                                Wow that's great
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="chat-avatar">
                                        <img src="<?php echo base_url('assets/images/users/avatar-5.jpg'); ?>" alt="User N" class="rounded" />
                                        <i>10:02</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>User N</i>
                                            <p>
                                                Let's have it today if you are free
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="chat-avatar">
                                        <img src="<?php echo '../../uploads/profiles/'.$user_info->Avatar; ?>" class="rounded" alt="Me:" />
                                        <i>10:03</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>Me:</i>
                                            <p>
                                                Sure thing! let me know if 2pm works for you
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="chat-avatar">
                                        <img src="<?php echo base_url('assets/images/users/avatar-5.jpg'); ?>" alt="User N" class="rounded" />
                                        <i>10:04</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>User N</i>
                                            <p>
                                                Sorry, I have another meeting scheduled at 2pm. Can we have it
                                                at 3pm instead?
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="chat-avatar">
                                        <img src="<?php echo base_url('assets/images/users/avatar-5.jpg'); ?>" alt="User N" class="rounded" />
                                        <i>10:04</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>User N</i>
                                            <p>
                                                We can also discuss about the presentation talk format if you have some extra mins
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class="chat-avatar">
                                        <img src="<?php echo '../../uploads/profiles/'.$user_info->Avatar; ?>" class="rounded" alt="Me:" />
                                        <i>10:05</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>Me:</i>
                                            <p>
                                                3pm it is. Sure, let's discuss about presentation format, it would be great to finalize today. 
                                                I am attaching the last year format and assets here...
                                            </p>
                                        </div>
                                        <div class="card mt-2 mb-1 shadow-none border text-start">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded">
                                                            .ZIP
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);"
                                                            class="text-muted fw-bold">Hyper-admin-design.zip</a>
                                                        <p class="mb-0">2.3 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-link btn-lg text-muted">
                                                        <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col">
                                    <div class="mt-2 bg-light p-3 rounded">
                                        <form class="needs-validation" novalidate="" name="chat-form"
                                            id="chat-form">
                                            <div class="row">
                                                <div class="col mb-2 mb-sm-0">
                                                    <input type="text" class="form-control border-0" placeholder="Enter your text" required="">
                                                    <div class="invalid-feedback">
                                                        Please enter your messsage
                                                    </div>
                                                </div>
                                                <div class="col-sm-auto">
                                                    <div class="btn-group">
                                                        <a href="apps-chat.html#" class="btn btn-light">
                                                            <i class="uil uil-paperclip"></i>
                                                        </a>
                                                        <a href="apps-chat.html#" class="btn btn-light"> 
                                                            <i class='uil uil-smile'></i> 
                                                        </a>
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-success chat-send">
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
                            <div class="mt-3 text-center">
                                <img src="<?php echo base_url('assets/images/users/avatar-5.jpg'); ?>" alt="shreyu"
                                    class="img-thumbnail avatar-lg rounded-circle" />
                                <h4>User N</h4>
                                <button class="btn btn-primary btn-sm mt-1">
                                    <i class='uil uil-envelope-add me-1'></i>Send Email
                                </button>
                                <p class="text-muted mt-2 font-14">Last Interacted: <strong>Few hours back</strong></p>
                            </div>
                            <div class="mt-3">
                                <hr class="" />
                                <p class="mt-4 mb-1">
                                    <strong><i class='uil uil-at'></i> Email:</strong>
                                </p>
                                <p>usern@mail.com</p>
                                <p class="mt-3 mb-1">
                                    <strong><i class='uil uil-phone'></i> Phone Number:</strong>
                                </p>
                                <p>546546546565</p>
                                <p class="mt-3 mb-1"><strong>
                                    <i class='uil uil-location'></i> Location:</strong>
                                </p>
                                <p>California, USA</p>
                                <p class="mt-3 mb-1">
                                    <strong><i class='uil uil-globe'></i> Languages:</strong>
                                </p>
                                <p>English, German, Spanish</p>
                            </div>
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
  