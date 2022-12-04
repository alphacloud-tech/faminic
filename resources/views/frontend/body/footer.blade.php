@php
   
    $contacts = App\Models\Home\HomeContact::findOrFail(1);
    $services = App\Models\Home\HomeService::all();
   
@endphp

<footer class="footer widget-footer clearfix">
    <div class="first-footer bg-img7 ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 widget-area">  
                <div class="widget widget-out-link clearfix">
                        <i class="fa fa-phone"></i>
                        <h3 class="widget-title">Have a question? call us now</h3>
                        <p>Office 1:  {{ $contacts->phone_1 }}<br>Office 2:  {{ $contacts->phone_2 }}</p>
                        <p>Office 3:  {{ $contacts->phone_3 }}<br>Office 4:  {{ $contacts->phone_4 }}</p>
                        <a class="ttm-btn btn-inline style2" href="{{ route('contact.page') }}">Contact Us</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 widget-area">  
                <div class="widget widget-out-link clearfix">
                        <i class="fa fa-envelope-o"></i>
                        <h3 class="widget-title">Need support? Drop us an email</h3>
                        <p>{{ $contacts->email_1 }}<br>{{ $contacts->email_2 }}</p>
                        <a class="ttm-btn btn-inline style2" href="#">Fill Our Form</a>
                    </div>
                </div> 
                
                <div class="col-xs-12 col-sm-12 col-md-4 widget-area">
                    <div class="widget widget-out-link clearfix">
                        <i class="fa fa-clock-o"></i>
                        <h3 class="widget-title">We are open on</h3>
                        <p>Mon – Sat 07:00 – 21:00<br>Sunday – Closed</p>
                        <a class="ttm-btn btn-inline style2" href="#">View More</a>
                    </div>
                </div>
            </div><!-- row end -->    
        </div>
    </div>
    <div class="second-footer ttm-textcolor-dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 widget-area">
                    <div class="widget style2 widget-out-link clearfix">
                        <div class="footer-logo">
                            <img id="footer-logo-img" class="img-center" src="{{ asset('frontend/images/footer-logo.png') }} " alt="">
                        </div><br>
                        <p>Fanimic Global Resources, We are Nigeria-based commercial and residential contracting company with a focus on new Building Construction, Electrical Installation, Pure and Bottle Water Manufacturing, Renovations, Interior and Exterior remodeling as well as Gardner and Security.</p>
                        <ul class="widget-contact mt-25">
                            <li><i class="ti ti-mobile"></i> {{ $contacts->phone_1 }}</li>
                            <li><i class="ti ti-comment"></i><a href="">{{ $contacts->email_1 }}</a></li>
                            <li><i class="ti ti-location-pin"></i>{!! $contacts->address !!}</li>
                        </ul>
                        <div class="social-icons social-hover mt-15">
                            <ul class="list-inline">
                                <li class="social-facebook"><a class="tooltip-top" target="_blank" href="" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 widget-area">
                    <div class="widget style2 widget-out-link clearfix">
                    <h3 class="widget-title">Our Services</h3>
                        <ul id="menu-footer-services">
                            <li><a href="{{ route('services.page') }}">Our Services</a></li>
                            <li><a href="{{ route('team.page') }}">Our Team</a></li>
                            <li><a href="{{ route('building.page') }}">Building Construction</a></li>
                            <li><a href="{{ route('eletrical.page') }}">Electrical Installation</a></li>
                            <li><a href="{{ route('agriculture.page') }}">Agriculture</a></li>
                            <li><a href="{{ route('about.page') }}">About Us</a></li>
                            <li><a href="{{ route('project.page') }}">Our Project</a></li>
                            <li><a href="{{ route('manufacturing.page') }}">Bottle & Pure Water</a></li>
                            <li><a href="{{ route('interiors.page') }}">Interiors & Exteriors Decorator</a></li>
                            <li><a href="{{ route('agriculture.page') }}">Fumigation & Pests Control</a></li>
                        </ul>
                    </div>
                    {{-- <div class="widget style2 widget-out-link clearfix">
                    <h3 class="widget-title">Newsletter</h3>
                    <p>Subscribe to our newsletter to receive latest news on our services.</p>
                        <form id="subscribe-form" method="post" action="#" data-mailchimp="true">
                            <div class="mailchimp-inputbox clearfix" id="subscribe-content"> 
                                <p>
                                    <i class="fa fa-envelope-o"></i>
                                    <input type="email" name="email" placeholder="Email Addess.." required="">
                                </p>
                                <p><button class="form-btn" type="submit" title="Send" value="Send">Join</button></p>
                            </div>
                            <div id="subscribe-msg"></div>
                        </form>
                    </div> --}}
                </div>
               
            </div>
        </div>
    </div>
    <div class="bottom-footer-text ttm-bottom-footer-text ttm-bgcolor-darkgrey ttm-textcolor-white">
        <div class="container">
            <div class="row copyright">
                <div class="col-md-6">
                    <div class=" ttm-footer2-left">
                    <span>Copyright © 2022&nbsp;<a href="">Fanimic Global Resources</a>. All rights reserved.</span></div>
                </div>
                <div class="col-md-6 ttm-footer2-right">
                    <ul id="menu-footer-menu" class="footer-nav-menu">
                        {{-- <li><a href="#">Privacy Policy</a></li> --}}
                        <li><a href="{{ route('contact.page') }}">Contact</a></li>
                        <li><a href="{{ route('about.page') }}">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>