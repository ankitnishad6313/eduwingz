<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['full_name']) || !isset($_SESSION['email']) || !isset($_SESSION['mobile']) || !isset($_SESSION['id'])) {
    header("Location:login.php");
    exit;
}
include "../code/db.php";
    $name = $_SESSION['full_name'];
    $sortedName = '';
    function printSortedName()
    {
        global $name, $sortedName;
        $sortedName = strtolower($name);
    }
    printSortedName();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title ?></title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/Eduwingz-removebg-preview.png' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</head>

<body>
    <!-- <div class="loader"></div> -->
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>

                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">


                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title"><?php echo $sortedName; ?></div>
                            <a href="profile.php" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
                            </a> <a href="#" class="dropdown-item has-icon" data-bs-toggle="modal" data-bs-target="#updatePass"> <i class="fas fa-edit"></i>
                                Change Password

                                <div class="dropdown-divider"></div>
                                <a href="code/logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                                    Logout
                                </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.php"> <img alt="image" src="" class="header-logo displayedImage" /> <span class="logo-name"></span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="page-content.php" class="nav-link"><i data-feather="monitor"></i><span>Add Page Content</span></a>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Contact</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="contact.php">Contact</a></li>
                                <li><a class="nav-link" href="placement.php">Placement</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Top Categories</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="today_session.php">Today
                                        Session</a></li>
                                <li><a class="nav-link" href="word_of_the_day.php">Word of the day</a></li>
                                <li><a class="nav-link" href="spallation.php">Spellathon</a></li>
                                <li><a class="nav-link" href="strength_personality.php">Strength & Personality</a></li>
                                <li><a class="nav-link" href="test_your_english.php">Test your English</a></li>
                                <li><a class="nav-link" href="classroom_activity.php">Classroom Activity</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>English Cafe</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="english_cafe.php">English Cafe</a></li>
                                <li><a class="nav-link" href="basic_skill.php">Basic SkillS</a></li>
                                <li><a class="nav-link" href="grammar.php">Grammar</a></li>
                                <li><a class="nav-link" href="vocabulary.php">Vocabulary</a></li>
                                <li><a class="nav-link" href="fashion.php">Fashion</a></li>
                                <li><a class="nav-link" href="corporate.php">Corporate Interface</a></li>
                                <li><a class="nav-link" href="verbal.php">Verbal Ability</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Career</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="interview.php">Interview</a></li>
                                <li><a class="nav-link" href="body.php">Body language</a></li>
                                <li><a class="nav-link" href="voice.php">Voice & Accent</a></li>
                                <li><a class="nav-link" href="trainer.php">Train & Trainer</a></li>
                                <li><a class="nav-link" href="art.php">Articles</a></li>
                                <li><a class="nav-link" href="ielts.php">IELST/PTE</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Blog</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="blog.php">Blog</a></li>
                                <li><a class="nav-link" href="gallery.php">Gallery</a></li>
                            </ul>
                        </li>


                        <li class="dropdown ">
                            <a href="revel.php" class="nav-link"><i data-feather="monitor"></i><span>Revel your
                                    thought</span></a>
                        </li>


                    </ul>
                </aside>
            </div>