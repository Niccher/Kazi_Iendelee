
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"> home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
    <?php
    $user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
    $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
    ?>

    <div class="row">
        <div class="col-xl-4 col-lg-5">
            <div class="card text-center">
                <div class="card-body">
                    <img src="<?php echo base_url('uploads/profiles/'.$user_info->Avatar);?>" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image">

                    <h4 class="mb-0 mt-2"><?php echo $this->mod_crypt->Dec_String($user_info->Name);?></h4>
                    <p class="text-muted font-14">Buyer on Platform</p>

                    <div class="text-start mt-3">
                        <h4 class="font-13 text-uppercase">About Me :</h4>
                        <p class="text-muted font-13 mb-3">
                            <?php echo $this->mod_crypt->Dec_String($user_info->Bio);?>
                        </p>
                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> 
                            <span class="ms-2"><?php echo $this->mod_crypt->Dec_String($user_info->First_Name).' '.$this->mod_crypt->Dec_String($user_info->Last_Name);?></span>
                        </p>

                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong>
                            <span class="ms-2"> <?php echo ($user_info->Phone);?></span>
                        </p>

                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> 
                            <span class="ms-2 "><?php echo $this->mod_crypt->Dec_String($user_info->Email);?></span>
                        </p>

                        <p class="text-muted mb-2 font-13"><strong>Joined :</strong> 
                            <span class="ms-2 "><?php echo date('Y F d, H:i:s A', $user_info->Timestamp);?></span>
                        </p>
                    </div>

                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                    class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                    class="mdi mdi-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
                                    class="mdi mdi-instagram"></i></a>
                        </li>
                    </ul>
                </div> <!-- end card-body -->
            </div> <!-- end card -->

        </div> <!-- end col-->

        <div class="col-xl-8 col-lg-7">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                        <li class="nav-item">
                            <a href="#timeline" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                                Timeline
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane show active" id="timeline">

                            <!-- comment box -->
                            <div class="border rounded mt-2 mb-3">

                                <form action="<?php echo base_url('writer/'.$user_url.'/add_post'); ?>" method='POST' class="comment-area-box">
                                    <textarea rows="3" class="form-control border-0 resize-none" placeholder="Write something...." name="new_post"></textarea>
                                    <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn btn-sm btn-dark waves-effect">Post</button>
                                    </div>
                                </form>
                            </div> <!-- end .border-->
                            <!-- end comment box -->

            <?php 
                foreach($user_posts as $post){
                    $dat = date('Y F d H:i:s A',$post['Posted']);
                    $body = $this->mod_crypt->Dec_String($post['Body']);
                    $published = ($post['Published']);
                    $age = timespan($post['Posted'], time(), 3);
                    if($published == '00'){
                        echo '
                            <div class="border border-light rounded p-2 mb-3 ">
                                <div class="d-flex">
                                    <img class="me-2 rounded-circle" src="../../uploads/profiles/'.$user_info->Avatar.'"
                                        alt="'.ucfirst($user_url).'" height="32">
                                    <div>
                                        <h5 class="m-0">'.ucfirst($user_url).'</h5>
                                        <p class="text-muted"><small>'.$age.' ago</small></p>
                                    </div>
                                </div>
                                <div class="font-16 text-center fst-italic text-warning">
                                    <i class="mdi mdi-format-quote-open font-20"></i> '.$body.'
                                </div>

                            </div>
                        ';
                    }
                    if($published == '11'){
                        echo '
                            <div class="border border-light rounded p-2 mb-3 ">
                                <div class="d-flex">
                                    <img class="me-2 rounded-circle" src="../../uploads/profiles/'.$user_info->Avatar.'"
                                        alt="'.ucfirst($user_url).'" height="32">
                                    <div>
                                        <h5 class="m-0">'.ucfirst($user_url).'</h5>
                                        <p class="text-muted"><small>'.$age.' ago</small></p>
                                    </div>
                                </div>
                                <div class="font-16 text-center fst-italic text-success">
                                    <i class="mdi mdi-format-quote-open font-20"></i> '.$body.'
                                </div>

                            </div>
                        ';
                    }

                }
                
            ?>

                        </div>
                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <?php 
                                
                                echo validation_errors(); 
                                echo form_open('writer/'.$user_url.'/profile_make'); ?>
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="ed_name_first" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="ed_name_last" placeholder="Enter last name">
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" name="ed_phone" placeholder="Enter Phone Number">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="userbio" class="form-label">Bio</label>
                                            <textarea class="form-control" name="ed_desc_bio" rows="4" placeholder="Write something..."></textarea>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Current Email Address</label>
                                            <input type="email" class="form-control" name="ed_eml_old" placeholder="The Current Email Address">
                                            <span class="form-text text-muted">
                                                <?php echo $label_eml;?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">New Email Address</label>
                                            <input type="email" class="form-control" name="ed_eml_new" placeholder="Enter New Email Address">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Current Password</label>
                                            <input type="text" class="form-control" name="ed_pwd_old" placeholder="Enter current password">
                                            <span class="form-text text-muted">
                                                <?php echo $label_pwd;?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">New Password</label>
                                            <input type="text" class="form-control" name="ed_pwd_new" placeholder="Enter new password">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->


                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Social</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="social-fb" class="form-label">Facebook</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                                <input type="text" class="form-control" name="ed_social_fb" placeholder="Facebook Profile e.g https://facebook.com/[username]">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="social-tw" class="form-label">Twitter</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                                <input type="text" class="form-control" name="ed_social_tw" placeholder="Twitter Profile e.g https://twitter.com/[username]">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="social-insta" class="form-label">Instagram</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                                <input type="text" class="form-control" name="ed_social_ig" placeholder="Instagram Profile e.g https://instagram.com/[username]">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                                
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success mt-2">
                                        <i class="mdi mdi-content-save"></i> Save
                                    </button>
                                </div>
                            </form>

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="uil-user-square"></i> Profile Picture</h5>
                            <!-- File Upload -->
                                <form action="<?php echo base_url('writer/'.$user_url.'/profile_image'); ?>" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
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
                                                    <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                        <i class="dripicons-cross"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end file preview template -->
                        </div>
                        <!-- end settings content-->

                    </div> <!-- end tab-content -->
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row-->

</div>
<!-- container -->

</div>
<!-- content -->
