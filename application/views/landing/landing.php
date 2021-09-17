<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Kazi Iendelee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Kazi iendelee description here." />
    <meta content="Work Assignments" name="author" />

    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

    <link href="<?php echo base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" id="light-style" />

</head>

    <body class="loading" data-layout-config='{"darkMode":false}'>

        <!-- NAVBAR START -->
        <nav class="navbar navbar-expand-md py-md-3 navbar-dark fixed-top bg-secondary" id="nav_area">
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
                            <a class="nav-link active" href="">Home</a>
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

        <section class="bg-secondary-lighten" style="height: 10px;"></section>
        <!-- START HERO -->
        <section class="bg-secondary-lighten" style="height: 450px; margin-top: 20px;">
            <div class="">
                <div class="row align-items-center">
                    <div class="col-md-10 offset-md-1">
                        <div class="">
                            <div class="row">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="https://source.unsplash.com/random/100x80?sig=1" class="d-block w-100" alt="..." style="height: 450px;">
                                            <div class="carousel-caption">
                                                <div class="container">
                                                    <div class="mt-md-4">
                                                        <h1 class="text-primary fw-bold fw-normal mb-4 mt-3 hero-title">
                                                            Kazi Iendelee
                                                        </h1>

                                                        <p class="mb-4 font-16 text-danger-50">
                                                            Welcome to Kazi Iendelee, here we help people get their work done, we are a team of highly motivated writers who will give you back high quality work.
                                                        </p>

                                                        <a href="<?php echo base_url('auth/login');?>" data-bs-toggle="modal" data-bs-target="#create_modal" class="btn btn-success">Create an Order <i
                                                                class="mdi mdi-arrow-right ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://source.unsplash.com/random/100x80?sig=2" class="d-block w-100" alt="..." style="height: 450px;">
                                            <div class="carousel-caption">
                                                <div class="container">
                                                    <div class="mt-md-4">
                                                        <h1 class="text-primary fw-bold fw-normal mb-4 mt-3 hero-title">
                                                            Kazi Iendelee
                                                        </h1>

                                                        <p class="mb-4 font-16 text-danger-50">
                                                            Welcome to Kazi Iendelee, here we help people get their work done, we are a team of highly motivated writers who will give you back high quality work.
                                                        </p>

                                                        <a href="<?php echo base_url('auth/login');?>" data-bs-toggle="modal" data-bs-target="#create_modal" class="btn btn-success">Create an Order <i
                                                                class="mdi mdi-arrow-right ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://source.unsplash.com/random/100x80?sig=3" class="d-block w-100" alt="..." style="height: 450px;">
                                            <div class="carousel-caption">
                                                <div class="container">
                                                    <div class="mt-md-4">
                                                        <h1 class="text-primary fw-bold fw-normal mb-4 mt-3 hero-title">
                                                            Kazi Iendelee
                                                        </h1>

                                                        <p class="mb-4 font-16 text-danger-50">
                                                            Welcome to Kazi Iendelee, here we help people get their work done, we are a team of highly motivated writers who will give you back high quality work.
                                                        </p>

                                                        <a href="<?php echo base_url('auth/login');?>" data-bs-toggle="modal" data-bs-target="#create_modal" class="btn btn-success">Create an Order <i
                                                                class="mdi mdi-arrow-right ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HERO -->

        <!-- ======= Features Section ======= -->
        <section class="bg-light-lighten" id="features" class="features">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0"><i class="mdi mdi-alpha-i-box text-danger"></i></h1>
                            <h3>Kazi Iendelee <span class="text-primary">How to get started</span></h3>
                            <p class="text-dark-50 mt-2">
                                Kazi Iendelee has a model that is implemented into the logic and therefore everybody has to abide by this, these steps are as listed below.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item" data-aos="fade-up">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                    <h4>Step One:</h4>
                                    <p>Create an order and fill all the neccessary data within the input fields. ubmit the order request</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                    <h4>Step Two:</h4>
                                    <p>The administrator checks the order and makes sure it is feasible.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                    <h4>Step Three:</h4>
                                    <p>The client pays for the order, after it has been verrified by the admin.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                    <h4>Step Four:</h4>
                                    <p>Once payment has been made, the work is worked upon and high quality work submitted.</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <figure>
                                    <img src="<?php echo base_url('assets/land/img/features-1.png'); ?>" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <figure>
                                    <img src="<?php echo base_url('assets/land/img/features-2.png'); ?>" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <figure>
                                    <img src="<?php echo base_url('assets/land/img/features-3.png'); ?>" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <figure>
                                    <img src="<?php echo base_url('assets/land/img/features-4.png'); ?>" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->

        <!-- START SERVICES -->
        <section class="py-5 bg-secondary-lighten" id="services">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0"><i class="mdi mdi-infinity"></i></h1>
                            <h3>Kazi Iendelee <span class="text-primary">services we offer</span></h3>
                            <p class="text-muted mt-2">
                                Kazi Iendelee has a broad services that we render to our clients and customers.<br>
                                We have writers who are competentent in eassys and writing reports. Also we have a team that can work in mathematical calculations such as statistics, calculus, engineering and many more others.
                            </p>
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
                            <p class="text-muted mt-2 mb-0">We are commited to making sure that the your eams are handled as you want. for this to work, it has to be sent earlier in advance so that the team is well versed with the classwork.
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
                            <p class="text-muted mt-2 mb-0">This includes questions that have answers wchich the student has to select the right ones from the wrong ones. Our team has vast skills in wide range of subjects, but this has to be made early in advance.
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
                            <p class="text-muted mt-2 mb-0">Quizzes, flashcards and quizzlets are welcome. our team has many hours worth of experince in this category.
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
                            <p class="text-muted mt-2 mb-0">This is the most common form of work that this platform receives. we handle essays based on research, summarizing, disertation paper among others.
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
                            <p class="text-muted mt-2 mb-0">Any research work that you have we will work on it. We also do data analysis on the data we used on the research
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
                            <p class="text-muted mt-2 mb-0">The complex assignemnts that require manipulations of numbers such as statistics, calculus, engineering and others are welcome.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SERVICES -->

        <!-- START FEATURES 2 -->
        <section class="py-5 bg-light-lighten" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0"><i class="mdi mdi-heart-multiple-outline"></i></h1>
                            <h3>Features you'll <span class="text-danger">love about Kazi Iendelee</span></h3>
                            <p class="text-dark-50 mt-2">
                                Here at Kazi Iendelee we have a high stardard for our writers and therefore we have a guarantee that your work will be of high quality. the skills that we have acquired over the years have made us very straight to the point and therefore your work will have the major points outlined.
                                Because of our services are paid, therefore if a client feels that the work was not done as he/she wanted, a free revision is initialized.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 py-5 align-items-center">
                    <div class="col-lg-6">
                        <h3 class="fw-normal">Payment Model</h3>
                        <p class="text-dark-50 mt-3">
                            The website has several ways that makes it easy for the clients and customers to make payments.
                        </p>
                        <div class="mt-4">
                            <p class="text-dark-50">
                                <i class="mdi mdi-circle-medium text-success"></i> Pay with debit cards
                            </p>
                            <p class="text-dark-50">
                                <i class="mdi mdi-circle-medium text-success"></i> Pay with credit card
                            </p>
                            <p class="text-dark-50">
                                <i class="mdi mdi-circle-medium text-success"></i> Pay with PayPal
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <h3 class="fw-normal">Learn more about Us.</h3>
                        <p class="text-dark-50 mt-3">
                            This is the platform that is dedicate to working with you. for the little time we have been there we have designed and worked upon several hundred orders.
                        </p>
                        <div class="mt-4">
                            <p class="text-dark-50">
                                <i class="mdi mdi-circle-medium text-success"></i> We ensure that the online assignment is plagirism free.
                            </p>
                            <p class="text-dark-50">
                                <i class="mdi mdi-circle-medium text-success"></i> We handle both theoretical and technical work.
                            </p>
                            <p class="text-dark-50">
                                <i class="mdi mdi-circle-medium text-success"></i> Surveys and research requiring physical work is also welcome to this platform.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END FEATURES 2 -->

        <!-- START FAQ -->
        <section class="py-5 bg-secondary-lighten" id="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0"><i class="mdi mdi-frequently-asked-questions"></i></h1>
                            <h3>Frequently Asked <span class="text-primary">Questions</span></h3>
                            <p class="text-muted mt-2">Here are some of the basic types of questions for our customers. For more 
                                <br>information please contact us.</p>

                            <button type="button" class="btn btn-success btn-sm mt-2"><i class="mdi mdi-email-outline me-1"></i> Email us your question</button>
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
                                No requirement is need to make an order, jist have a valid email address so that we may be able to commumicate forth with you.
                            </p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">How do I get help with the services?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">I f you are not registered to us, then press the button with "Create ana order now", then the website will lead you on the procedure to getting started.</p>
                        </div>

                    </div>
                    <!--/col-lg-5 -->

                    <div class="col-lg-5">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">Can this for my masters?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">
                                The work we work on is first analyzed to see if the team can work on it. if the work is allowed to proceed then any level such as masters and PHP can be handled.
                            </p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">Will you regularly give updates?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">
                                The website have features that will allow you be informed on what state is your work.
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

        <div id="create_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-xxl-12 col-lg-12">

                            <div class="card">
                                <form action="<?php echo base_url('buyer/new/orders/create'); ?>" method='POST' enctype="multipart/form-data">
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

                                            <div class="col-xl-12">
                                                <div class="mb-3">
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
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-xl-12">
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="col-md">
                                                                <div class="form-floating">
                                                                    <input type="number" class="form-control" name="order_price" placeholder="Estimated Price" value="1" required="">
                                                                    <label>Estimated Price <span class="badge bg-warning rounded-pill">Required</span> </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
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
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->


                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <select class="form-select" name="order_level">
                                                                <option value="task_level_high_school">High School</option>
                                                                <option value="task_level_college">College</option>
                                                                <option value="task_level_undergraduate">Undergraduate</option>
                                                                <option value="task_level_postgraduate">Post Graduate</option>
                                                                <option value="task_level_masters">Masters</option>
                                                                <option value="task_level_php">PHD</option>
                                                            </select>
                                                            <label for="floatingSelectGrid">Complexity associated with work</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                     <!-- Date View -->
                                                    <div class="mb-3 position-relative" id="datepicker2">
                                                        <label class="form-label">Due Date <span class="badge bg-warning rounded-pill">Required</span></label>
                                                        <input type="text" class="form-control" data-provide="datepicker" name="order_date" data-date-container="#datepicker2" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                                    </div>
                                            
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!-- end row -->
                                        <div class="col-xl-12">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-md-12 offset-md-0">
                                                        <div class="form-floating">
                                                            <textarea class="form-control" name="order_comment" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                                                            <label for="floatingTextarea">Comments</label>
                                                        </div>

                                                        <br>

                                                        <button type="button" class="btn btn-info btn-block" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">
                                                            Upload Attachments
                                                        </button>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end card-body -->
                                    <div class="card-footer">
                                        <div class="row">
                                            <button type="submit" class="btn btn-success btn-block">Create Assignment</button>
                                        </div>
                                    </div>
                                </form>                      
                            </div> <!-- end card-->

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
                        <p class="text-muted mt-4">
                            Kazi Mingi, The best platform to get your work done fast and high quality work.
                        </p>

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
            </div>
        </footer>

        <!-- bundle -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="<?php echo base_url('assets/js/vendor.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/app.min.js');?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

            <script type="text/javascript">
                document.addEventListener("DOMContentLoaded", function(){
                    window.addEventListener('scroll', function() {
                        
                    });
                }); 
            </script>
    </body>
</html>