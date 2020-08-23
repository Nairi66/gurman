<?php
    // include '/gurman/session.php';
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: reg_log/login.php");
    }

?>  
    <link rel="stylesheet" href="/gurman/css/bootstrap.min.css">
    <link rel="stylesheet" href="/gurman/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/gurman/css/magnific-popup.css">
    <link rel="stylesheet" href="/gurman/css/font-awesome.min.css">
    <link rel="stylesheet" href="/gurman/css/themify-icons.css">
    <link rel="stylesheet" href="/gurman/css/nice-select.css">
    <link rel="stylesheet" href="/gurman/css/flaticon.css">
    <link rel="stylesheet" href="/gurman/css/animate.css">
    <link rel="stylesheet" href="/gurman/css/slicknav.css">
    <link rel="stylesheet" href="/gurman/css/style.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <header >
        <div class="header-area " style="background-color: #9b9fa9;">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/gurman/index.php">Գլխավոր</a></li>
                                        <li><a href="/gurman/Menu.php">Մենյու</a></li>
                                        <li><a href="/gurman/about.php">Մեր Մասին</a></li>
                                        <li><a href="/gurman/contact.php">Հետադարձ Կապ</a></li>
                                        <li class="log"><a href="/gurman/reg_log/login.php">Մուտք</a></li>
                                        <li class="reg"><a href="/gurman/reg_log/register.php">Գրանցում</a></li>
                                        <li class="out" style="display: none;"><a href="?logout">Ելք</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <button id="scrollup">
                                    <img width='100px' src="/gurman/img/logo.png" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100041633806404">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="#" href="tel:+37455775677">+374-55-77-56-77</a>
                                    <a class="#" href="tel:+37494720344">+374-94-72-03-44</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php 
    // include_once('/barevtv');
    if (!isset($_SESSION['username'])) {
        // header('location: login.php');
    }else{ 
        ?>
            <script>
                $('.reg').css('display', 'none')
                $('.log').css('display', 'none')
                $('.out').css('display', 'block')
            </script>
        <?php
    }
?>