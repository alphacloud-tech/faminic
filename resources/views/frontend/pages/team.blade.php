@extends("frontend.home_master")



@section("home_frontend")

@php
    $sliders = App\Models\Home\HomeSlider::latest()->paginate(4);

    $abouts = App\Models\Home\HomeAbout::findOrFail(1);
    $services = App\Models\Home\HomeService::all();
    $testimonials = App\Models\Home\HomeTestimonial::latest()->get();
    $multiImages = App\Models\Home\MultiImage::latest()->paginate(6);
@endphp


    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div style="background-color:rgb(2,13,38)"  class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">Our Team</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                            <span><span>Our Team</span></span>
                        </div>  
                    </div>
                </div>
            </div>
        </div>                
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!-- intro-section -->
        <section class="ttm-row pt-70 pb-50 ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title -->
                        <div class="section-title mb-35 clearfix">
                            <h2 class="title"><strong>Meet Our Team</strong></h2>
                            <div class="heading-seperator"><span></span></div>
                            <p>Our people at Fanimic Global Resources’ are most valuable 
                                assets. They are the faces of our organization. 
                                They are the individuals who see your project from 
                                start to finish and work together to ensure the end 
                                result is everything you hoped for and much more!.</p>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-12 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/0021.png') }} " alt="">
                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end -->
                            </div>
                            <div class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
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
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-12 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/01.png') }} " alt="">
                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
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

                    </div>

                    <div class="col-md-6 col-sm-12">
                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-12 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/003.png') }} " alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
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

                    </div>

                    <div class="col-md-6 col-sm-12">
                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-12 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/2.png') }} " alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
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

                    </div>

                    <div class="col-md-6 col-sm-12">
                         <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-12 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/3.jpg') }} " alt="">

                                    </div>
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div> 
                            <div class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
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

                    </div>

                    <div class="col-md-6 col-sm-12">
                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-12 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/10.jpg') }} " alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="team-details.html">Afolabi Ope </a></h5>
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

                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                         <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-12 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/6.jpg') }} " alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-12 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="team-details.html">Oni Peter </a></h5>
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
        <!-- intro-section end -->
        
    </div><!--site-main end-->

    <br><br>
    @endsection