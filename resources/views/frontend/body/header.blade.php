
@php
   
$contacts = App\Models\Home\HomeContact::findOrFail(1);
$services = App\Models\Home\HomeService::all();

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
    // dd($prefix)
    // dd($route)

@endphp


 <!--header start-->
 <header id="masthead" class="header ttm-header-style-infostack">
    <!-- ttm-topbar-wrapper -->
    <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="container">
            <div class="ttm-topbar-content">
                <ul class="top-contact text-left">
                    <!-- <li class="list-inline-item">Your Trusted 24 Hours Service Provider!</li> -->
                    <li><strong><i class="fa fa-phone"></i>
                        Talk To Expert :</strong> 
                        <span class="tel-no">
                            {{ $contacts->phone_1 }}
                        </span>
                    </li>
                </ul>
                <div class="topbar-right text-right">
                    <div class="ttm-social-links-wrapper list-inline">
                        <ul class="social-icons">
                            <li><a href=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href=""><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <ul style="font-size: 20px;" class="top-contact ttm-highlight">
                        <li><strong>
                            <!-- <i class="fa fa-compass"></i> -->
                            RC NO:</strong> 
                            <span style="font-weight: 700;font-size: 20px;" class="tel-no">
                                1078597
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- ttm-topbar-wrapper end -->
    
    <!-- ttm-header-wrap -->
    <div class="ttm-header-wrap">
        <div class="container">
            <div class="ttm-header-top-wrapper clearfix">
            <!-- site-branding -->
                <div class="site-branding">
                    <a class="home-link" href="{{ url('/') }}" title="Fanimic Global Resources" rel="home">
                        <img id="logo-img" class="img-center" src="{{ asset('frontend/images/fanimic.jpg') }}" alt="logo-img">
                    </a>
                </div><!-- site-branding end --> 
                <!-- ttm-top-info-con-->
                <div class="ttm-top-info-con clearfix">
                    <ul>
                        <li>
                            <div class="icon-box icon-style-border">
                                <i class="ti ti-mobile"></i>    
                            </div>
                            <div class="title-box">
                                <div class="title-box">
                                    <h5>Call</h5> 
                                    <p>{{$contacts->phone_1}}</p>   
                                    <p>{{$contacts->phone_2}}</p>   
                                    <p>{{$contacts->phone_3}}</p>   
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box icon-style-border">
                                <i class="ti ti-comment-alt"></i>    
                            </div>
                            <div class="title-box">
                                <h5>Email</h5> 
                                <p>{{ $contacts->email_1 }}</p>   
                            </div>
                        </li>
                        <li>
                            <div class="icon-box icon-style-border">
                                <i class="ti ti-location-pin"></i>    
                            </div>
                            {{-- <div class="title-box">
                                <h5>Head Office</h5> 
                                <p style="font-size: 11px;">{!!$contacts->address!!}.</p>   
                                <h5>Branch</h5> 
                                <p style="font-size: 11px;">329, College Rd, Eleyo, Opp. High Court, Ikere Ekiti, Ekiti State.</p>   
                            </div> --}}

                            <div class="title-box">
                                <h5>Head Office</h5> 
                                <p style="font-size: 12px;">25, Ayomide Street, Ijako Sango ota, Ogun State.</p>   
                                <h5>Branch</h5> 
                                <p style="font-size: 12px;">329, College Rd, Eleyo, Opp. High Court, Ikere Ekiti, Ekiti State.</p>   
                            </div>
                        </li>     
                    </ul>
                </div>
                <!-- ttm-top-info-con end -->
            </div>
            <!-- ttm-stickable-header-w -->
            <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                            <!--site-navigation -->
                            <div id="site-navigation" class="site-navigation">
                                <div class="ttm-menu-toggle">
                                    <input type="checkbox" id="menu-toggle-form" />
                                    <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                        <span class="toggle-block toggle-blocks-1"></span>
                                        <span class="toggle-block toggle-blocks-2"></span>
                                        <span class="toggle-block toggle-blocks-3"></span>
                                    </label>
                                </div>
                                <nav id="menu" class="menu">
                                    <ul class="dropdown">
                                        <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a>
                                            <ul>
                                                <li class="{{ ($route == 'home') ? 'active': '' }}"><a href="{{ url('/') }}">Home </a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ Request::path() == 'about' ? 'active' : '' }}"><a href="{{ route('about.page') }}">About Us</a>
                                            <ul>
                                                <li class="{{ ($route == 'about.page') ? 'active': '' }}"><a href="{{ route('about.page') }}">About Us </a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ ($prefix == '/services') ? 'active': '' }}"><a href="{{ route('services.page') }}">Services</a>
                                            <ul>
                                                <li class="{{ ($route == 'services.page') ? 'active': '' }}"><a href="{{ route('services.page') }}">Our Services</a></li>
                                                <li class="{{ ($route == 'building.page') ? 'active': '' }}"><a href="{{ route('building.page') }}">Building Construction</a></li>
                                                <li class="{{ ($route == 'eletrical.page') ? 'active': '' }}"><a href="{{ route('eletrical.page') }}">Electrical Installation</a></li>
                                                <li class="{{ ($route == 'interiors.page') ? 'active': '' }}"><a href="{{ route('interiors.page') }}">Interiors &amp; Exteriors Decorator</a></li>
                                                <li class="{{ ($route == 'manufacturing.page') ? 'active': '' }}"><a href="{{ route('manufacturing.page') }}">Bottle &amp; Pure Water</a></li>
                                                <li class="{{ ($route == 'agriculture.page') ? 'active': '' }}"><a href="{{ route('agriculture.page') }}">Agriculture</a></li>
                                                <li class="{{ ($route == 'agriculture.page') ? 'active': '' }}"><a href="{{ route('agriculture.page') }}">Fumigation &amp; Pest COntrol</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ ($route == 'team.page') ? 'active': '' }}"><a href="{{ route('team.page') }}">Our Team</a></li>

                                        <li class="{{ ($route == 'project.page') ? 'active': '' }}"><a href="{{ route('project.page') }}">Projects</a>
                                            <ul>
                                                <li class="{{ ($route == 'project.page') ? 'active': '' }}"><a href="{{ route('project.page') }}">Our Projects</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ ($route == 'contact.page') ? 'active': '' }}"><a href="{{ route('contact.page') }}">Contact</a></li>
                                       
                                    </ul>
                                </nav>
                            </div>
                            <div class="ttm-rt-contact">
                                <!-- header-icins -->
                                <div class="ttm-header-icons ">
                                    <div class="ttm-header-icon ttm-header-search-link">
                                        <a href=""><i class="fa fa-search"></i></a>
                                        <div class="ttm-search-overlay">
                                            <form method="get" class="ttm-site-searchform" action="">
                                                <div class="w-search-form-h">
                                                    <div class="w-search-form-row">
                                                        <div class="w-search-input">
                                                            <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                            <button type="submit">
                                                                <i class="ti ti-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- header-icons end -->
                                <div class="ttm-custombutton">
                                    <a href="{{ route('contact.page') }}">Get a Quote<i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--ttm-header-wrap end -->

</header>
<!--header end-->