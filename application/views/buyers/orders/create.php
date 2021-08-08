
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

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">Name</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="Enter project name">
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-xl-12">
                                                <div class="mb-3">
                                                    <div id="snow-editor" style="height: 300px;"></div>
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-lg-6">
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                                            <option selected="">Level of work</option>
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
                                                                <input type="text" class="form-control" placeholder="Page Count" value="1">
                                                                <label for="floatingInputGrid">Page Count</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="col-md">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" placeholder="Word Count expected" value="1">
                                                                <label for="floatingInputGrid">Word Count expected</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" aria-label="Floating label select example">
                                                            <option selected="">Formating style</option>
                                                            <option value="task_level_hs">APA</option>
                                                            <option value="task_level_col">Harvard</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Citation Style</label>
                                                    </div>
                                                </div>
                                        
                                                <h5 class="mb-3 mt-4">Comments on Work</h5>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                                                    <label for="floatingTextarea">Comments</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="mb-3 mt-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0">Attachments</label>
                                                    <p class="text-muted font-14">Drag all files to be used for this asssignment</p>

                                                    <form action="#" method="post" class="dropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                        data-upload-preview-template="#uploadPreviewTemplate">
                                                        <div class="fallback">
                                                            <input name="file" type="file" />
                                                        </div>

                                                        <div class="dz-message needsclick">
                                                            <i class="h3 text-muted dripicons-cloud-upload"></i>
                                                            <h4>Drop files here or click to upload.</h4>
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
                                                                        <img data-dz-thumbnail src="apps-projects-add.html#" class="avatar-sm rounded bg-light" alt="">
                                                                    </div>
                                                                    <div class="col ps-0">
                                                                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                                        <p class="mb-0" data-dz-size></p>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <!-- Button -->
                                                                        <a href="apps-projects-add.html" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                            <i class="dripicons-cross"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end file preview template -->
                                                </div>

                                                <!-- Date View -->
                                                <div class="mb-3 position-relative" id="datepicker2">
                                                    <label class="form-label">Due Date</label>
                                                    <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker2" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                                </div>
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                    </div> <!-- end card-body -->
                                    <div class="card-footer">
                                        <div class="row">
                                            <button type="submit" class="btn btn-info btn-block">Create Assignment</button>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->