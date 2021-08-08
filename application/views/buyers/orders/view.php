
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">

                            <!-- task details -->
                            <div class="col-xxl-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="form-check float-start">
                                            <input type="checkbox" class="form-check-input" id="completedCheck">
                                            <label class="form-check-label" for="completedCheck">
                                                Mark as completed
                                            </label>
                                        </div> <!-- end form-check-->

                                        <hr class="mt-4 mb-2" />

                                        <div class="row">
                                            <div class="col">

                                                <h4>The real order name here</h4>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <!-- assignee -->
                                                        <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                                        <div class="d-flex">
                                                            <img src="<?php echo base_url('assets/images/users/avatar-9.jpg');?>" alt="Arya S" class="rounded-circle me-2" height="24" />
                                                            <div>
                                                                <h5 class="mt-1 font-14">
                                                                    Client Name
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end assignee -->
                                                    </div> <!-- end col -->

                                                    <div class="col-6">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Due Date</p>
                                                        <div class="d-flex">
                                                            <i class='uil uil-schedule font-18 text-success me-1'></i>
                                                            <div>
                                                                <h5 class="mt-1 font-14">
                                                                    Today 10am
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <!-- task description -->
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <div class="border rounded">
                                                            <div id="bubble-editor" style="height: 130px;">
                                                                <h3>This is an order description area.</h3>
                                                                <ul>
                                                                    <li>
                                                                        Select a text to reveal the toolbar.
                                                                    </li>
                                                                    <li>
                                                                        Edit rich document on-the-fly, so elastic!
                                                                    </li>
                                                                </ul>
                                                                <p>
                                                                    End of simple area
                                                                </p>
                                                            </div> <!-- end Snow-editor-->
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task description -->

                                                <!-- start sub tasks/checklists -->
                                                <h5 class="mt-4 mb-2 font-16">Checklists/Sub-tasks</h5>
                                                <div class="form-check mt-1">
                                                    <input type="checkbox" class="form-check-input" id="checklist1">
                                                    <label class="form-check-label strikethrough" for="checklist1">
                                                        Find out the old contract documents
                                                    </label>
                                                </div>

                                                <div class="form-check mt-1">
                                                    <input type="checkbox" class="form-check-input" id="checklist2">
                                                    <label class="form-check-label strikethrough" for="checklist2">
                                                        Organize meeting sales associates to understand need in detail
                                                    </label>
                                                </div>

                                                <div class="form-check mt-1">
                                                    <input type="checkbox" class="form-check-input" id="checklist3">
                                                    <label class="form-check-label strikethrough" for="checklist3">
                                                        Make sure to cover every small details
                                                    </label>
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
                                                                        .ZIP
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);" class="text-muted fw-bold">sales-assets.zip</a>
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
                                                <div class="card mb-2 shadow-none border">
                                                    <div class="p-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <img src="<?php echo base_url('assets/images/projects/project-1.jpg');?>"
                                                                    class="avatar-sm rounded" alt="file-image">
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);" class="text-muted fw-bold">new-contarcts.docx</a>
                                                                <p class="mb-0">1.25 MB</p>
                                                            </div>
                                                            <div class="col-auto" id="tooltip-container10">
                                                                <!-- Button -->
                                                                <a href="javascript:void(0);" data-bs-container="#tooltip-container10" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download"
                                                                    class="btn btn-link text-muted btn-lg p-0">
                                                                    <i class='uil uil-cloud-download'></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end attachments -->

                                                <!-- comments -->
                                                <div class="row mt-3">
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
                                                        </div> <!-- end comment -->

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
                                                        </div> <!-- end comment-->

                                                        <hr />

                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

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
                                                        </div> <!-- end .border-->
                                                    </div> <!-- end col-->
                                                </div> <!-- end row-->
                                                <!-- end comments -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->