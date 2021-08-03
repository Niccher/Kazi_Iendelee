                    
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

                        <div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="<?php echo base_url('assets/images/users/avatar-1.jpg');?>" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                        <h4 class="mb-0 mt-2">User Name</h4>
                                        <p class="text-muted font-14">Buyer on Platform</p>

                                        <div class="text-start mt-3">
                                            <h4 class="font-13 text-uppercase">About Me :</h4>
                                            <p class="text-muted font-13 mb-3">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">Buyer Name</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2"> 254 456465465</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 ">user@email.domain</span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">Nigeria</span></p>
                                        </div>

                                        <ul class="social-list list-inline mt-3 mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                                        class="mdi mdi-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                                        class="mdi mdi-google"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                        class="mdi mdi-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
                                                        class="mdi mdi-github"></i></a>
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
                                                <a href="pages-profile-2.html#aboutme" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                    About
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="pages-profile-2.html#timeline" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                                                    Timeline
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="pages-profile-2.html#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                    Settings
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="aboutme">
    
                                                <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                                    Tasks and Orders</h5>

                                                <div class="timeline-alt pb-0">
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h5 class="mt-0 mb-1">Order 1</h5>
                                                            <p class="font-14">Order Name <span class="ms-2 font-12">Year: 2021 - 21</span></p>
                                                            <p class="text-muted mt-2 mb-0 pb-3">Order description here</p>
                                                        </div>
                                                    </div>
    
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-circle bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h5 class="mt-0 mb-1">Order 3</h5>
                                                            <p class="font-14">Order Name. <span class="ms-2 font-12">Year: 2021 - 21</span></p>
                                                            <p class="text-muted mt-2 mb-0 pb-3">Order Description Here</p>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end timeline -->        
    
                                            </div> <!-- end tab-pane -->
                                            <!-- end about me section content -->
    
                                            <div class="tab-pane show active" id="timeline">
    
                                                <!-- comment box -->
                                                <div class="border rounded mt-2 mb-3">
                                                    <form action="pages-profile-2.html#" class="comment-area-box">
                                                        <textarea rows="3" class="form-control border-0 resize-none" placeholder="Write something...."></textarea>
                                                        <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="pages-profile-2.html#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-account-circle"></i></a>
                                                                <a href="pages-profile-2.html#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-map-marker"></i></a>
                                                                <a href="pages-profile-2.html#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-camera"></i></a>
                                                                <a href="pages-profile-2.html#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-emoticon-outline"></i></a>
                                                            </div>
                                                            <button type="submit" class="btn btn-sm btn-dark waves-effect">Post</button>
                                                        </div>
                                                    </form>
                                                </div> <!-- end .border-->
                                                <!-- end comment box -->
    
    
                                                <!-- Story Box-->
                                                <div class="border border-light rounded p-2 mb-3">
                                                    <div class="d-flex">
                                                        <img class="me-2 rounded-circle" src="<?php echo base_url('assets/images/users/avatar-1.jpg');?>"
                                                            alt="Generic placeholder image" height="32">
                                                        <div>
                                                            <h5 class="m-0">My Name</h5>
                                                            <p class="text-muted"><small>about 1 hour ago</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="font-16 text-center fst-italic text-dark">
                                                        <i class="mdi mdi-format-quote-open font-20"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum..
                                                    </div>

                                                </div>
    
                                            </div>
                                            <!-- end timeline content-->
    
                                            <div class="tab-pane" id="settings">
                                                <form>
                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="firstname" class="form-label">First Name</label>
                                                                <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="lastname" class="form-label">Last Name</label>
                                                                <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="userbio" class="form-label">Bio</label>
                                                                <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="useremail" class="form-label">Email Address</label>
                                                                <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                                                <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="userpassword" class="form-label">Password</label>
                                                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                                <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Social</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="social-fb" class="form-label">Facebook</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                                                    <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="social-tw" class="form-label">Twitter</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                                                    <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="social-insta" class="form-label">Instagram</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                                                    <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="social-lin" class="form-label">Linkedin</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                                                    <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                    
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                    </div>
                                                </form>
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
