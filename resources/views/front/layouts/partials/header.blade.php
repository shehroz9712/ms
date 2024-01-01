@dd(frontImage())
<!-- main header -->
<header class="main-header menu-absolute">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container container-1620 clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="index.html"><img src="{{ frontImage('logos/logo.png') }}"
                                alt="Logo"></a></div>
                </div>

                <div class="nav-outer clearfix mx-auto">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <div class="mobile-logo my-15">
                                <a href="index.html">
                                    <img src="{{ frontImage('logos/logo.png') }}" alt="Logo" title="Logo">
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle me-4" data-bs-toggle="collapse"
                                data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="{{ request()->routeIs('index') ? 'active' : '' }}">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>

<<<<<<< HEAD
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="{{ request()->routeIs('index') ? 'active' : '' }}">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>

                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('services') }}">Services</a></li>
                                        <li><a href="{{ route('projects') }}">Projects</a>
                                            <!-- <ul>
=======
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('projects') }}">Projects</a>
                                    <!-- <ul>
>>>>>>> 15594d1992dc2d3cc17f3b03dc961db8e258eeab
                                                <li><a href="{{ route('projects') }}">Project Grid</a></li>
                                                <li><a href="projects-masonry.html">projects masonry</a></li>
                                                <li><a href="project-details.html">projects details</a></li>
                                            </ul> -->
                                </li>
                                <li><a href="{{ route('blogs') }}">Blog</a>
                                    <!-- <ul>
                                                <li><a href="{{ route('blogs') }}">Blog Standard</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul> -->
                                </li>
                                <!-- <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                            <li><a href="{{ route('blogs') }}">Error Page</a></li>
                                            </ul>
                                        </li> -->
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Menu Button -->
                <div class="menu-btns">
                    <!-- menu sidbar -->
                    <div class="menu-sidebar">
                        <button>
                            <img src="{{ frontImage('shape/sidebar-tottler.svg') }}" alt="Toggler">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
