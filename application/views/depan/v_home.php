<!DOCTYPE HTML>
<html>

<head>

    <?php $this->load->view('depan/_partials/head'); ?>
    <?php $this->load->view('depan/_partials/script'); ?>

</head>

<body>
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <btn id="btn-goto-top" onclick='window.scrollTo({top: 0, behavior: "smooth"});'><i class="icon-arrow-up"></i></btn>
            <btn id="btn-goto-bottom" onclick='window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" })'><i class="icon-arrow-down"></i></btn>

            <?php $this->load->view('depan/_partials/v_navbar'); ?>

            <div id="colorlib-main">

                <!-- INTRO -->
                <section id="colorlib-hero" class="js-fullheight" data-section="home">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url(<?= base_url('assets/images/img_bg_1.jpg'); ?>)">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                <div class="desc typewriter">
                                                    <h1 class="mb-0">Hi!</h1>
                                                    <div class="d-inline-block">
                                                        <h1 id="typewriter-text">I'm okta_alfian</h1>
                                                    </div>
                                                    <h2>A Fullstack Web Developer, currently living in Palembang, Indonesia.</h2>
                                                    <p>
                                                        <a class="btn btn-primary btn-learn" href="<?= base_url('assets/files/d1a9036144b02185f391dd04305c2630.pdf'); ?>" target="_blank" rel="noopener">Download CV <i class="icon-download4"></i></a>
                                                        <a class="btn btn-primary btn-learn2" href="https://wa.me/6287742798886" target="_blank" rel="noopener">Let's Talk! <i class="icon-speech-bubble"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- <li style="background-image: url(<?= base_url('assets/images/img_bg_2.jpg'); ?>);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h1>I am <br>a Designer</h1>
                                                    <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
                                                    <p><a class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </section>
                <!--/.intro -->


                <!-- ABOUT -->
                <section class="colorlib-about pt-2" data-section="about">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta heading-meta-block">About Me</span>
                                <h2 class="colorlib-heading animate-box">Introduction</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="col-md-12">
                                        <div class="about-desc">
                                            <p><strong>Hi I'm Okta Alfiansyah</strong> a fullstack web developer. I build application using PHP both <strong>native</strong> and using <strong>framework (CodeIgniter/Laravel)</strong>, with Bootstrap and JQuery. I have quite a lot of project which mostly build for <strong>college student thesis project</strong>, so I have no experience working in company.</p>
                                            <p>I also learn fundamental <strong>Python</strong> and web developing with <strong>Ruby on Rails</strong> (certification attached below). For my web dev skills I also begin to learn front-end framework such as <strong>Vue JS</strong> and <strong>React JS</strong>.</p>
                                            <p>Talking about activity in my daily life (outside of work), I usually do <strong>random typing</strong> and <strong>creating a diary</strong>. I love typing so much that my typing speed (min/max) can achieve about <strong>99-123 WPM</strong> for <strong>Indonesian</strong> (110 WPM average), <strong>87-103 WPM</strong> for <strong>English</strong> (95 WPM average) (see it in <a href="https://10fastfingers.com/user/1858945/" target="_blank" rel="noopener">10fastfinger)</a>. For my hobby in creating diary, I started it from 29/08/2015. I create it when interesting event occur such as bad-good, unique; I also create an ordinary one only when Im bored.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/.row -->

                            </div>
                            <!--/.col -->
                        </div>
                        <!--/.row -->
                    </div>
                </section>
                <!--/.about -->


                <!-- SKILLS -->
                <section class="colorlib-skills py-2" data-section="skills">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta heading-meta-block">My Specialist</span>
                                <h2 class="colorlib-heading animate-box">My Tools and Expertise</h2>
                            </div>
                        </div>
                        <div class="row py-4 d-flex flex-wrap justify-content-center align-items-center animate-box" data-animate-effect="fadeInUp">

                            <!-- VS CODE -->
                            <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                <img src="<?php echo base_url('assets/images/visual-studio-code-1.svg'); ?>" alt="Visual Studio">
                            </button>
                            <!--/.vs-code -->

                            <!-- PS CS6 -->
                            <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                <img src="<?php echo base_url('assets/images/adobe-photoshop-cs6.svg'); ?>" alt="Adobe Photoshop CS6">
                            </button>
                            <!--/.ps-cs6 -->

                            <!-- GITHUB -->
                            <a href="https://github.com/Okta467" target="_blank" rel="noopener">
                                <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                    <img src="<?php echo base_url('assets/images/github-2.svg'); ?>" alt="Github">
                                </button>
                            </a>
                            <!--/.github -->

                            <!-- PHP -->
                            <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                <img src="<?php echo base_url('assets/images/php-1.svg'); ?>" alt="PHP">
                            </button>
                            <!--/.php -->

                            <!-- CI -->
                            <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                <img src="<?php echo base_url('assets/images/codeigniter.svg'); ?>" alt="CodeIgniter">
                            </button>
                            <!--/.ci -->

                            <!-- LARAVEL -->
                            <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                <img src="<?php echo base_url('assets/images/laravel.svg'); ?>" alt="Laravel">
                            </button>
                            <!--/.laravel -->

                            <!-- BOOTSTRAP -->
                            <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                <img src="<?php echo base_url('assets/images/bootstrap-5.svg'); ?>" alt="Bootstrap">
                            </button>
                            <!--/.bootstrap -->

                            <!-- VUE -->
                            <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                <img src="<?php echo base_url('assets/images/vue-9.svg'); ?>" alt="Vue">
                            </button>
                            <!--/.vue -->

                            <!-- JS -->
                            <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                <img src="<?php echo base_url('assets/images/logo-javascript.svg'); ?>" alt="JS">
                            </button>
                            <!--/.js -->

                            <!-- JQUERY -->
                            <button type="button" class="btn btn-link col-md-1 col-sm-2 skills-icon item-animate mx-0 py-4 fadeInUp animated">
                                <img src="<?php echo base_url('assets/images/jquery-4.svg'); ?>" alt="JQuery">
                            </button>
                            <!--/.jquery -->

                        </div>
                    </div>
                </section>
                <!--/.skills -->


                <!-- COUNTER -->
                <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?= base_url('assets/images/cover_bg_1.jpg'); ?>);" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="colorlib-narrow-content">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Cups of coffee</span>
                            </div>
                            <div class="col-md-3 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Projects</span>
                            </div>
                            <div class="col-md-3 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Clients</span>
                            </div>
                            <div class="col-md-3 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Partners</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.counter -->


                <!-- EDUCATION -->
                <section class="colorlib-education" data-section="education">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta heading-meta-block">Education</span>
                                <h2 class="colorlib-heading animate-box">Education</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                        <!-- SI UIN RF -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Information System -- UIN Raden Fatah Palembang
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                    <ul>
                                                        <li>Separated they live in Bookmarksgrove right</li>
                                                        <li>Separated they live in Bookmarksgrove right</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.si-uin-rf -->

                                        <!-- TKJ SMKN 8 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Computer and Network Engineering -- SMKN 8 Palembang
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                    <ul>
                                                        <li>Separated they live in Bookmarksgrove right</li>
                                                        <li>Separated they live in Bookmarksgrove right</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.tkj-smkn-8 -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/.education -->


                <!-- WORK -->
                <section class="colorlib-work" data-section="projects">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta heading-meta-block">My Work</span>
                                <h2 class="colorlib-heading animate-box">Recent Work</h2>
                            </div>
                        </div>
                        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="col-md-12">
                                <p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> <span><a href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a href="#">Apps</a></span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-1'); ?>.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 01</a></h3>
                                            <span>Website</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-2'); ?>.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 02</a></h3>
                                            <span>Animation</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 animate-box" data-animate-effect="fadeInTop">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-3'); ?>.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 03</a></h3>
                                            <span>Illustration</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 animate-box" data-animate-effect="fadeInBottom">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-4'); ?>.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 04</a></h3>
                                            <span>Application</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-5'); ?>.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 05</a></h3>
                                            <span>Graphic, Logo</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-6'); ?>.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 06</a></h3>
                                            <span>Web Design</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/.work -->


                <!-- BLOG -->
                <section class="colorlib-blog" data-section="blog">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta heading-meta-block">Read</span>
                                <h2 class="colorlib-heading">Recent Blog</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry d-flex flex-wrap">
                                    <div class="col-md-12 col-xs-4 px-0 py-3">
                                        <a href="blog.html" class="blog-img d-flex"><img src="<?= base_url('assets/images/blog-1.jpg'); ?>" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    </div>
                                    <div class="col-md-12 col-xs-8 px-0 py-3">
                                        <div class="desc blog-desc">
                                            <h3 class="mb-0"><a href="blog.html">Renovating National Gallery</a></h3>
                                            <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                            <p class="mb-0">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 animate-box" data-animate-effect="fadeInRight">
                                <div class="blog-entry d-flex flex-wrap">
                                    <div class="col-md-12 col-xs-4 px-0 py-3">
                                        <a href="blog.html" class="blog-img d-flex"><img src="<?= base_url('assets/images/blog-2.jpg'); ?>" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    </div>
                                    <div class="col-md-12 col-xs-8 px-0 py-3">
                                        <div class="desc blog-desc">
                                            <h3 class="mb-0"><a href="blog.html">Wordpress for a Beginner</a></h3>
                                            <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                            <p class="mb-0">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry d-flex flex-wrap">
                                    <div class="col-md-12 col-xs-4 px-0 py-3">
                                        <a href="blog.html" class="blog-img d-flex"><img src="<?= base_url('assets/images/blog-3.jpg'); ?>" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    </div>
                                    <div class="col-md-12 col-xs-8 px-0 py-3">
                                        <div class="desc blog-desc">
                                            <h3 class="mb-0"><a href="blog.html">Make website from scratch</a></h3>
                                            <span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                            <p class="mb-0">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/.blog -->


                <!-- CONTACT -->
                <section class="colorlib-contact" data-section="contact">
                    <div class="colorlib-narrow-content">

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta heading-meta-block">Get in Touch</span>
                                <h2 class="colorlib-heading">Contact</h2>
                            </div>
                        </div>
                        <!--/.row -->


                        <div class="row">

                            <div class="col-md-5 animate-box" data-animate-effect="fadeInLeft">
                                <div class="contact-info d-flex pb-5">
                                    <div class="box-contact-icon"><i class="icon-globe-outline"></i></div>
                                    <div class="box-contact-text">Oktaalfiansyah@gmail.com</div>
                                </div>
                                <div class="d-flex pb-5">
                                    <div class="box-contact-icon"><i class="icon-map"></i></div>
                                    <div class="box-contact-text">
                                        <a href="https://goo.gl/maps/q1pbxxoM4YgqjPgf7" target="_blank" rel="noopener">
                                            JL. KH. Wahid Hasyim, Lr. Juwita, No. 1197, Kec. Jakabaring, Kel. Tuan Kentang, Kertapati, Palembang, 30257.
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex pb-5">
                                    <div class="box-contact-icon"><i class="icon-whatsapp"></i></div>
                                    <div class="box-contact-text"><a href="https://wa.me/6287742798886" target="_blank" rel="noopener">+6287742798886</a></div>
                                </div>
                            </div>
                            <!--/.col -->

                            <div class="col-md-7 col-md-push-1">
                                <div class="row justify-content-end">
                                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                        <form action="">
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group mb-3">
                                                <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <!--/.col -->

                        </div>
                        <!--/.row -->

                    </div>
                </section>
                <!--/.contact -->


                <div id="bottom-page"></div>

            </div><!-- end:colorlib-main -->
        </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->

    <?php $this->load->view('depan/_partials/script_bottom'); ?>

</body>

</html>