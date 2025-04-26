<header class="site-header sofax-header-section site-header--menu-center sticky-menu">
    <div class="container-fluid">
        <nav class="navbar site-navbar">
            <div class="header-btn header-three-site-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
                <!-- <svg color="#00539E" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
                </svg> -->
                
            </div>
        </nav>

        <nav class="navbar site-navbar">
            <!-- Brand Logo-->
            <div class="brand-logo">
                <a href="{{route("welcome")}}">
                    <img src="{{asset("assets/images/VIP-junk-logo.png")}}" alt="" class="light-version-logo brand-logo" style="height:70px;">
                </a>
            </div>
            @auth
                <div class="menu-block-wrapper">
                    <div class="menu-overlay"></div>

                    <nav class="menu-block" id="append-menu-header"  style="width:70%;">
                        <div class="mobile-menu-head">
                            <div class="go-back">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                    </nav>
                </div>




                <div class="header-btn header-three-site-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
                    <div class="headerList">

                        @auth
                            <span style="margin-right: 30px">

                                <a class="header-three-btn" style="margin-right: 10px" href="{{route("login")}}">
                                    Dashboard
                                </a>
                                @if(\Illuminate\Support\Facades\Auth::user()->is_admin===1)
                                    <a class="header-three-btn" style="margin-right: 10px" href="{{route("admin.blog-posts.index")}}">
                                        Blogposts
                                    </a>
                                    <a class="header-three-btn" style="margin-right: 10px" href=" {{route ("admin.home-content.index") }}">
                                        Homepage
                                    </a>
                                    <a class="header-three-btn" style="margin-right: 10px" href="{{route("admin.pricing-content.index")}}">
                                        Pricing
                                    </a>
                                    <a class="header-three-btn" style="margin-right: 10px" href="{{route("admin.what-we-take-content.index")}}">
                                        What-We-Take
                                    </a>
                                    <a class="header-three-btn" style="margin-right: 10px" href="{{route("admin.reviews.index")}}">
                                        Reviews
                                    </a>
                                @endif

                            </span>
                        @endauth

                        @if(\Illuminate\Support\Facades\Auth::user()->is_admin===0)
                                <a class="sofax-default-btn pill sofax-header-btn" data-text="New Appointment" href="{{route("newbooking")}}">
                                <span class="button-wraper">New Appointment</span>
                            </a>
                        @endif

                        <div class="btn-group">
                            <a class="btn dropdown-toggle profileAvatar"  data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>
                            </a>
                            <ul class="dropdown-menu profileAvatarUls">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>

                            </ul>
                        </div>
                    </div>
                </div>
            @endauth

            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger ">
                <span></span>
            </div>
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
