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

                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead class="table-light table-bordered">
                                <tr>
                                    <th>Blog ID</th>
                                    <th>Blog Name</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
            <?php 
                foreach($all_blogs as $post){
                    $dat = date('Y F d H:i:s A',$post['Blog_Time']);
                    $body = $this->mod_crypt->Dec_String($post['Blog_Body']);
                    $head = $this->mod_crypt->Dec_String($post['Blog_Title']);
                    $owner = ($post['Blog_Author']);
                    $age = timespan($post['Blog_Time'], time(), 3);
                    $url = urlencode($this->mod_crypt->Enc_String($post['Blog_Id']));
                    echo '
                    	<tr>
	                    	<td class="text-muted fw-bold">
	                    		<a href="'.base_url("admin/blogs/view/".$url).'">
	                    			'.$post['Blog_Id'].'
                    			</a>
                    		</td>
	                    	<td class="text-muted fw-bold">
	                    		<a href="'.base_url("admin/blogs/view/".$url).'">
	                    			'.character_limiter($head, 50).'
	                    		</a>
                    		</td>
	                    	<td class="text-muted">
	                    		<a href="'.base_url("admin/blogs/view/".$url).'">
	                    			'.$age.' ago
	                    		</a>
                    		</td>
                    	<tr>
                    ';
                }
                
            ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row --> 
    
</div> <!-- container -->
