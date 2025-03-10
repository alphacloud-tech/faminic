@extends("frontend.home_master")



@section("home_frontend")

@php
    $sliders = App\Models\Home\HomeSlider::latest()->paginate(4);

    $abouts = App\Models\Home\HomeAbout::findOrFail(1);
    $services = App\Models\Home\HomeService::all();
    $testimonials = App\Models\Home\HomeTestimonial::latest()->get();
    $multiImages = App\Models\Home\MultiImage::latest()->paginate(6);
@endphp


@section('title')
    {{ $abouts->coy_name }} | Electrical Installation
@endsection

    <!-- page-title -->
    {{-- <div style='background-image: url("{% static 'fanimic/images/farm/electric/electric-9.jpg' %}")'; class="ttm-page-title-row"> --}}
    <div style='background-image: url("{{ asset('frontend/images/farm/electric/electric-9.jpg') }}")'; class="ttm-page-title-row">

        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div style="background-color:rgb(2,13,38)" class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">Electrical Installation</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep"> &nbsp; / &nbsp;</span>
                            <span><span>Electrical Installation</span></span>
                        </div>  
                    </div>
                </div>  
            </div> 
        </div>                  
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!-- ttm-sidebar -->
        <section class="ttm-sidebar ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row ttm-sidebar-left">
                    <div class="col-lg-9 content-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-35">
                                    <h3>Electrical Installation</h3>
                                    <p>
                                        Fanimic Electric is a full-service residential & commercial 
                                        electrical contractor in Nigeria, providing various 
                                        electrical services. Our highly-trained electricians bring more 
                                        than ten years of combined experience to manage your residential 
                                        and commercial projects successfully.

                                        As a construction management company, we deliver on-time service 
                                        within budget. No matter the project size, we are there at every 
                                        stage to ensure that the results meet your expectations. 
                                        We are also available for 24-hour emergency electrical services 
                                        in Nigeria and surrounding areas.
                                        
                                        By providing 24-hour emergency electrical services, our team is 
                                        always ready to deal with your electrical issues no matter when 
                                        they occur. This is especially helpful for businesses since a loss 
                                        of power could lead to lost productivity and profits. So, when you 
                                        need immediate repair services for your home or business’s electrical 
                                        systems, trust our skilled electricians to handle the work. Contact 
                                        us to learn more about our emergency 
                                        repair solutions or request a service visit from our skilled team.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 pr-5 res-767-plr-15">
                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/electric/electric-2.jpg' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/electric/electric-2.jpg') }}" alt="">
                            </div>
                            <div class="col-md-4 pl-0 res-767-plr-15">
                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/electric/electric-13.jpg' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/electric/electric-13.jpg') }}" alt="">

                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/electric/electric-4.jpg' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/electric/electric-4.jpg') }}" alt="">

                            </div>
                        </div>
                        <div class="mt-30 mb-35">
                            <h3>Why choose this service</h3>
                            <p>
                                At Fanimic Electric, we pride ourselves on always delivering 
                                high-quality service solutions to our clients throughout the area. 
                                We have extensive experience working on all types of residential and 
                                commercial electrical systems and will ensure that your systems are 
                                safe to use. Our team is fully equipped to handle everything from new 
                                wiring installations to troubleshooting and panel repairs. We also provide 
                                full design and project management solutions to manage 
                                all aspects of the installation of your electrical system. 
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <!--featured-box-->
                                <div class="featured-box left-icon">
                                    <div class="featured-icon icon-shape-square icon-bgcolor-grey"> 
                                        <i class="flaticon flaticon-robot-arm"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Quality Guarantee</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>
                                                Reliable electric service is what every home or office 
                                                gets when they have an Fanimic 
                                                Electric electrician handling their electrical problem.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- featured-box end-->
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!--featured-box-->
                                <div class="featured-box left-icon">
                                    <div class="featured-icon icon-shape-square icon-bgcolor-grey"> 
                                        <i class="flaticon flaticon-cargo-ship"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5> 24/7 Service  </h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>
                                                Call Fanimic Electric electrician today for all of your 
                                                electrical services. Count on an Fanimic Electric electrician 
                                                to be on time and bring guaranteed electrical resolutions.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- featured-box end-->
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!--featured-box-->
                                <div class="featured-box left-icon">
                                    <div class="featured-icon icon-shape-square icon-bgcolor-grey"> 
                                        <i class="flaticon flaticon-factory-3"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Certified Engineers</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>
                                                Our team is fully equipped to handle 
                                                everything from new wiring installations 
                                                to troubleshooting and panel repairs. 
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- featured-box end-->
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!--featured-box-->
                                <div class="featured-box left-icon">
                                    <div class="featured-icon icon-shape-square icon-bgcolor-grey"> 
                                        <i class="flaticon flaticon-factory-4"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5> 
                                                Upfront Pricing
                                            </h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>
                                               Fanimic Electric electricians always explain 
                                                what they are going to do - before any work starts.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- featured-box end-->
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 sidebar sidebar-left">
                        @include('frontend/body/services_common')
                        <!-- <aside class="widget widget-download">
                            <h3 class="widget-title">Downloads</h3>
                            <ul class="download">
                                <li><i class="fa fa-file-pdf-o"></i><a href="#">OUR BROCHURE PDF</a></li>
                                <li><i class="fa fa-file-pdf-o"></i><a href="#">OUR ISO CERTIFICATE</a></li>
                                <li><i class="fa fa-file-pdf-o"></i><a href="#">GREATE TECHNOLOGY</a></li>
                            </ul>
                        </aside>  -->
                        <aside class="widget widget_media_image">
                            <a href="{% url 'contact' %}">
                                 <!-- element-style-section -->
                            <section class="element-row element-style">
                                <div class="container">
                                    <!-- <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-title clearfix">
                                                <h3 class="widget-title">Clients Logo</h3>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="client-section2 ttm-bgcolor-darkgrey">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- ttm-client -->
                                                <div class="ttm-client adams-logo2 owl-carousel owl-theme owl-loaded" >
                                                    <div class="client-box">
                                                        <div class="client">
                                                            <div class="ttm-client-logo-tooltip" data-tooltip="Our Service">
                                                                {{-- <img style="height: 100px;" src="{% static 'fanimic/images/farm/electric/electric-1.jpg' %} " alt="image"> --}}
                                                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/electric/electric-1.jpg') }}" alt="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="client-box">
                                                        <div class="client">
                                                            <div class="ttm-client-logo-tooltip" data-tooltip="Our Service">
                                                                {{-- <img style="height: 100px;" src="{% static 'fanimic/images/farm/electric/electric-2.jpg' %} " alt="image"> --}}
                                                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/electric/electric-2.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="client-box">
                                                        <div class="client">
                                                            <div class="ttm-client-logo-tooltip" data-tooltip="Our Service">
                                                                {{-- <img style="height: 100px;" src="{% static 'fanimic/images/farm/electric/electric-13.jpg' %} " alt="image"> --}}
                                                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/electric/electric-13.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="client-box">
                                                        <div class="client">
                                                            <div class="ttm-client-logo-tooltip" data-tooltip="Our Service">
                                                                {{-- <img style="height: 100px;" src="{% static 'fanimic/images/farm/electric/electric-5.jpg' %} " alt="image"> --}}
                                                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/electric/electric-5.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="client-box">
                                                        <div class="client">
                                                            <div class="ttm-client-logo-tooltip" data-tooltip="Our Service">
                                                                {{-- <img style="height: 100px;" src="{% static 'fanimic/images/farm/electric/electric-14.jpg' %} " alt="image"> --}}
                                                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/electric/electric-14.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    
                                                </div><!-- ttm-client end -->      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- element-style-section end-->

                                <!-- <img class="img-fluid" src="{% static 'fanimic/images/banner-image.jpg' %}" alt="banner-image"> -->
                            </a>
                        </aside>
                        <aside class="widget contact-widget">
                            <h3 class="widget-title">Get in touch</h3>      
                            <ul class="contact-widget-wrapper">
                                <li><i class="ti ti-mobile"></i>(+234) 912 687 4608</li>
                                <li><i class="ti ti-comment"></i><a href="mailto:info@fanimic.com" target="_blank">info@fanimic.com</a></li>
                                <!-- <li><i class="ti ti-world"></i><a href="http://www.example.com/" target="_blank">http://www.example.com</a> -->
                                </li>
                                <li><i class="ti ti-location-pin"></i>25, Ayomide Street, Ijako Sango ota, Ogun State, Nigeria.</li>
                                <li><i class="ti ti-alarm-clock"></i>Mon to Fri - 9:00am to 6:00pm <br>(Sunday Closed)</li>
                            </ul>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- ttm-sidebar end -->

        <!--blog-section-->
        <section class="ttm-row blog-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 clearfix">
                            <h2 class="title">
                                We Are<strong>Residential & Commercial Electricians</strong>
                            </h2>
                        <!-- <p>
                            Stay up to date with our latest news, 
                            event schedules and corporate developments for new blogs
                        </p> -->
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mt-0 float-right" href="{{ route('contact.page') }}">Get Quote</a>
                    </div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row">
                    <!-- post-slide -->
                    <div class="post-slide owl-carousel owl-theme owl-loaded row-equal-height">
                        <!-- post -->
                        <div class="post post-topimage box-shadow style2">
                            <div class="post-image">
                                {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/electric/electric-17.png' %} " alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/electric/electric-17.png') }}" alt="">
                                <div class="post-image-icon icon-position-left"><i class="ti ti-pencil"></i></div>
                            </div>
                            <div class="post-desc style2">
                                <div class="post-title">
                                    <h5><a href="">
                                        Residential Electrical Services
                                    </a> </h5>
                                </div>
                                <!-- <div class="post-meta">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-user"></i>Alex</li>
                                        <li><i class="fa fa-calendar"></i>August 1, 2018</li>
                                    </ul>
                                </div> -->
                                <p>
                                    Fanimic Electric is equipped with the latest diagnostic 
                                    and electrical technology for electrical troubleshooting, 
                                    repairs, and installations, from circuit breaker replacements 
                                    and aluminum wiring repair 
                                    to landscape lighting and ceiling fan installation.
                                </p>
                                {{-- <a class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right" href="{{ route('contact.page') }}">Contact Us<i class="ti ti-arrow-right"></i></a> --}}
                            </div>
                        </div><!-- post end -->
                        <!-- post -->
                        <div class="post post-topimage box-shadow style2">
                            <div class="post-image">
                                {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/electric/electric-1.jpg' %} " alt=""> --}}
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/electric/electric-1.jpg') }}" alt="">
                                
                                <div class="post-image-icon icon-position-left"><i class="ti ti-pencil"></i></div>
                            </div>
                            <div class="post-desc style2">
                                <div class="post-title">
                                    <h5><a href="">Commercial Electrical Services</a> </h5>
                                </div>
                                <!-- <div class="post-meta">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-user"></i>Alex</li>
                                        <li><i class="fa fa-calendar"></i>August 2, 2018</li>
                                    </ul>
                                </div> -->
                                <p>
                                    Fanimic Electric offers commercial electrical services, 
                                    including equipment hook-ups, new power circuits, 
                                    sub-panels, and other installations invaluable to a 
                                    business. From storefront emergency lighting systems 
                                    to tenant build-outs, we can help. No matter the project, 
                                    big or small, we are committed to providing the 
                                    highest quality service possible for your business.
                                </p>
                                {{-- <a class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right" href="{{ route('contact.page') }}">Contact Us<i class="ti ti-arrow-right"></i></a> --}}
                            </div>
                        </div><!-- post end -->
                        <!-- post -->
                        <div class="post post-topimage box-shadow style2">
                            <div class="post-image">
                                {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/electric/electric-3.jpg' %} " alt=""> --}}
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/electric/electric-3.jpg') }}" alt="">

                                <div class="post-image-icon icon-position-left"><i class="ti ti-pencil"></i></div>
                            </div>
                            <div class="post-desc style2">
                                <div class="post-title">
                                    <h5><a href="">New Home Electrical Wiring</a> </h5>
                                </div>
                                <!-- <div class="post-meta">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-user"></i>Alex</li>
                                        <li><i class="fa fa-calendar"></i>August 5, 2018</li>
                                    </ul>
                                </div> -->
                                <p>
                                    Are you investing in a new home or completing a 
                                    renovation? Don’t overlook the importance of planning 
                                    and installing the proper electrical wiring systems for 
                                    your home. When done the right way, this means your 
                                    home is safe and functional for years to come.
                                </p>
                                {{-- <a class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right" href="{{ route('contact.page') }}">Contact Us<i class="ti ti-arrow-right"></i></a> --}}
                            </div>
                        </div><!-- post end-->
                        
                    </div><!-- post-slide end -->
                </div><!-- row end-->
            </div>
        </section>
        <!--blog-section end-->
    </div><!--site-main end-->

    <br><br>
    @endsection
