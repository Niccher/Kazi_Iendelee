<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Sellers</li>
                    </ol>
                </div>
                <h4 class="page-title">Sellers</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="row mb-2">
            <div class="col-sm-12 float-left">
                <div class="text-sm-end">
                    <a href="<?php echo base_url('admin/users');?>">
                        <button type="button" class="btn btn-light mb-2 me-1">All</button>
                    </a>
                    <a href="<?php echo base_url('users/buyers');?>">
                        <button type="button" class="btn btn-light mb-2 me-1">Buyers</button>
                    </a>
                    <a href="<?php echo base_url('users/sellers');?>">
                        <button type="button" class="btn btn-success mb-2">Sellers</button>
                    </a> 
                </div>
            </div><!-- end col-->
        </div>

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

    if ($user['Privilege'] == $this->mod_crypt->Enc_String('cat_Reseller')) {
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
                    <a href="javascript:void(0);" class="action-icon"> 
                        <i class="mdi mdi-square-edit-outline"></i>
                    </a>
                    <a href="javascript:void(0);" class="action-icon">
                        <i class="mdi mdi-delete"></i>
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
    
</div> <!-- container -->