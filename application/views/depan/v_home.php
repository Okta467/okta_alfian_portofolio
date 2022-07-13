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
            <a id="btn-goto-top" class="hide" onclick='window.scrollTo({top: 0, behavior: "smooth"});'><i class="icon-arrow-up"></i></a>
            <a id="btn-goto-bottom" class="hide" onclick='window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" })'><i class="icon-arrow-down"></i></a>
            
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
                                                    <h1 id="typewriter-text">I'm okta_alfian</h1>
                                                    <h2>A Fullstack WEB Developer</h2>
                                                    <p><a class="btn btn-primary btn-learn" href="<?= base_url('assets/files/d1a9036144b02185f391dd04305c2630.pdf'); ?>" target="_blank" rel="noopener">Download CV <i class="icon-download4"></i></a></p>
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
                <section class="colorlib-about" data-section="about">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="col-md-12">
                                        <div class="about-desc">
                                            <span class="heading-meta">About Us</span>
                                            <h2 class="colorlib-heading">Who Am I?</h2>
                                            <p><strong>Hi I'm Jackson Ford</strong> On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="services about-services color-1">
                                            <span class="icon2"><i class="icon-bulb"></i></span>
                                            <h3>Graphic Design</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 animate-box" data-animate-effect="fadeInRight">
                                        <div class="services about-services color-2">
                                            <span class="icon2"><i class="icon-globe-outline"></i></span>
                                            <h3>Web Design</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 animate-box" data-animate-effect="fadeInTop">
                                        <div class="services about-services color-3">
                                            <span class="icon2"><i class="icon-data"></i></span>
                                            <h3>Software</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6 animate-box" data-animate-effect="fadeInBottom">
                                        <div class="services about-services color-4">
                                            <span class="icon2"><i class="icon-phone3"></i></span>
                                            <h3>Application</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="hire">
                                            <h2>I am happy to know you <br>that 300+ projects done sucessfully!</h2>
                                            <a href="#" class="btn-hire">Hire me</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/.about -->


                <!-- SERVICES -->
                <section class="colorlib-services" data-section="services">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">What I do?</span>
                                <h2 class="colorlib-heading">Here are some of my expertise</h2>
                            </div>
                        </div>
                        <div class="row row-pt-md d-flex flex-wrap">
                            <div class="col-md-4 col-sm-6 text-center animate-box">
                                <div class="services color-1">
                                    <span class="icon">
                                        <i class="icon-bulb"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Innovative Ideas</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center animate-box">
                                <div class="services color-2">
                                    <span class="icon">
                                        <i class="icon-data"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Software</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center animate-box">
                                <div class="services color-3">
                                    <span class="icon">
                                        <i class="icon-phone3"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Application</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center animate-box">
                                <div class="services color-4">
                                    <span class="icon">
                                        <i class="icon-layers2"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Graphic Design</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center animate-box">
                                <div class="services color-5">
                                    <span class="icon">
                                        <i class="icon-data"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Software</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center animate-box">
                                <div class="services color-6">
                                    <span class="icon">
                                        <i class="icon-phone3"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Application</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/.services -->


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


                <!-- SKILLS -->
                <section class="colorlib-skills" data-section="skills">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Specialty</span>
                                <h2 class="colorlib-heading animate-box">My Skills</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                            </div>
                            <div class="col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Photoshop</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>jQuery</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                            <span>60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>HTML5</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>CSS3</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>WordPress</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>SEO</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/.skills -->


                <!-- EDUCATION -->
                <section class="colorlib-education" data-section="education">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Education</span>
                                <h2 class="colorlib-heading animate-box">Education</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Master Degree Graphic Design
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor Degree of Computer Science
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
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Diploma in Information Technology
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFour">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Diploma in Information Technology
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                <div class="panel-body">
                                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFive">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">High School Secondary Education
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                <div class="panel-body">
                                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/.education -->


                <!-- EXPERIENCE -->
                <section class="colorlib-experience" data-section="experience">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Experience</span>
                                <h2 class="colorlib-heading animate-box">Work Experience</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline-centered">
                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">

                                            <div class="timeline-icon color-1">
                                                <i class="icon-pen2"></i>
                                            </div>

                                            <div class="timeline-label">
                                                <h2><a href="#">Full Stack Developer</a> <span>2017-2018</span></h2>
                                                <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                            </div>
                                        </div>
                                    </article>


                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-2">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Front End Developer at Google Company</a> <span>2017-2018</span></h2>
                                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-3">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">System Analyst</a> <span>2017-2018</span></h2>
                                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-4">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
                                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-5">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
                                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-none">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/.experience -->


                <!-- WORK -->
                <section class="colorlib-work" data-section="work">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Work</span>
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
                                <span class="heading-meta">Read</span>
                                <h2 class="colorlib-heading">Recent Blog</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry d-flex flex-wrap">
                                    <div class="col-md-12 col-xs-4 px-0">
                                        <a href="blog.html" class="blog-img d-flex"><img src="<?= base_url('assets/images/blog-1.jpg'); ?>" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    </div>
                                    <div class="col-md-12 col-xs-8 px-0">
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
                                    <div class="col-md-12 col-xs-4 px-0">
                                        <a href="blog.html" class="blog-img d-flex"><img src="<?= base_url('assets/images/blog-2.jpg'); ?>" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    </div>
                                    <div class="col-md-12 col-xs-8 px-0">
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
                                    <div class="col-md-12 col-xs-4 px-0">
                                        <a href="blog.html" class="blog-img d-flex"><img src="<?= base_url('assets/images/blog-3.jpg'); ?>" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    </div>
                                    <div class="col-md-12 col-xs-8 px-0">
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
                                <span class="heading-meta">Get in Touch</span>
                                <h2 class="colorlib-heading">Contact</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-globe-outline"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="#">info@domain.com</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-map"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="tel://">+123 456 7890</a></p>
                                    </div>
                                </div>
                            </div>
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
                        </div>
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