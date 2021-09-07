
<body class="loading" data-layout-config='{"darkMode":false}'>

    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark navbar-fixed-top nav_area" id="nav_area">
        <div class="container">

            <!-- logo -->
            <a href="" class="navbar-brand me-lg-5">
                <img src="assets/images/loo.png" alt="Logo" class="logo-dark" height="18" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- menus -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <!-- left menu -->
                <ul class="navbar-nav me-auto align-items-center">
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#faqs">FAQS</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>

                <!-- right menu -->
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-0">
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login_modal">
                            <i class="uil-user-check me-2"></i> Login Now
                        </button>

                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#signup_modal">
                            <i class="uil-user-plus me-2"></i> Sign Up Now
                        </button>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- START HERO -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="mt-md-4">
                        <h2 class="text-white fw-normal mb-4 mt-3 hero-title">
                            Kazi Iendelee
                        </h2>

                        <p class="mb-4 font-16 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p>

                        <a href="<?php echo base_url('auth/login');?>" target="_blank" class="btn btn-success">Create an Order <i
                                class="mdi mdi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">
                                    <div class="carousel-caption">
                                        <h3>First Slide Image</h3>
                                        <p>Sample picture about quality of work</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://picsum.photos/200" alt="Second slide">
                                    <div class="carousel-caption">
                                        <h3>Second Slide Image</h3>
                                        <p>LA is always so much fun!</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://picsum.photos/200" alt="Third slide">
                                    <div class="carousel-caption">
                                        <h3>Third Wave</h3>
                                        <p>LA is always so much fun!</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                                            </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO -->

    <!-- START SERVICES -->
    <section class="py-5" id="services">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-infinity"></i></h1>
                        <h3>Kazi Iendelee <span class="text-primary">services we offer</span></h3>
                        <p class="text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-desktop text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Exams</h4>
                        <p class="text-muted mt-2 mb-0">Et harum quidem rerum as expedita distinctio nam libero tempore
                            cum soluta nobis est cumque quo.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-vector-square text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Multiple Questions</h4>
                        <p class="text-muted mt-2 mb-0">Temporibus autem quibusdam et aut officiis necessitatibus saepe
                            eveniet ut sit et recusandae.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-presentation text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Quizlets Questions</h4>
                        <p class="text-muted mt-2 mb-0">Nam libero tempore, cum soluta a est eligendi minus id quod
                            maxime placeate facere assumenda est.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-apps text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Essay Applications</h4>
                        <p class="text-muted mt-2 mb-0">Et harum quidem rerum as expedita distinctio nam libero tempore
                            cum soluta nobis est cumque quo.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-shopping-cart-alt text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Research Work</h4>
                        <p class="text-muted mt-2 mb-0">Temporibus autem quibusdam et aut officiis necessitatibus saepe
                            eveniet ut sit et recusandae.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-grids text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Mathematicals Problems</h4>
                        <p class="text-muted mt-2 mb-0">Nam libero tempore, cum soluta a est eligendi minus id quod
                            maxime placeate facere assumenda est.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END SERVICES -->

    <!-- START FEATURES 2 -->
    <section class="py-5" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-heart-multiple-outline"></i></h1>
                        <h3>Features you'll <span class="text-danger">love about Kazi Iendelee</span></h3>
                        <p class="text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-2 py-5 align-items-center">
                <div class="col-lg-6">
                    <h3 class="fw-normal">Simply beautiful design</h3>
                    <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <div class="mt-4">
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-success"></i> Pay with card</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-success"></i> Quality work</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-success"></i> Fast Delivery</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-success"></i> Access to realtime support</p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <h3 class="fw-normal">Inbuilt applications and pages</h3>
                    <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <div class="mt-4">
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Use on mobile phone</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Email notfications</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Profile, pricing, invoice</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Login, signup, forget password</p>
                    </div>
                
                </div>
            </div>

        </div>
    </section>
    <!-- END FEATURES 2 -->

    <!-- START FAQ -->
    <section class="py-5" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-frequently-asked-questions"></i></h1>
                        <h3>Frequently Asked <span class="text-primary">Questions</span></h3>
                        <p class="text-muted mt-2">Here are some of the basic types of questions for our customers. For more 
                            <br>information please contact us.</p>

                        <button type="button" class="btn btn-success btn-sm mt-2"><i class="mdi mdi-email-outline me-1"></i> Email us your question</button>
                        <button type="button" class="btn btn-info btn-sm mt-2 ms-1"><i class="mdi mdi-twitter me-1"></i> Send us a tweet</button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-5 offset-lg-1">
                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">Can I use this get started now?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>

                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">How do I get help with the services?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">Use our dedicated support email (support@kaziiendelee.com) to send your issues or feedback. We are here to help anytime.</p>
                    </div>

                </div>
                <!--/col-lg-5 -->

                <div class="col-lg-5">
                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">Can this for my masters?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>

                    <!-- Question/Answer -->
                    <div>
                        <div class="faq-question-q-box">Q.</div>
                        <h4 class="faq-question text-body">Will you regularly give updates?</h4>
                        <p class="faq-answer mb-4 pb-1 text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>

                </div>
                <!--/col-lg-5-->
            </div>
            <!-- end row -->

        </div> <!-- end container-->
    </section>
    <!-- END FAQ -->

    
    <!-- START CONTACT -->
    <section class="py-5 bg-light-lighten border-top border-bottom border-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>Get In <span class="text-primary">Touch</span></h3>
                        <p class="text-muted mt-2">Please fill out the following form and we will get back to you shortly. For more 
                            <br>information please contact us.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-md-4">
                    <p class="text-muted"><span class="fw-bold">Customer Support:</span><br> <span class="d-block mt-1">+254 ************</span></p>
                    <p class="text-muted mt-4"><span class="fw-bold">Email Address:</span><br> <span class="d-block mt-1">info@kazi.com</span></p>
                    <p class="text-muted mt-4"><span class="fw-bold">Office Address:</span><br> <span class="d-block mt-1">Nairobi Kenya</span></p>
                    <p class="text-muted mt-4"><span class="fw-bold">Office Time:</span><br> <span class="d-block mt-1">9:00AM To 6:00PM</span></p>
                </div>

                <div class="col-md-8">
                    <form>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label for="fullname" class="form-label">Your Name</label>
                                    <input class="form-control form-control-light" type="text" id="fullname" placeholder="Name...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label for="emailaddress" class="form-label">Your Email</label>
                                    <input class="form-control form-control-light" type="email" required="" id="emailaddress" placeholder="Enter you email...">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label for="subject" class="form-label">Your Subject</label>
                                    <input class="form-control form-control-light" type="text" id="subject" placeholder="Enter subject...">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label for="comments" class="form-label">Message</label>
                                    <textarea id="comments" rows="4" class="form-control form-control-light" placeholder="Type your message here..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-12 text-end">
                                <button class="btn btn-primary">Send a Message <i
                                    class="mdi mdi-telegram ms-1"></i> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <!-- Signup modal-->

    <div id="signup_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    
                    <div class="col-xxl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
                                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                                </div>

                                <?php 
                                echo validation_errors(); 
                                echo form_open('auth/register'); ?>

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Username</label>
                                        <input class="form-control" type="text" id="fullname" placeholder="Enter your username" required name="rg_as_fn">
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required placeholder="Enter your email" name="rg_as_eml">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter your password" name="rg_as_pwd">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Proceed as</label>
                                        <div class="row"></div>
                                        <div class="input-group input-group-merge">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="cat_usertype" value="cat_Reseller">
                                                <label class="form-check-label">Writer.</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="cat_usertype" value="cat_Buyer">
                                                <label class="form-check-label">Buyer.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup" checked="" disabled="">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a href="<?php echo base_url('auth/register'); ?>" class="text-muted">Terms and Conditions</a></label>
                                        </div>
                                    </div>

                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary" type="submit"> Sign Up </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account? <a href="<?php echo base_url('auth/login'); ?>" class="text-muted ms-1"><b>Log In</b></a></p>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="login_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-xxl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <?php  
                                echo validation_errors(); 
                                echo form_open('auth/login'); ?>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" name="lg_as_eml">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter your password" name="lg_as_pwd">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked disabled="">
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Forgot password ? <a href="<?php echo base_url('auth/forgot'); ?>" class="text-muted ms-1"><b>Forgot Password</b></a></p>
                            </div> <!-- end col -->
                            <div class="col-12 text-center">
                                <p class="text-muted">Don't have an account ? <a href="<?php echo base_url('auth/register'); ?>" class="text-muted ms-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- START FOOTER -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/images/log.png" alt="Logo" class="logo-dark" height="18" />
                    <p class="text-muted mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <ul class="social-list list-inline mt-3">
                        <li class="list-inline-item text-center">
                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item text-center">
                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                        </li>
                        <li class="list-inline-item text-center">
                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                        </li>
                        <li class="list-inline-item text-center">
                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                        </li>
                    </ul>

                </div>

                <div class="col-lg-2 mt-3 mt-lg-0">
                    <h5 class="text-light">Company</h5>

                    <ul class="list-unstyled ps-0 mb-0 mt-3">
                        <li class="mt-2"><a href="javascript: void(0);" class="text-muted">About Us</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Blog</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Affiliate Program</a></li>
                    </ul>

                </div>

                <div class="col-lg-2 mt-3 mt-lg-0">
                    <h5 class="text-light">Apps</h5>

                    <ul class="list-unstyled ps-0 mb-0 mt-3">
                        <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Android</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-muted">iOS</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 mt-3 mt-lg-0">
                    <h5 class="text-light">Discover</h5>

                    <ul class="list-unstyled ps-0 mb-0 mt-3">
                        <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Help Center</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Our Products</a></li>
                        <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Privacy</a></li>
                    </ul>
                </div>
            </div>

