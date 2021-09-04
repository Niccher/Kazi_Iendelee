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
                                        <button type="button" class="btn btn-success mb-2 me-1">Back to Blogs</button>
                                    </a> 
                                    <a href="<?php echo base_url('admin/blogs/create');?>">
                                        <button type="button" class="btn btn-info mb-2 me-1">Create</button>
                                    </a> 
                                </div>
                            </div>
                        </div><!-- end col-->
                    </div>
                </div>
                <h4 class="page-title">Blogs</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                	<?php
                		//print_r($blog);
                		$dat = date('Y F d H:i:s A',$blog->Blog_Time);
	                    $body = $this->mod_crypt->Dec_String($blog->Blog_Body);
	                    $head = $this->mod_crypt->Dec_String($blog->Blog_Title);
	                    $owner = ($blog->Blog_Author);
	                    $age = timespan($blog->Blog_Time, time(), 3);
	                    $url = urlencode($this->mod_crypt->Enc_String($blog->Blog_Id));
                		$blod_data = '
                		<div class="border border-light rounded p-2 mb-3 ">
                            <div class="d-flex">
                                <img class="me-2 rounded-circle" src="'.base_url("assets/images/waves.png").'" height="32">
                                <div>
                                    <h5 class="m-0">'.ucfirst($owner).'</h5>
                                    <p class="text-muted"><small>published '.$age.' ago</small></p>
                                </div>
                            </div>
                            <div class="font-16 text-start fst-italic text-muted">
                                <i class="mdi mdi-format-quote-open font-20"></i> '.$body.'
                            </div>

                        </div>
                		';
                		echo $blod_data;
                	?>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row --> 
    
</div> <!-- container -->
