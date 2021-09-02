
<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <div class="row mb-2">
                        <div class="col-sm-12 float-left">
                            <div class="text-sm-end">
                                <a href="<?php echo base_url('admin/users');?>">
                                    <button type="button" class="btn btn-light mb-2 me-1">All</button>
                                </a>
                                <a href="<?php echo base_url('users/buyers');?>">
                                    <button type="button" class="btn btn-success mb-2 me-1">Buyers</button>
                                </a>
                                <a href="<?php echo base_url('users/sellers');?>">
                                    <button type="button" class="btn btn-light mb-2">Writers</button>
                                </a> 
                            </div>
                        </div><!-- end col-->
                    </div>
                </div>
                <h4 class="page-title">Buyers</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
    	
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Create Date</th>
                                    <th>Status</th>
                                    <th style="width: 75px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php 
        foreach ($user_list as $user) {
    if ($user['Status'] == '' || $user['Status'] == '00' ) {
        $active = '<span class="badge badge-danger-lighten">Not Activated</span>';
    }else{
        $active = '<span class="badge badge-success-lighten">Activated</span>';
    }

    if ($user['Privilege'] == $this->mod_crypt->Enc_String('cat_Buyer')) {
        echo '
            <tr>
                <td class="table-user">
                <img src="'.base_url('uploads/profiles/'.$user['Avatar']).'" alt="'.$this->mod_crypt->Dec_String($user['Name']).'" class="me-2 rounded-circle">
                    <a href="javascript:void(0);" class="text-body fw-semibold">'.$this->mod_crypt->Dec_String($user['Name']).'</a>
                </td>
                <td>
                    '.($user['Phone']).'
                </td>
                <td>
                    '.$this->mod_crypt->Dec_String($user['Email']).'
                </td>
                <td>
                    '.date('Y M d',$user['Timestamp']).'
                </td>
                <td>
                    '.($active).'
                </td>

                <td>
                    <a href="javascript:void(0);" class="action-icon pop_user" id="'.urlencode($this->mod_crypt->Enc_String($user['Person_ID'])).'"> 
                        <i class="mdi mdi-eye"></i>
                    </a>
                    <a href="javascript:void(0);" class="action-icon pop_chat" id="'.urlencode($this->mod_crypt->Enc_String($user['Person_ID'])).'"> 
                        <i class="mdi mdi-comment-plus"></i>
                    </a>
                </td>
            </tr>
         ';
    }

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

    <div id="modal_profile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">User Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile_info"></div>
                        </div>
                        <!-- end card-body -->
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>

    <div id="modal_chat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Send Message</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body p-0">
                            <!-- comment box -->
                            <div class="border rounded">
                                <form action="#" class="comment-area-box">
                                    <textarea rows="4" class="form-control border-0 resize-none" id="modal_msg_box" placeholder="Write something...."></textarea>
                                    <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                        <div>
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button> 
                                        </div>
                                        <button type="button" class="btn btn-sm btn-success modal_send_msg"><i class="uil uil-message me-1"></i>Send</button>
                                    </div>
                                </form>
                            </div> <!-- end .border-->
                            <!-- end comment box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- container -->