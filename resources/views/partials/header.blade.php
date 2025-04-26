<header class="site-header sofax-header-section site-header--menu-center sticky-menu">
    <div class="container-fluid">
        <nav class="navbar site-navbar">
            <div class="header-btn header-three-site-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
                <svg color="#00539E" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
                </svg>
                <a href="tel:973-810-6234" class="ms-2 text-decoration-none text-reset" id="customerServiceAnchor">
                    24/7 Customer Service 973-810-6234
                </a>
            </div>
        </nav>

        <nav class="navbar site-navbar">
            <!-- Brand Logo-->
            <div class="brand-logo">
                <a href="{{route("welcome")}}">
                    <img src="{{asset("assets/images/VIP-junk-logo.png")}}" alt="" class="light-version-logo brand-logo">
                </a>
            </div>

            <div class="menu-block-wrapper" style="width:100%;">
                <div class="menu-overlay"></div>

                <nav class="menu-block" id="append-menu-header" style="width:70%;">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">We server <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu" id="submenu-1">
                                <li class="sub-menu--item">
                                    <a href="{{route("New-Brunswick")}}">
                                        <span class="menu-item-text">New Brunswick</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("Perth-Amboy")}}">
                                        <span class="menu-item-text">Perth Amboy</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("South-Amboy")}}">
                                        <span class="menu-item-text">South Amboy</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("Elizabeth")}}">
                                        <span class="menu-item-text">Elizabeth</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("Linden")}}">
                                        <span class="menu-item-text">Linden</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("Plainfield")}}">
                                        <span class="menu-item-text">Plainfield</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("Summit")}}">
                                        <span class="menu-item-text">Summit</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("East-Orange")}}">
                                        <span class="menu-item-text">East Orange</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("Newark")}}">
                                        <span class="menu-item-text">Newark</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("Orange")}}">
                                        <span class="menu-item-text">Orange</span>
                                    </a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href="{{route("Irvington")}}">
                                        <span class="menu-item-text">Irvington</span>
                                    </a>
                                </li>

                                
                            </ul>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">For Home <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu" id="submenu-1">
                                <li class="sub-menu--item">
                                    <a href="{{route("home-solutions")}}">
                                        <span class="menu-item-text">Go to Home Solutions</span>
                                    </a>
                                </li>

                                <li class="sub-menu--item nav-item-has-children">

                                    <a href="#" data-menu-get="h3" class="drop-trigger">Resources<i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu shape-none" id="submenu-3">
                                        <li class="sub-menu--item">
                                            <a href="{{route("what-we-do")}}">
                                                <span class="menu-item-text">What we do</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("locations")}}">
                                                <span class="menu-item-text">Locations</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("reviews")}}">
                                                <span class="menu-item-text">Reviews</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("blogposts.index")}}">
                                                <span class="menu-item-text">Blog</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("faq")}}">
                                                <span class="menu-item-text">FAQ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu--item nav-item-has-children">
                                    <a href="#" data-menu-get="h3" class="drop-trigger">For your needs <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu shape-none" id="submenu-2">
                                        <li class="sub-menu--item">
                                            <a href="{{route("moving")}}">
                                                <span class="menu-item-text">Moving</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("renovation")}}">
                                                <span class="menu-item-text">Renovation</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("storagep")}}">
                                                <span class="menu-item-text">Storage</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("disaster")}}">
                                                <span class="menu-item-text">Disasters</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">For Business <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu" id="submenu-1">
                                <li class="sub-menu--item">
                                    <a href="{{route("business-solutions")}}">
                                        <span class="menu-item-text">Go to Business Solutions</span>
                                    </a>
                                </li>

                                <li class="sub-menu--item nav-item-has-children">

                                    <a href="#" data-menu-get="h3" class="drop-trigger">Resources<i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu shape-none" id="submenu-3">
                                        <li class="sub-menu--item">
                                            <a href="{{route("what-we-do")}}">
                                                <span class="menu-item-text">What We Do</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("locations")}}">
                                                <span class="menu-item-text">Locations</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("reviews")}}">
                                                <span class="menu-item-text">Reviews</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("blogposts.index")}}">
                                                <span class="menu-item-text">Blog</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("faq")}}">
                                                <span class="menu-item-text">FAQ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu--item nav-item-has-children">
                                    <a href="#" data-menu-get="h3" class="drop-trigger">For your needs <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu shape-none" id="submenu-2">
                                        <li class="sub-menu--item">
                                            <a href="{{route("property-management")}}">
                                                <span class="menu-item-text">Property management</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("professional-services")}}">
                                                <span class="menu-item-text">Professional services</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("retail-hospitality")}}">
                                                <span class="menu-item-text">Retail & Hospitality</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("construction-manufacturing")}}">
                                                <span class="menu-item-text">Construction & manufacturing</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{route("education-healthcare")}}">
                                                <span class="menu-item-text">Education & Healthcare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route("pricing")}}" class="nav-link-item">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("what-we-take")}}" class="nav-link-item">What we take</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link-item" href="{{route("blogposts.index")}}" >Blog</a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="header-btn header-three-site-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
                @auth
                    <a class="header-three-btn" href="{{route("dashboard")}}">
                        Dashboard
                    </a>
                @else
                
                        <a class="header-three-btn" href="{{route("login")}}">
                            SIGN IN
                        </a>
                @endauth

                <a class="sofax-default-btn pill sofax-header-btn" data-text="CHECK AVAILABILITY" href="{{route("newbooking")}}">
                    <span class="button-wraper">CHECK AVAILABILITY</span>
                </a>
            </div>
            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger ">
                <span></span>
            </div>
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
