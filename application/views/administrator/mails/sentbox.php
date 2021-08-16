
        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page email-title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Mailbox</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sentbox</h4>
                    </div>
                </div>
            </div>     
            <!-- end page email-title --> 

            <div class="row">

                <!-- Right Sidebar -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Left sidebar -->
                            <div class="page-aside-left">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#compose-modal">Compose</button>
                                </div>

                                <div class="email-menu-list mt-3">
                                    <a href="<?php echo base_url('admin/mail/all');?>">
                                        <i class="dripicons-inbox me-2"></i>Mailbox
                                        <span class="badge badge-danger-lighten float-end ms-2">7</span>
                                    </a>
                                    <a href="<?php echo base_url('admin/mail/inbox');?>"><i class="dripicons-inbox me-2"></i>Inbox</a>
                                    <a href="<?php echo base_url('admin/mail/sent');?>" class="text-danger fw-bold"><i class="dripicons-exit me-2"></i>Sentbox</a>
                                </div>

                            </div>
                            <!-- End Left sidebar -->

                            <div class="page-aside-right">

                                <div class="mt-3">
                                    <ul class="email-list">
                                        <li class="unread">
                                            <div class="email-sender-info">
                                                <div class="checkbox-wrapper-mail">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="mail1">
                                                        <label class="form-check-label" for="mail1"></label>
                                                    </div>
                                                </div>
                                                <span class="star-toggle mdi mdi-star-outline text-warning"></span>
                                                <a href="<?php echo base_url('mails/read');?>" class="email-title">Lucas Kriebel (via Twitter)</a>
                                            </div>
                                            <div class="email-content">
                                                <a href="<?php echo base_url('mails/read');?>" class="email-subject">Lucas Kriebel (@LucasKriebel) has sent
                                                    you a direct message on Twitter! &nbsp;&ndash;&nbsp;
                                                    <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="email-date">11:49 am</div>
                                            </div>
                                            <div class="email-action-icons">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-open email-action-icons-item"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="email-sender-info">
                                                <div class="checkbox-wrapper-mail">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="mail2">
                                                        <label class="form-check-label" for="mail2"></label>
                                                    </div>
                                                </div>
                                                <span class="star-toggle mdi mdi-star-outline"></span>
                                                <a href="<?php echo base_url('mails/read');?>" class="email-title">Randy, me (5)</a>
                                            </div>
                                            <div class="email-content">
                                                <a href="<?php echo base_url('mails/read');?>" class="email-subject">Last pic over my village &nbsp;&ndash;&nbsp;
                                                    <span>Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                </a>
                                                <div class="email-date">5:01 am</div>
                                            </div>
                                            <div class="email-action-icons">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="email-sender-info">
                                                <div class="checkbox-wrapper-mail">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="mail3">
                                                        <label class="form-check-label" for="mail3"></label>
                                                    </div>
                                                </div>
                                                <span class="star-toggle mdi mdi-star-outline text-warning"></span>
                                                <a href="<?php echo base_url('mails/read');?>" class="email-title">Andrew Zimmer</a>
                                            </div>
                                            <div class="email-content">
                                                <a href="<?php echo base_url('mails/read');?>" class="email-subject">Mochila Beta: Subscription Confirmed
                                                    &nbsp;&ndash;&nbsp; <span>You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                </a>
                                                <div class="email-date">Mar 8</div>
                                            </div>
                                            <div class="email-action-icons">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end .mt-4 -->
                            </div> 
                            <!-- end inbox-rightbar-->
                        </div>
                        <!-- end card-body -->
                        <div class="clearfix"></div>
                    </div> <!-- end card-box -->

                </div> <!-- end Col -->
            </div><!-- End row -->
            
        </div> <!-- container -->

    <!-- Compose Modal -->
    <div id="compose-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compose-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="compose-header-modalLabel">New Message</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-1">
                    <div class="modal-body px-3 pt-3 pb-0">
                        <form>
                            <div class="mb-2">
                                <label for="msgto" class="form-label">To</label>
                                <input type="text" id="msgto" class="form-control" placeholder="Example@email.com">
                            </div>
                            <div class="mb-2">
                                <label for="mailsubject" class="form-label">Subject</label>
                                <input type="text" id="mailsubject" class="form-control" placeholder="Your subject">
                            </div>
                            <div class="write-mdg-box mb-3">
                                <label class="form-label">Message</label>
                                <textarea id="summernote"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="px-3 pb-3">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="mdi mdi-send me-1"></i> Send Message</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->