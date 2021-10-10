<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/tunis/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 11:56:45 GMT -->

<head>
    <meta charset="utf-8">
    <title>Profil Website - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('landing.master._headerInclude')
</head>

@if ($page==1)

<body class="home">
    @elseif($page==2)

    <body class="about">
        @elseif($page==3)

        <body class="portfolio">
            @elseif($page==4)

            <body class="contact">
                @elseif($page==5)

                <body class="blog">
                    @elseif($page==6)

                    <body class="blogpost">
                        @endif

                    <!-- Header Starts -->
                    <header class="header" id="navbar-collapse-toggle">
                        <!-- Fixed Navigation Starts -->
                        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
                            @if ($page==1)
                            <li class="icon-box active">
                                @else
                            <li class="icon-box">
                                @endif

                                <i class="fa fa-home"></i>
                                <a href="{{ route('home') }}">
                                    <h2>Home</h2>
                                </a>
                            </li>
                            @if ($page==2)
                            <li class="icon-box active">
                                @else
                            <li class="icon-box">
                                @endif
                                <i class="fa fa-user"></i>
                                <a href="{{ route('about') }}">
                                    <h2>About</h2>
                                </a>
                            </li>
                            @if ($page==3)
                            <li class="icon-box active">
                                @else
                            <li class="icon-box">
                                @endif
                                <i class="fa fa-briefcase"></i>
                                <a href="{{ route('portfolio') }}">
                                    <h2>Portfolio</h2>
                                </a>
                            </li>
                            @if ($page==4)
                            <li class="icon-box active">
                                @else
                            <li class="icon-box">
                                @endif
                                <i class="fa fa-envelope-open"></i>
                                <a href="{{ route('contact') }}">
                                    <h2>Contact</h2>
                                </a>
                            </li>
                            @if ($page==5)
                            <li class="icon-box active" >
                                @else
                            <li class="icon-box">
                                @endif
                                <i class="fa fa-comments"></i>
                                <a href="{{ route('blog') }}">
                                    <h2>Blog</h2>
                                </a>
                            </li>

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
                                    <li ><a href="/"><i class="fa fa-home"></i><span>Home</span></a>
                                    </li>
                                    <li><a href="/about"><i class="fa fa-user"></i><span>About</span></a></li>
                                    <li><a href="/portfolio"><i class="fa fa-folder-open"></i><span>Portfolio</span></a>
                                    </li>
                                    <li><a href="/contact"><i class="fa fa-envelope-open"></i><span>Contact</span></a>
                                    </li>
                                    <li><a href="/blog"><i class="fa fa-comments"></i><span>Blog</span></a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Mobile Menu Ends -->
                    </header>
                    <!-- Header Ends -->
                    <!-- Main Content Starts -->
                    @yield('content')

                    <!-- Main Content Ends -->

                    @include('landing.master._footerInclude')


                </body>


            <!-- Mirrored from slimhamdi.net/tunis/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 11:57:16 GMT -->

</html>