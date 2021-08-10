
        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Create an Order</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create an Order</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <?php 
                $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
                $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
            ?>
 
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="<?php echo base_url('buyer/'.$user_url.'/orders/create'); ?>" method='POST' enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3">
                                            <label for="projectname" class="form-label">Name <span class="badge bg-warning rounded-pill">Required</span></label>
                                            <input type="text" name="order_name" class="form-control" placeholder="Enter Order name" required="">
                                        </div>

                                    </div> <!-- end col-->

                                    <div class="col-xl-12">
                                        <div class="mb-3">
                                            <label for="projectname" class="form-label">Description <span class="badge bg-warning rounded-pill">Required</span></label>
                                            <textarea id="summernote" name="order_desc" required=""></textarea>
                                        </div>

                                    </div> <!-- end col-->

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select" name="order_level">
                                                        <option value="task_level_hs">High School</option>
                                                        <option value="task_level_col">College</option>
                                                        <option value="task_level_underg">Undergraduate</option>
                                                        <option value="task_level_postg">Post Graduate</option>
                                                        <option value="task_level_masters">Masters</option>
                                                        <option value="task_level_php">PHD</option>
                                                    </select>
                                                    <label for="floatingSelectGrid">Complexity associated with work</label>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" name="order_page" placeholder="Page Count" value="1">
                                                            <label>Page Count</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" name="order_word" placeholder="Word Count expected" value="350">
                                                            <label>Word Count expected</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select" name="order_cite">
                                                        <option value="task_cite_APA">APA</option>
                                                        <option value="task_cite_Chicago">Chicago</option>
                                                        <option value="task_cite_Harvard">Harvard</option>
                                                        <option value="task_cite_MLA">MLA</option>
                                                        <option value="task_cite_Turabian">Turabian</option>
                                                    </select>
                                                    <label for="floatingSelectGrid">Citation Style</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                             <!-- Date View -->
                                            <div class="mb-3 position-relative" id="datepicker2">
                                                <label class="form-label">Due Date <span class="badge bg-warning rounded-pill">Required</span></label>
                                                <input type="text" class="form-control" data-provide="datepicker" name="order_date" data-date-container="#datepicker2" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                            </div>
                                    
                                            <div class="form-floating">
                                                <textarea class="form-control" name="order_comment" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                                                <label for="floatingTextarea">Comments</label>
                                            </div>

                                            <br>

                                            <button type="button" class="btn btn-info btn-block" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Upload Attachments</button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- end row -->
                            </div> <!-- end card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <button type="submit" class="btn btn-success btn-block">Create Assignment</button>
                                </div>
                            </div>
                        </form>                     
                        
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->
            
        </div> <!-- container -->

    </div> <!-- content -->


    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid" id="uploader_view">
                        <div class="col-12">
                            <form action="<?php echo base_url('buyer/'.$user_url.'/orders_make_attachment'); ?>" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                    data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>

                                <div class="dz-message needsclick">
                                    <i class="h1 text-muted dripicons-cloud-upload"></i>
                                    <h3>Upload your new profile picture.</h3>
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
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="#" class="btn btn-link btn-lg text-success" data-dz-remove>
                                                    <i class="dripicons-checkmark "></i>
                                                </a>
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
