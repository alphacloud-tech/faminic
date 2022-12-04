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
    {{ $abouts->coy_name }} | About
@endsection


    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div style="background-color:rgb(2,13,38)"  class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">About Our Company</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                            <span><span>About Us </span></span>
                        </div>  
                    </div>
                </div>
            </div>
        </div>                    
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!--intro-section-->
        <section class="ttm-row intro-section style2 bg-layer break-1199-colum ttm-bgcolor-white clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <!-- about-img -->
                        <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-left-span pt-65 pb-35">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer ttm-bgcolor-grey"></div>
                            <div class="layer-content">
                                <div class="about-img about-2 mb-35 mr_240 res-1200-mr-0">
                                    <img class="img-fluid" src="{{ asset('frontend/images/farm/building-1.jpg') }} " alt="">
                                </div>
                            </div>
                        </div>
                        <!-- about-img end -->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <div class="pl-15 pt-55">
                                    <!-- section title -->
                                    <div class="section-title clearfix">
                                        <h2 class="title">About<strong>Fanimic Global Resources </strong></h2>
                                        <div class="heading-seperator"><span></span></div>
                                        <p>
                                            <strong>
                                                Fanimic Global Resources, We are Nigeria-based 
                                                commercial and residential contracting company with a 
                                                focus on new Building Construction, Electrical Installation, 
                                                Pure and Bottle Water Manufacturing, Renovations, 
                                                Interior and Exterior Design, as well as Agriculture &amp; 
                                                fumigation services.. 
                                                <!--Interior and Exterior Design, as well as Gardner &amp; Security -->
                                                <!--fumigation services.. -->
                                            </strong>
                                        </p>
                                    </div><!-- section title end -->
                                    <p class="mt_15">
                                        We are one of leading company in General Constactor industry such as
										building construction, electrical Installation, pure &amp; bottle water 
                                        manufacturing,
										interior &amp; exterior design, agriculture  and 
										fumigation services. 
                                    </p>
                                    <p class="mb-35">
                                        Fanimic Global Resources has completed differents projects
                                        in all 
                                        industrial sectors. 
                                        We have 29 years of experience to give you better results.
                                        With a never
                                        ending customer support we are able to guarantee a very high 
                                        level of satisfaction of our clients. We offer the cleanest 
                                        line of services with latest technology, equipment. We offer 
                                        the best line of services with latest technology.
                                    </p>
                                    <!--<h3 class="about-author-name"> Engr Muyiwa Olaniyi Micheal </h3>-->
                                    <!--<span><img style="height: 80px; width: 180px;" src="{% static 'fanimic/images/farm/team/pastor-sign.png' %}" alt="about-img"></span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- intro-section end -->

       

        <!-- service-section -->
        <section class="ttm-row bg-img1 ttm-bgcolor-darkgrey service-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 with-seprator clearfix">
                            <h2 class="title">General <strong>Contractor Services</strong></h2>
                        <p>
                            We are one of leading company in General Contractor industry 
                            such as Building Construction, Electrical Installation, 
                            Pure and Bottle Water 
                            Manufacturing, Interior and Exterior Design.
                        </p>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mt-30 mb-35 res-991-mtb-0 float-right" href="{{ route('services.page') }}">More Services</a>
                    </div>
                    <div class="col-lg-12">
                        <div class="separator mb-45 res-991-pt-50">
                            <div class="sep-line"></div>
                        </div>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style2 text-center">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-factory-4"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Building Construction</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Into the world of construction Fanimic Global Resources Building 
										Contracting embarked modestly and today it’s an established name to 
										reckon within country.  
                                    </p>
                                    <a class="ttm-btn ttm-btn-color-skincolor btn-inline" href="{{ route('building.page') }}">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>
                   
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style2 text-center">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-drilling"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Electrical Installation</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Fanimic Electric is a full-service residential & 
										commercial electrical contractor in Nigeria, providing 
										various electrical services.
                                    </p>
                                    <a class="ttm-btn ttm-btn-color-skincolor btn-inline" href="{{ route('eletrical.page') }}">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style2 text-center">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-conveyor"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Interiors &amp; Exteriors Decorator</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Fanimic Global Resource is your one stop exterior & 
										interior designs and interior decorator service providers. 
										At Fanimic Global Resource we are one of the best in the 
										Industry, providing cost-effective and reliable home decorations.
                                    </p>
                                    <a class="ttm-btn ttm-btn-color-skincolor btn-inline" href="{{ route('interiors.page') }}">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style2 text-center">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-robot-arm"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Bottle &amp; Pure Water Manufacturing</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Fanimic Global Resources produce high water Intensity. 
										Our core interest is in providing clean hygienic water 
										and innovative water dispensers with accessories and technology 
										that supports healthy water drinking habit for all.
                                    </p>
                                    <a class="ttm-btn ttm-btn-color-skincolor btn-inline" href="{{ route('manufacturing.page') }}">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style2 text-center">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-stock"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Agriculture</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We specializes in general agricultural business 
                                        and services including: 
                                        Palm Oil Production, Fumigation and Gardner.
                                        Our main goal is to get major growth in 
                                        agricultural output for better agricultural 
                                        services and products.
                                    </p>
                                    <a class="ttm-btn ttm-btn-color-skincolor btn-inline" href="{{ route('agriculture.page') }}">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style2 text-center">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-container"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Fumigation and Pests Control</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We have strength and experience in this services 
                                        which allowed in successfully delivering projects to
                                        number of clients.
                                    </p>
                                    <a class="ttm-btn ttm-btn-color-skincolor btn-inline" href="{{ route('agriculture.page') }}">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-box -->
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- service-section end -->

        <br>
         <!-- element-style-section -->
         <section class="element-row element-style">
            <div class="container-fluid">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title clearfix">
                            <h2 class="title">Team Member</h2>
                        </div>
                    </div>
                </div> -->
                <!-- row -->
                <div class="row">
                    <div class="wrap-team adams1-logo2 owl-carousel">
                        <!-- featured-item -->
                        <div class="featured-item ttm-team-view-topimage">
                            <!-- featured-team-item -->
                            <div class="featured-team-item ttm-item-view-topimage"> 
                                <div class="featured-thumbnail">
                                    <img style="height: 250px;" class="img-fluid" src="{{ asset('frontend/images/farm/house-2.png') }} " alt="image"> 
                                </div> 
                                
                            </div><!-- featured-team-item end-->
                            
                        </div><!-- featured-item end-->
                        <!-- featured-item -->
                        <div class="featured-item ttm-team-view-topimage">
                            <!-- featured-team-item -->
                            <div class="featured-team-item ttm-item-view-topimage"> 
                                <div class="featured-thumbnail">
                                    <img style="height: 250px;" class="img-fluid" src="{{ asset('frontend/images/farm/house-1.png') }} " alt="image"> 

                                </div> 
                               
                            </div><!-- featured-team-item end-->
                            
                        </div><!-- featured-item end-->

                        <!-- featured-item -->
                        <div class="featured-item ttm-team-view-topimage">
                            <!-- featured-team-item -->
                            <div class="featured-team-item ttm-item-view-topimage"> 
                                <div class="featured-thumbnail">
                                    <img style="height: 250px;" class="img-fluid" src="{{ asset('frontend/images/farm/electric/electric-3.jpg') }} " alt="image"> 

                                </div> 
                                
                            </div><!-- featured-team-item end-->
                            
                        </div><!-- featured-item end-->
                        <!-- featured-item -->
                        <div class="featured-item ttm-team-view-topimage">
                            <!-- featured-team-item -->
                            <div class="featured-team-item ttm-item-view-topimage"> 
                                <div class="featured-thumbnail">
                                    <img style="height: 250px;" class="img-fluid" src="{{ asset('frontend/images/farm/electric/electric-13.jpg') }} " alt="image"> 

                                </div> 
                                
                            </div><!-- featured-team-item end-->
                            
                        </div><!-- featured-item end-->
                        <!-- featured-item -->
                        <div class="featured-item ttm-team-view-topimage">
                            <!-- featured-team-item -->
                            <div class="featured-team-item ttm-item-view-topimage"> 
                                <div class="featured-thumbnail">
                                    <img style="height: 250px;" class="img-fluid" src="{{ asset('frontend/images/farm/electric/electric-14.jpg') }} " alt="image"> 

                                </div> 
                                
                            </div><!-- featured-team-item end-->
                            
                        </div><!-- featured-item end-->

                        <!-- featured-item -->
                        <div class="featured-item ttm-team-view-topimage">
                            <!-- featured-team-item -->
                            <div class="featured-team-item ttm-item-view-topimage"> 
                                <div class="featured-thumbnail">
                                    <img style="height: 250px;" class="img-fluid" src="{{ asset('frontend/images/farm/water-14.jpg') }} " alt="image"> 

                                </div> 
                                
                            </div><!-- featured-team-item end-->
                            
                        </div><!-- featured-item end-->
                        <!-- featured-item -->
                        <div class="featured-item ttm-team-view-topimage">
                            <!-- featured-team-item -->
                            <div class="featured-team-item ttm-item-view-topimage"> 
                                <div class="featured-thumbnail">
                                    <img style="height: 250px;" class="img-fluid" src="{{ asset('frontend/images/farm/water-3.jpg') }} " alt="image"> 

                                </div> 
                                
                            </div><!-- featured-team-item end-->
                            
                        </div><!-- featured-item end-->

                        <!-- featured-item -->
                        <div class="featured-item ttm-team-view-topimage">
                            <!-- featured-team-item -->
                            <div class="featured-team-item ttm-item-view-topimage"> 
                                <div class="featured-thumbnail">
                                    <img style="height: 250px;" class="img-fluid" src="{{ asset('frontend/images/farm/farm-3.jpg') }} " alt="image"> 

                                </div> 
                                
                            </div><!-- featured-team-item end-->
                            
                        </div><!-- featured-item end-->
                        
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- element-style-section end-->



        <!-- fid-section -->
        <section class="ttm-row fid-section bg-img5 ttm-bg ttm-bgimage-yes ttm-bgcolor-skincolor clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row box-connect ttm-bgimage-position-center_center ttm-bgimage-fixed">
                    <div class="col-md-3">
                        <div class="ttm-fid ttm-fid-icon ttm-fid-top-icon-border">
                            <div class="ttm-fid-icon-wrapper"><i class="flaticon flaticon-factory-2"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "10"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >3570
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Projects<br></span></h3>
                            </div><!-- ttm-fld-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ttm-fid ttm-fid-icon ttm-fid-top-icon-border">
                            <div class="ttm-fid-icon-wrapper"><i class="fa fa-users"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "10"
                                            data-interval         = "5"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >6450
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Clients<br></span></h3>
                            </div><!-- ttm-fld-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ttm-fid ttm-fid-icon ttm-fid-top-icon-border">
                            <div class="ttm-fid-icon-wrapper"><i class="fa fa-smile-o"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "10"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >5870
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Satisfaction<br></span></h3>
                            </div><!-- ttm-fld-contents end-->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ttm-fid ttm-fid-icon ttm-fid-top-icon-border">
                            <div class="ttm-fid-icon-wrapper"><i class="flaticon flaticon-worker"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "50"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >2570
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Engineer<br></span></h3>
                            </div><!-- ttm-fld-contents end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fid-section end -->


        <!--blog-section-->
        <section class="ttm-row about-team-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row res-991-mb-50 ">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 clearfix">
                            <h2 class="title">Meet Our<strong>Executive Team</strong></h2>
                            <p>
                                Fanimic Global Resources has 29+ years of 
                                experience with providing wide 
                                area of specialty services. 
                            </p>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mtb-0 float-right" href="{{ route('team.page') }}">View All Team</a>
                    </div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row">
                    <div class="wrap-team team-slide owl-carousel break-991-colum">
                        
                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/0021.png') }} " alt="image"> 
                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end--> 
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Engr Muyiwa Olaniyi</a></h5>
                                        <p class="category">Chief Executive Officer</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 703 373 6586" tabindex="0">+234 703 373 6586</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:olaniyi@fanimic.com" tabindex="0">olaniyi@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/01.png') }} " alt="image"> 
                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Mrs Muyiwa Olumide</a></h5>
                                        <p class="category">Executive Marketing Manager</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 814 621 2205" tabindex="0">+234 814 621 2205</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:olumide@fanimic.com" tabindex="0">olumide@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/003.png') }} " alt="image"> 

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Adu Adekunle</a></h5>
                                        <p class="category">Client Services Executive</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 805 021 9206" tabindex="0">+234 805 021 9206</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:adekunle@fanimic.com" tabindex="0">adekunle@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/2.jpg') }} " alt="image"> 

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Agboola Oluwaseyi</a></h5>
                                        <p class="category">Sales Manager</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 706 839 4709" tabindex="0">+234 706 839 4709</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:info@example.com" tabindex="0">oluwaseyi@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/3.jpg') }} " alt="image"> 

                                    </div>
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div> 
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Ogunbiyi Michael</a></h5>
                                        <p class="category">Social Media Marketer</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 814 253 3858" tabindex="0">+234 814 253 3858</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:michael@fanimic.com" tabindex="0">michael@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/10.jpg') }} " alt="image"> 

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Afolabi Ope </a></h5>
                                        <p class="category">Accountant</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 803 937 2136" tabindex="0">+234 803 937 2136</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:ope@fanimic.com" tabindex="0">ope@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/6.jpg') }} " alt="image"> 

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Oni Peter </a></h5>
                                        <p class="category">Logistics Manager</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 701 099 2202" tabindex="0">+234 701 099 2202</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:peter@fanimic.com" tabindex="0">peter@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->
                        
                    </div>
                </div><!-- row end -->
            
            </div>
        </section>
        <!--blog-section end-->

    </div><!--site-main end-->

<br><br>
 @endsection

    