<?php
include("code/db.php");
session_start(); ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduwingz - Education </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/courses/eduwingz b.jpg">
    <!-- CSS
    ============================================ -->
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.powertip.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

    <style>
		.profile-img{
			overflow: hidden;
		}
        .profile-img img{
			transition: transform 1.5s ease;
		}
		.profile-img:hover img{
			transform: scale(1.5);
		}
    </style>
</head>

<body>
    <div class="main-wrapper">
        <!-- Preloader start -->
        <!-- <div id="preloader">
            <div class="preloader preloader-02">
                <span></span>
                <span></span>
            </div>
        </div> -->
        <!-- Preloader End -->
        <!-- Header Start  -->
        <div class="section header header-section-02 header-section-05">
            <!-- Header Top Start  -->
            <div class="header-top-section d-none d-lg-flex">
                <div class="container">
                    <div class="header-top-wrap">
                        <!-- Header Info Start  -->
                        <div class="header-top-info">
                            <ul>
                                <li>
                                    <i class="flaticon-phone-call"></i>Call 
                                    <a href="tel:+91 7317670357"> +91 7317670357</a>
                                </li>
                                <li>
                                    <i class="flaticon-phone-call"></i>Call 
                                    <a href="tel:+91 8173060896"> +91 8173060896</a>
                                </li>
                                <li><i class="fas fa-envelope"></i> <a href="mailto:hello@eduwingz.com">
                                        hello@eduwingz.com </a></li>
                                <li>

                                </li>
                                <li><i class="far fa-clock"></i> Mon - Fri: 09.00am - 10.00 pm</li>

                            </ul>


                        </div>
                        <!-- Header Info End  -->
                        <!-- Header Social Start  -->
                        <div class="header-social">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/eduwingz?mibextid=D4KYlr"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://instagram.com/joineduwingz?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><i class="fab 										fa-instagram"></i></a>
								</li>
                            </ul>
                        </div>
                        <!-- Header Social End  -->
                    </div>
                </div>
            </div>
            <!-- Header Top End  -->
            <div class="header-bottom-section">
                <div class="container">
                    <div class="header-bottom-wrap">
                        <!--  Header Logo Start  -->
                        <div class="header-logo">
                            <a href="index.php"><img class="displayedImage" src="" alt="logo"></a>
                        </div>
                        <!--  Header Logo End  -->
                        <!--  Header Menu Start  -->
                        <div class="header-menu d-none d-lg-block">
                            <ul class="main-menu">
                                <li class="active-menu">
                                    <a href="index.php">Home</a>
                                </li>
                                <li><a href="about.php">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="founder.php">Founder</a></li>
                                        <li><a href="ask.php">Ask Eduwingz</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.php">Blogs</a> </li>
                                <li><a href="english.php">English cafe</a>
                                    <ul class="sub-menu">
                                        <li><a href="basic_skill.php">Basic Skills</a></li>
                                        <li><a href="grammer.php">Grammar</a></li>
                                        <li><a href="vocabulary.php"> Vocabulary</a></li>
                                        <li><a href="fashion.php">Fashion</a></li>
                                        <li><a href="corporate.php">Corporate Interface</a></li>
                                        <li><a href="verbal.php">Verbal Ability</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Career</a>
                                    <ul class="sub-menu">
                                        <li><a href="interview.php">Interview</a></li>
                                        <li><a href="body.php">Body Language</a></li>
                                        <li><a href="voice.php">Voice & Accent</a></li>
                                        <li><a href="trainer.php">Train & Trainer</a></li>
                                        <li><a href="art.php">Articles</a></li>
                                    </ul>
                                </li>
                                <li><a href="revel.php">Express </a></li>
                                <li><a href="gallery.php">Gallery </a></li>
                                <li><a href="ielts.php">IELTS/PTE</a></li>
                                <li><a href="place.php">Placement</a></li>

                                <li>

                                    <a href="contact.php">Contact Us</a>

                                </li>
                                <li> <a href="#" data-bs-toggle="modal" data-bs-target="#search"><i class="fas fa-search"></i> Search</a>								</li>
                            </ul>
                        </div>
                        <!-- Header Menu End  -->

                        <!-- Header Meta Start -->
                        <div class="header-meta">
                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
					
                        <!-- Header Meta End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="index.php"><img src="assets/images/courses/eduwingz b.jpg" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="index.php">Home</a>
                        </li>
                        <li><a href="about.php">About </a>
                            <ul class="sub-menu">
                                <li><a href="founder.php">About Founder</a></li>
                                <li><a href="ask.php">Ask Eduwingz</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.php">Blogs</a> </li>
                        <li><a href="english.php">English cafe</a>
                            <ul class="sub-menu">
                                <li><a href="basic_skill.php">Basic Skills</a></li>
                                <li><a href="grammer.php">Grammer</a></li>
                                <li><a href="vocabulary.php">Vocabulary</a></li>
                                <li><a href="fashion.php">Fashion</a></li>
                                <li><a href="corporate.php">Corporate Interface</a></li>
                                <li><a href="verbal.php">Verbal Ability</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Career</a>
                            <ul class="sub-menu">
                                <li><a href="interview.php">Interview</a></li>
                                <li><a href="body.php">Body Language</a></li>
                                <li><a href="voice.php">Voice & Accent</a></li>
                                <li><a href="trainer.php">Train & Trainer</a></li>
                                <li><a href="art.php">Articles</a></li>
                            </ul>
                        </li>
                        <li><a href="revel.php">Reveal </a></li>
                        <li><a href="gallery.php">Gallery </a></li>

                        <li><a href="ielts.php">IELTS/PTE</a></li>

                        <li><a href="place.php">Placement</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
						<li><a href="#" data-bs-toggle="modal" data-bs-target="#search"><i class="fas fa-search"></i> Search</a><li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Offcanvas End -->

    <!-- Modal -->
    <div class="modal fade" id="search" tabindex="-1" aria-labelledby="searchLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="searchLabel">Search ..</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="search.php" method="get" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" name="query" placeholder="Search .." aria-label="Search">
                        <button class="btn btn-outline-success"  type="submit">Search ..</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    