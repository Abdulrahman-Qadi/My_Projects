<!DOCTYPE html>
<html>

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Title  -->
    <title>My Website</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />

    <!-- removes all the browser formatting from the main HTML elements and reference -->
    <link rel="stylesheet" href="reset.css" />

</head>

<body class="dark-theme">

    <!-- =====================================
    	==== Start Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#welcome">Abdulrahman</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-scroll-nav="1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience" data-scroll-nav="2">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience" data-scroll-nav="2">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects" data-scroll-nav="3">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" data-scroll-nav="4">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-scroll-nav="5">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
    	======================================= -->

    <!-- =====================================
    	==== Start Header -->
    <header class="header valign bg-img" id="welcome" data-overlay-dark="2">
        <div class="container">
            <div class="row">
                <div class="vertical-center full-width text-center caption">
                    <h2>Welcome To My Portfolio</h2>
                    <h1 class="cd-headline clip">
                        <span class="blc">I Am </span>
                        <span class="cd-words-wrapper">
				              <b class="is-visible">Abdulrahman Qadi</b>

				            </span>
                    </h1>
                    <button onclick="window.location.href='login.php'" class="animated-button1" type="button">
                        <span></span>
                        <span></span
                        <span></span>
                        <span></span>Login</button>
                </div>
            </div>
        </div> <br>
        <div class="arrow">
            <a href="#about">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </header>


    <!-- End Header ====
    	======================================= -->

    <!-- =====================================
    	==== Start Hero -->
    <section class="hero section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <figure>
                        <div class="hero-img mb-md50">
                            <figcaption>
                                <img src="img/abdulrahman.jpg">
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-7">
                    <div class="content">
                        <h4 class="title title-left">I Am a Computer Science / AI Student</h4>
                        <p>I am <span>Abdulrahman Qadi</span> and I am a student within the School of Electronic Engineering and Computer Science at Queen Mary University of London. Aspiring to pursue a career in Artificial Intelligence (Robotics). In addition,
                            I enjoy developing websites & applications, and I have sufficient experience in coding as I have programmed using a variety of different languages such as Java, HTML, CSS, JavaScript, and Python.
                        </p>
                        <p>In my free time, I appreciate making music such as rap and I love performing magic tricks for the public. I am extremly dedicated to all aspects of my work. You can also download my CV below. </p>

                        <div class="social-icon">
                            <a href="https://www.facebook.com/abdulrahman.qadi.9">
                                <span class="icon"><i class="fab fa-facebook-f"></i></span>
                            </a>
                            <a href="https://twitter.com/official_cyph3r">
                                <span class="icon"><i class="fab fa-twitter"></i></span>
                            </a>
                            <a href="https://www.instagram.com/3bdulra7man_alqadi/">
                                <span class="icon"><i class="fab fa-instagram"></i></span>
                            </a>
                            <a href="https://www.linkedin.com/in/abdulrahmanqadi/">
                                <span class="icon"><i class="fab fa-linkedin"></i></span>
                            </a>
                            <a href="https://www.tumblr.com/blog/3bdulra7man-alqadi">
                                <span class="icon"><i class="fab fa-tumblr"></i></span>
                            </a>
                        </div>

                        <span class="buton text-center">
                              <a href="#contact" front="Hire Me" back="&#xf1d8;" data-scroll-nav="6"></a>
                            </span>
                        <span class="buton buton-bord text-center">
                              <a href="abdulrahman-CV.pdf" front="Download C.V" back="&#xf019;" download="abdulrahman-CV.pdf"></a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero ====
    	======================================= -->

    <!-- =====================================
    	==== Start Resume -->
    <section class="resume bg-img" id="experience" data-overlay-dark="2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="item mb-md50">
                        <span class="icon icon-pencil"></span><br>
                        <h5 class="title title-left">Education</h5>
                        <ul>
                            <li>
                                <h6>Queen Mary University of London</h6>
                                <p>BSc Computer Science</p>
                            </li>
                            <li>
                                <h6>Birkbeck, University of London</h6>
                                <p>Pre-University Foundation Degree</p>
                                <p>Mathematics A* Physics A*</p>
                            </li>
                            <li>
                                <h6>Ashbourne Independent Sixth Form College, London</h6>
                                <p>AS Levels</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="item mb-md50">
                        <span class="icon icon-briefcase"></span><br>
                        <h5 class="title title-left">Experience</h5>
                        <ul>
                            <li>
                                <h6>Custodian Of The Elderly </h6>
                                <p>Sudbury Neighborhood Centre</p>
                                <p>June 2019 — Jul 2019</p>
                            </li>
                            <li>
                                <h6>The Young Doctor's Programme</h6>
                                <p>University College London (UCL)</p>
                                <p>November 2017 — November 2017</p>
                            </li>
                            <li>
                                <h6>Model United Nations - Delegate</h6>
                                <p> Halcyon London International School</p>
                                <p>March 2017 — March 2017</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item skills">
                        <span class="icon icon-layers"></span><br>
                        <h5 class="title title-left">My Skills</h5>

                        <div class="skill">
                            <h6>PYTHON <span>90%</span></h6>
                            <div class="skills-progress"><span data-value='90%'></span></div>
                        </div>
                        <div class="skill">
                            <h6>JAVA <span>85%</span></h6>
                            <div class="skills-progress2"><span data-value='85%'></span></div>
                        </div>
                        <div class="skill">
                            <h6>HTML/CSS <span>85%</span></h6>
                            <div class="skills-progress3"><span data-value='80%'></span></div>
                        </div>
                        <div class="skill">
                            <h6>JAVASCRIPT <span>80%</span></h6>
                            <div class="skills-progress4"><span data-value='80%'></span></div>
                        </div>
                        <div class="skill">
                            <h6>PHP <span>80%</span></h6>
                            <div class="skills-progress5"><span data-value='80%'></span></div>
                        </div>
                        <div class="skill">
                            <h6>SQL <span>75%</span></h6>
                            <div class="skills-progress6"><span data-value='75%'></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Resume ====
    	======================================= -->

    <!-- =====================================
    	==== Start Projects -->
    <section class="portfolio section-padding" id="projects">
        <div class="container">
            <div class="row">

                <!-- Section-Head -->
                <div class="section-head full-width">
                    <h4 class="title">My Projects</h4>
                </div>

            </div>

            <div class="row justify-content-center">

                <!-- gallery -->
                <div class="gallery full-width">

                    <!-- gallery item -->
                    <div class="col-md-6 col-lg-4 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/1.jpg" alt="image">
                            <div class="item-img-overlay text-center valign">
                                <div class="overlay-info vertical-center full-width">
                                    <h6>Python</h6>
                                    <h5>Creating a Digital Calculator</h5>
                                </div>
                                <a href="img/portfolio/1.jpg" class="link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-md-6 col-lg-4 items web">
                        <div class="item-img">
                            <img src="img/portfolio/2.jpg" alt="image">
                            <div class="item-img-overlay text-center valign">
                                <div class="overlay-info vertical-center full-width">
                                    <h6>Java</h6>
                                    <h5>Creating a Stock Market Simulator</h5>
                                </div>
                                <a href="img/portfolio/2.jpg" class="link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-md-6 col-lg-4 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/3.jpg" alt="image">
                            <div class="item-img-overlay text-center valign">
                                <div class="overlay-info vertical-center full-width">
                                    <h6>HTML/CSS/JavaScript</h6>
                                    <h5>Creating a Biology Revision Website</h5>
                                </div>
                                <a href="img/portfolio/3.jpg" class="link">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <span class="buton">
						  <a href="#0" front="View All" back="&#xf06e;"></a>
						</span>
                    </div>

                </div>
            </div>
    </section>
    <!-- End Projects ====
    	======================================= -->

    <!-- =====================================
    	==== Start Contact -->
    <section class="contact section-padding bg-img" data-overlay-dark="2" id="contact">
        <div class="container">
            <div class="row">

                <!-- Section-Head -->
                <div class="section-head full-width mb-50">
                    <h4 class="title">Get In Touch</h4>
                </div>

                <form class="form full-width" id="contact-form" method="post" action="contact.php">
                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" placeholder="Name *" required="required">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" placeholder="Email *" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" placeholder="Your Message *" rows="4" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="buton buton-lg">
	                                    	<button type="submit" front="Send Message" back="&#xf35d;"></button>
										</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="info full-width">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item mb-sm50">
                                <span class="icon icon-mobile"></span>
                                <div class="cont">
                                    <h6>Phone</h6>
                                    <p>+44 7462 939 065</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item mb-sm50">
                                <span class="icon icon-envelope"></span>
                                <div class="cont">
                                    <h6>Email</h6>
                                    <p>qadi.abdulrahman02@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <span class="icon icon-map-pin"></span>
                                <div class="cont">
                                    <h6>Address</h6>
                                    <p>89 Warren House, Beckford Close, London W14 8TT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
<!-- End Contact ====
    	======================================= -->

<!-- =====================================
    	==== Start Footer -->
<footer class="footer">
    <p>Copyright &copy; 2021 Abdulrahman Qadi</p>
</footer>
<!-- End Footer ====
    	======================================= -->

</html>