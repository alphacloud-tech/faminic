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
    {{ $abouts->coy_name }} | Agriculture
@endsection
  
    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div style="background-color:rgb(2,13,38)" class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">Agriculture</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                            <span><span>Agriculture</span></span>
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
                                    <h3>Agriculture Services</h3> 
                                    <!-- 4381095508 peter amechi eco -->
                                    <p>
                                        Fanimic Global Resource is a limited company 
                                        established in Nigeria. It specializes in 
                                        general agricultural business and services including: Palm Oil Production,
                                        Fumigation and Gardner.

                                        Fanimic Global Resource Limited has a team of 
                                        dedicated professionals including horticulturists/agronomists, 
                                        agricultural economists, soil scientists, natural resource 
                                        management experts, agribusiness and enterprise development 
                                        professionals, animal health scientists, food scientists, 
                                        business developers, social science professionals and agricultural 
                                        engineers. <strong> Few can match for our promise to safety and 
                                        commitment to our products and services.</strong>  with latest technology, equipment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- portfolio-slide -->
                            <div class="col-lg-12 ttm-boxes-spacing-5px portfolio-slide owl-carousel owl-theme owl-loaded">
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-12.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-12.jpg') }}" alt="image"></a>
                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-11.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-11.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-5.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-5.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-4.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-4.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-10.png' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-10.png') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-2.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-2.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-9.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-9.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                            </div>

                            {{-- <div class="col-md-8 pr-5 res-767-plr-15"><img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/agri-2.jpg' %}" alt="agri-2"></div> --}}
                            <div class="col-md-8 pr-5 res-767-plr-15"><img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/agri-2.jpg') }}" alt="agri-2"></div>
                            <div class="col-md-4 pl-0 res-767-plr-15">
                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/agri-5.jpg' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/agri-5.jpg') }}" alt="">
                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/agri-10.png' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/agri-10.png') }}" alt="">
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
                        <!-- <aside class="widget widget_media_image">
                            <a href="{% url 'contact' %}"><img class="img-fluid" src="{% static 'fanimic/images/banner-image.jpg' %}" alt="banner-image"></a>
                        </aside> -->
                        <aside class="widget contact-widget">
                            <h3 class="widget-title">Get in touch</h3>      
                            <ul class="contact-widget-wrapper">
                                <li><i class="ti ti-mobile"></i>
                                    +(234) 912 687 4608 <br>
                                    +(234) 703 902 7816
                                </li>
                                <li><i class="ti ti-comment"></i><a href="mailto:info@fanimic.com" target="_blank">info@fanimic.com</a></li>
                                <!-- <li><i class="ti ti-world"></i><a href="http://www.example.com/" target="_blank">http://www.example.com</a> 
                                </li>-->
                                <li><i class="ti ti-location-pin"></i>329, College Rd, Eleyo, Opp. High Court, Ikere Ekiti, Ekiti State.</li>
                                <li><i class="ti ti-alarm-clock"></i>Mon to Fri - 9:00am to 6:00pm <br>(Sunday Closed)</li>
                            </ul>
                        </aside>
                        <aside class="widget widget_media_image">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3553.982872363502!2d5.211792263143938!3d7.494212219371794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047f1f640db3257%3A0x752f40639d3ab94b!2sEleyo%20High%20School!5e1!3m2!1sen!2sng!4v1634451517606!5m2!1sen!2sng" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.7263458304615!2d5.210345263602002!3d7.495435613183215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047f1f640da17ef%3A0x7f3a40144355f014!2sEleyo%20High%20School%2C%20361101%2C%20Ikere!5e0!3m2!1sen!2sng!4v1634450844540!5m2!1sen!2sng" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                            <!--<a href="{% url 'contact' %}"><img class="img-fluid" src="{% static 'fanimic/images/banner-image.jpg' %}" alt="banner-image"></a>-->
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- ttm-sidebar end -->
        

        <section class="ttm-row bg-img8">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 res-767-mb-30">
                        <!-- featured-item -->
                        <div class="featured-item">
                            <div class="featured-thumbnail">
                                {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-5.jpg' %} " alt=""> --}}
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-5.jpg') }}" alt="">
                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-size-md icon-shape-square"> 
                                    <i class="flaticon flaticon-robot-arm"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5> <span style="color: coral;">FUMIGATION</span> SERVICES</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Fanimic offers a professional clean to suit your office and home environments. We work to determine which solution best meets your specific needs. Let us provide a tailor-made solution to ensure all your requirements are met.
                                        We are proud of our home cleaning services, we are always ready to provide quality and affordable services and ensuring the job is done to the highest quality.
                                        </p>
                                        <!-- <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="#">Read More<i class="ti ti-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item -->
                    </div>
                    <div class="col-md-4 res-767-mb-30">
                        <!-- featured-item -->
                        <div class="featured-item">
                            <div class="featured-thumbnail">
                                {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-9.jpg' %} " alt="blog-img"> --}}
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-9.jpg') }}" alt="blog-img">
                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-size-md icon-shape-square"> 
                                    <i class="flaticon flaticon-factory-4"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5> <span style="color: coral;">PALM OIL</span> PRODUCTION</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Fanimic Global Resources is one of the leading national private companies in Nigeria that produces crude palm oil through plantations that are managed sustainably.Our business activities include seedling, planting and processing fresh fruit bunches (FFB) to produce sustainable crude palm oil and crude palm kernel oil (CPKO) in our mills that are technologically advanced and energy self-sufficient.</p>
                                        <!-- <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="#">Read More<i class="ti ti-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item -->
                    </div>
                    <div class="col-md-4 res-767-mb-30">
                        <!-- featured-item -->
                        <div class="featured-item">
                            <div class="featured-thumbnail">
                                {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-8.jpeg' %} " alt="blog-img"> --}}
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-8.jpeg') }}" alt="blog-img">
                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-size-md icon-shape-square"> 
                                    <i class="flaticon flaticon-conveyor"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5> <span style="color: coral;">GARDNER </span> SERVICES</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>At Fanimic Global Resources we take great pride in being able to perform a wide array of gardening tasks including flower planting, bush and shrub trimming and a whole lot more. We understand the kind of impact a great looking garden can have in increasing a home's value, and our team of independent gardening technicians will provide you with service that will be worth your money.</p>
                                        <!-- <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="#">Read More<i class="ti ti-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item -->
                    </div>
                </div><!-- row end -->
            </div>
        </section>

    </div><!--site-main end-->

<br><br>
@endsection
