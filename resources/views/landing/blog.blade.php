﻿<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/tunis/dark/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 11:57:28 GMT -->
<head>
    <meta charset="utf-8">
    <title>Blog - Nova Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Template Google Fonts -->
    <link href="{{asset('../../../fonts.googleapis.com/cssdda2.css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">
    <link href="{{asset('../../../fonts.googleapis.com/cssab6d.css?family=Open+Sans:300,400,400i,600,600i,700')}}" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/preloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/circle.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fm.revealator.jquery.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="css/skins/yellow.css" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('css/skins/blue.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('css/skins/green.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('css/skins/yellow.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('css/skins/blueviolet.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('css/skins/goldenrod.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('css/skins/magenta.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('css/skins/orange.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('css/skins/purple.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('css/skins/red.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('css/skins/yellowgreen.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleswitcher.css')}}" />

    <!-- Modernizr JS File -->
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
</head>

<body class="blog">
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="img/styleswitcher/purple.png" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="img/styleswitcher/red.png" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="img/styleswitcher/blueviolet.png" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="img/styleswitcher/blue.png" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="img/styleswitcher/goldenrod.png" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="img/styleswitcher/magenta.png" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="img/styleswitcher/yellowgreen.png" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="img/styleswitcher/orange.png" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="img/styleswitcher/green.png" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="img/styleswitcher/yellow.png" alt="yellow"/></a>
            </li>
        </ul>

        <a href="https://themeforest.net/item/tunis-personal-portfolio/26761598?irgwc=1&amp;clickid=UBs0rDX6YxyJWfewUx0Mo3E1UkiwozXD10XATw0&amp;iradid=275988&amp;irpid=1327395&amp;iradtype=ONLINE_TRACKING_LINK&amp;irmptype=mediapartner&amp;mp_value1=&amp;utm_campaign=af_impact_radius_1327395&amp;utm_medium=affiliate&amp;utm_source=impact_radius" class="waves-effect waves-light font-weight-700 purchase"><i class="fa fa-shopping-cart"></i> Purchase</a>
        <div id="hideSwitcher">&times;</div>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box">
            <i class="fa fa-home"></i>
            <a href="/">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="/about">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="/portfolio">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="/contact">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box active">
            <i class="fa fa-comments"></i>
            <a href="/blog">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li><a href="/"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="/about"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="/portfolio"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="/contact"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li class="active"><a href="/blog"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <!-- Articles Starts -->
        <div class="row">
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="/blog-post" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-1.png" class="img-fluid" alt="Blog Post">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="/blog-post">Loka Karya PHP2D 2020</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Bangli- Mahasiswa Universitas Pendidikan Ganesha melaksanakan kegiatan Lokakarya di Desa Pengejaran, Kabupaten Bangli,
                            Bali, Jumat (6/11/2020). Kegiatan ini merupakan salah satu program kerja yang telah dirancang dalam Program Holistik
                            Pembinaan dan Pemberdayaan Desa (PHP2D) pada Kelompok Tani Ternak Manik Tirta. PHP2D ini mengusung tema Peningkatan
                            Produktivitas Pertanian Melalui Penerapan Sistem Pertanian Terpadu (Integrated Farming System). Kegiatan Lokakarya yang
                            dihadiri sejumlah undangan, yakni Dinas Pertanian, Ketahanan Pangan dan Perikanan Kabupaten Bangli, Camat Kintamani,
                            LP2M Universitas Pendidikan Ganesha, Pusat Unggulan Inovasi Undiksha, Dosen Pembimbing, Penjalain stake, Perangrankat
                            Desa..
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            <!-- Article Starts -->
            <!-- <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-2.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">Top 10 Toolkits for Deep Learning in 2020</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div> -->
            <!-- Article Ends -->
            <!-- Article Starts -->
            <!-- <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-3.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">Everything You Need to Know About Web Accessibility</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div> -->
            <!-- Article Ends -->
            <!-- Article Starts -->
            <!-- <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-4.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">How to Inject Humor & Comedy Into Your Brand</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div> -->
            <!-- Article Ends -->
            <!-- Article Starts -->
            <!-- <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-5.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">Women in Web Design: How To Achieve Success</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div> -->
            <!-- Article Ends -->
            <!-- Article Starts -->
            <!-- <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                            <img src="img/blog/blog-post-6.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="blog-post.html">Evergreen versus topical content: An overview</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                            </p>
                        </div>
                    </div>
                </article>
            </div> -->
            <!-- Article Ends -->
            <!-- Pagination Starts -->
            <div class="col-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <!-- <li class="page-item"><a class="page-link" href="#">1</a></li> -->
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <!-- <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li> -->
                    </ul>
                </nav>
            </div>
            <!-- Pagination Ends -->
        </div>
        <!-- Articles Ends -->
    </div>

</section>

<!-- Template JS Files -->
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/preloader.min.js"></script>
<script src="js/fm.revealator.jquery.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>

</body>


<!-- Mirrored from slimhamdi.net/tunis/dark/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 11:57:47 GMT -->
</html>
