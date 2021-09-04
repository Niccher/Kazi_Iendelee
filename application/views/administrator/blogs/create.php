<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <div class="row mb-2">
                        <div class="col-xl-12">
                            <div class="text-xl-end mt-xl-0 mt-2">
                                <div class="text-sm-end">
                                    <a href="<?php echo base_url('admin/blogs');?>">
                                        <button type="button" class="btn btn-success mb-2 me-1">All Blogs</button>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end col-->
                    </div>
                </div>
                <h4 class="page-title">Create a blog post</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?php echo base_url('admin/blogs/make'); ?>" method='POST' enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <label for="projectname" class="form-label">Name <span class="badge bg-warning rounded-pill">Required</span></label>
                                    <input type="text" name="blog_name" class="form-control" placeholder="Blog title" required="">
                                </div>

                            </div> <!-- end col-->

                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <label for="projectname" class="form-label">Description <span class="badge bg-warning rounded-pill">Required</span></label>
                                    <textarea id="summernote" name="blog_desc" required=""></textarea>
                                </div>

                            </div> <!-- end col-->
                            
                        </div>
                        <!-- end row -->
                    </div> <!-- end card-body -->
                    <div class="card-footer">
                        <div class="row">
                            <button type="submit" class="btn btn-success btn-block">Create Blog</button>
                        </div>
                    </div>
                </form>                     
                
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
    
</div> <!-- container -->