
@extends("frontend.home_master")



@section("home_frontend")

@php
    $sliders = App\Models\Home\HomeSlider::latest()->paginate(4);

    $abouts = App\Models\Home\HomeAbout::findOrFail(1);
    $contacts = App\Models\Home\HomeContact::findOrFail(1);
    $services = App\Models\Home\HomeService::all();
    $testimonials = App\Models\Home\HomeTestimonial::latest()->get();
    $multiImages = App\Models\Home\MultiImage::latest()->paginate(6);
@endphp

@section('title')
    {{ $abouts->coy_name }} | Home
@endsection

<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">

    <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.4.8">
        <div class="slotholder"></div>
        <ul>
            
            <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <img src="{{ asset('frontend/images/slides/3-2.jpg') }}" alt="" title="slider-mainbg-002" width="1920" height="725" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                <div class="tp-caption haeding-slide heilight-white-text" id="slide-11-layer-15" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['179','179','51','-90']"
                    data-fontsize="['90','90','65','45']"
                    data-lineheight="['100','100','75','55']"
                    data-fontweight="['600','600','600','600']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":240,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">We Build 
                </div>
                <div class="tp-caption haeding-slide heilight-white-text" id="slide-11-layer-16" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['265','265','113','-39']"
                    data-fontsize="['90','90','65','45']"
                    data-lineheight="['100','100','75','55']"
                    data-fontweight="['600','600','600','600']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":750,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">The <strong>Great</strong> Future
                </div>
                <a class="tp-caption tm-simple-link " href="#" target="_self" id="slide-11-layer-17" data-x="['center','center','center','center']" data-hoffset="['-521','-421','-316','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-fontsize="['20','20','18','16']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">Best Ideas 
                </a>
                <div class="tp-caption tp-dash-shape tp-shapewrapper " id="slide-11-layer-18" data-x="['center','center','center','center']" data-hoffset="['-454','-354','-254','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-width="7"
                    data-height="3"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"> 
                </div>
                <a class="tp-caption tm-simple-link " href="#" target="_self" id="slide-11-layer-19" data-x="['center','center','center','center']" data-hoffset="['-371','-271','-176','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-fontsize="['20','20','18','16']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">Best Solutions 
                </a>
                <div class="tp-caption tp-dash-shape tp-shapewrapper " id="slide-11-layer-20" data-x="['center','center','center','center']" data-hoffset="['-286','-186','-96','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-width="7"
                    data-height="3"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"> 
                </div>
                <a class="tp-caption tm-simple-link " href="#" target="_self" id="slide-11-layer-21" data-x="['center','center','center','center']" data-hoffset="['-217','-117','-31','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-fontsize="['20','20','18','16']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">Best Result 
                </a>
                <div class="tp-caption desc-slide" id="slide-11-layer-22" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['middle','middle','middle','middle']" data-voffset="['90','90','44','21']"
                    data-fontsize="['16','16','14','13']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":950,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['left','left','left','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                   
						
                    data-paddingleft="[0,0,0,0]"> We offer the most complete building , construction services in the country, from the<br>  
                    design and development of projects. 
            
                </div>
                <a class="tp-caption classic-border-button " href="{{ route('services.page') }}" target="_self" id="slide-1-layer-18" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['middle','middle','middle','middle']" data-voffset="['190','190','124','72']"
                    data-fontsize="['16','16','14','12']"
                    data-lineheight="['16','16','14','12']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1320,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(3,15,41);bg:rgb(255,255,255);bc:transparent;br:0px 0px 0px 0px;"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[18,18,15,12]"
                    data-paddingright="[30,30,25,20]"
                    data-paddingbottom="[18,18,15,12]"
                    data-paddingleft="[30,30,25,20]">More Services
                </a>

                <a class="tp-caption highlight-skin-button" href="{{ route('contact.page') }}" target="_self" id="slide-4-layer-8" data-x="['left','center','right','center']" data-hoffset="['249','240','-156','45']" data-y="['middle','middle','middle','middle']" data-voffset="['190','190','124','115']" 
                    data-fontsize="['16','16','14','12']"
                    data-lineheight="['16','16','14','12']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1470,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","e":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[16,16,15,12]"
                    data-paddingright="[30,30,25,20]"
                    data-paddingbottom="[16,16,15,12]"
                    data-paddingleft="[30,30,25,20]">Get a Quote 
                </a>
                
            </li>
            <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <img src="{{ asset('frontend/images/slides/4-1.jpg') }}" alt="" title="slider-mainbg-002" width="1920" height="725" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                <div class="tp-caption haeding-slide heilight-white-text" id="slide-11-layer-15" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['179','179','51','-90']"
                    data-fontsize="['90','90','65','45']"
                    data-lineheight="['100','100','75','55']"
                    data-fontweight="['600','600','600','600']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":240,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">Design With
                </div>
                <div class="tp-caption haeding-slide heilight-white-text" id="slide-11-layer-16" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['265','265','113','-39']"
                    data-fontsize="['90','90','65','45']"
                    data-lineheight="['100','100','75','55']"
                    data-fontweight="['600','600','600','600']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":750,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">A Dash of <strong>Style</strong> 
                </div>
                <a class="tp-caption tm-simple-link " href="#" target="_self" id="slide-11-layer-17" data-x="['center','center','center','center']" data-hoffset="['-521','-421','-316','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-fontsize="['20','20','18','16']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">We Build 
                </a>
                <div class="tp-caption tp-dash-shape tp-shapewrapper " id="slide-11-layer-18" data-x="['center','center','center','center']" data-hoffset="['-454','-354','-254','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-width="7"
                    data-height="3"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"> 
                </div>
                <a class="tp-caption tm-simple-link " href="#" target="_self" id="slide-11-layer-19" data-x="['center','center','center','center']" data-hoffset="['-371','-271','-176','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-fontsize="['20','20','18','16']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">We Design 
                </a>
                <div class="tp-caption tp-dash-shape tp-shapewrapper " id="slide-11-layer-20" data-x="['center','center','center','center']" data-hoffset="['-286','-186','-96','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-width="7"
                    data-height="3"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"> 
                </div>
                <a class="tp-caption tm-simple-link " href="#" target="_self" id="slide-11-layer-21" data-x="['center','center','center','center']" data-hoffset="['-217','-117','-31','10']" data-y="['middle','middle','middle','middle']" data-voffset="['31','31','-6','21']"
                    data-fontsize="['20','20','18','16']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-visibility="['on','on','on','off']"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1160,"speed":460,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">We Execute 
                </a>
                <div class="tp-caption desc-slide" id="slide-11-layer-22" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['middle','middle','middle','middle']" data-voffset="['90','90','44','21']"
                    data-fontsize="['16','16','14','13']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":950,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['left','left','left','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                   
						
                    data-paddingleft="[0,0,0,0]"> We create space that bring a smile to your face.<br>  
                    Your home is the true embodiment of your tastes and your lifestyle. 
                . 
                </div>
                <a class="tp-caption classic-border-button " href="{{ route('services.page') }}" target="_self" id="slide-1-layer-18" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['middle','middle','middle','middle']" data-voffset="['190','190','124','72']"
                    data-fontsize="['16','16','14','12']"
                    data-lineheight="['16','16','14','12']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1320,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(3,15,41);bg:rgb(255,255,255);bc:transparent;br:0px 0px 0px 0px;"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[18,18,15,12]"
                    data-paddingright="[30,30,25,20]"
                    data-paddingbottom="[18,18,15,12]"
                    data-paddingleft="[30,30,25,20]">More Services
                </a>

                <a class="tp-caption highlight-skin-button" href="{{ route('contact.page') }}" target="_self" id="slide-4-layer-8" data-x="['left','center','right','center']" data-hoffset="['249','240','-156','45']" data-y="['middle','middle','middle','middle']" data-voffset="['190','190','124','115']" 
                    data-fontsize="['16','16','14','12']"
                    data-lineheight="['16','16','14','12']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1470,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","e":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[16,16,15,12]"
                    data-paddingright="[30,30,25,20]"
                    data-paddingbottom="[16,16,15,12]"
                    data-paddingleft="[30,30,25,20]">Get a Quote 
                </a>
                
            </li>
            <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                <img src="{{ asset('frontend/images/slides/2-2.jpg') }}" alt="" title="slider-mainbg-001" width="1920" height="725" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                <div class="tp-caption haeding-slide" id="slide-3-layer-5" data-x="['right','right','right','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['179','179','51','-90']"
                    data-fontsize="['90','90','65','45']"
                    data-lineheight="['100','100','75','55']"
                    data-fontweight="['600','600','600','600']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":240,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">Electrical 
                </div>
                <div class="tp-caption haeding-slide" id="slide-3-layer-6" data-x="['right','right','right','center']" data-hoffset="['50','50','30','0']" data-y="['top','top','top','middle']" data-voffset="['265','265','113','-39']"
                    data-fontsize="['90','90','65','45']"
                    data-lineheight="['100','100','75','55']"
                    data-fontweight="['600','600','600','600']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":240,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">
                    Contractor <strong>Services</strong></div>
                <div class="tp-caption desc-slide" id="slide-3-layer-7" data-x="['right','right','right','center']" data-hoffset="['50','40','30','0']" data-y="['middle','middle','middle','middle']" data-voffset="['41','56','6','21']"
                    data-fontsize="['16','16','14','13']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":950,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['right','right','right','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">
                    We have extensive experience working on all types of residential and commercial <br> electrical systems and will ensure that your systems are safe to use.
                </div>
                <a class="tp-caption highlight-skin-button" href="{{ route('services.page') }}" target="_self" id="slide-4-layer-8" data-x="['right','right','right','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','middle','middle']" data-voffset="['478','482','91','120']" 
                    data-fontsize="['16','16','14','12']"
                    data-lineheight="['16','16','14','12']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1470,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","e":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[16,16,15,12]"
                    data-paddingright="[30,30,25,20]"
                    data-paddingbottom="[16,16,15,12]"
                    data-paddingleft="[30,30,25,20]">Our Services 
                </a>

                <a class="tp-caption classic-border-button" href="{{ route('contact.page') }}" target="_self" id="slide-4-layer-9" data-x="['right','right','right','center']" data-hoffset="['243','233','200','0']" data-y="['top','top','middle','middle']" data-voffset="['477','481','91','70']"
                    data-fontsize="['16','16','14','12']"
                    data-lineheight="['16','16','14','12']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1320,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(3,15,41);bg:rgb(255,255,255);bc:transparent;br:0px 0px 0px 0px;"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[16,16,15,12]"
                    data-paddingright="[30,30,25,20]"
                    data-paddingbottom="[16,16,15,12]"
                    data-paddingleft="[30,30,25,20]">Contact Us
                    </a>
            </li>
            <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                <img src="{{ asset('frontend/images/slides/1-2.jpg') }}" alt="" title="slider-mainbg-001" width="1920" height="725" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                <div class="tp-caption haeding-slide" id="slide-3-layer-5" data-x="['right','right','right','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['179','179','51','-90']"
                    data-fontsize="['90','90','65','45']"
                    data-lineheight="['100','100','75','55']"
                    data-fontweight="['600','600','600','600']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":240,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">Electrical 
                </div>
                <div class="tp-caption haeding-slide" id="slide-3-layer-6" data-x="['right','right','right','center']" data-hoffset="['50','50','30','0']" data-y="['top','top','top','middle']" data-voffset="['265','265','113','-39']"
                    data-fontsize="['90','90','65','45']"
                    data-lineheight="['100','100','75','55']"
                    data-fontweight="['600','600','600','600']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":240,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">
                    Contractor <strong>Services</strong></div>
                <div class="tp-caption desc-slide" id="slide-3-layer-7" data-x="['right','right','right','center']" data-hoffset="['50','40','30','0']" data-y="['middle','middle','middle','middle']" data-voffset="['41','56','6','21']"
                    data-fontsize="['16','16','14','13']"
                    data-lineheight="['28','28','28','22']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-responsive_offset="on"
                    data-frames='[{"delay":950,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['right','right','right','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">
                    We have extensive experience working on all types of residential and commercial <br> electrical systems and will ensure that your systems are safe to use.
                </div>
                <a class="tp-caption highlight-skin-button" href="{{ route('services.page') }}" target="_self" id="slide-4-layer-8" data-x="['right','right','right','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','middle','middle']" data-voffset="['478','482','91','120']" 
                    data-fontsize="['16','16','14','12']"
                    data-lineheight="['16','16','14','12']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1470,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","e":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[16,16,15,12]"
                    data-paddingright="[30,30,25,20]"
                    data-paddingbottom="[16,16,15,12]"
                    data-paddingleft="[30,30,25,20]">Our Services 
                </a>

                <a class="tp-caption classic-border-button" href="{{ route('contact.page') }}" target="_self" id="slide-4-layer-9" data-x="['right','right','right','center']" data-hoffset="['243','233','200','0']" data-y="['top','top','middle','middle']" data-voffset="['477','481','91','70']"
                    data-fontsize="['16','16','14','12']"
                    data-lineheight="['16','16','14','12']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text"
                    data-actions=''
                    data-responsive_offset="on"
                    data-frames='[{"delay":1320,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"500","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(3,15,41);bg:rgb(255,255,255);bc:transparent;br:0px 0px 0px 0px;"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[16,16,15,12]"
                    data-paddingright="[30,30,25,20]"
                    data-paddingbottom="[16,16,15,12]"
                    data-paddingleft="[30,30,25,20]">Contact Us
                    </a>
            </li>
        </ul>
    <div class="tp-loader off"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div><div class="tp-bannertimer"></div></div>

</div>


<!--site-main start-->
<div class="site-main">

    <!--welcome-section-->
    <section class="ttm-row welcome-section break-1199-colum ttm-bgcolor-white clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- about-img -->
                    <div class="about-img about-2 mb-10">
                        <!-- <img class="img-fluid" src="{{ asset('frontend/images/about-1.png') }} " alt="about-img"> -->
                        <img class="img-fluid" src="{{ !empty($abouts->about_image)? asset($abouts->about_image) : 'https://via.placeholder.com/150' }}" alt="about-img">
                        <!-- image-overlay-content -->
                        <div class="image-overlay-content">
                            <div class="circle-shape ttm-top-view-overlay ttm-bgcolor-skincolor">
                                <span class="flaticon flaticon-factory-2"></span>
                                <p>Founded in<br> {{ $abouts->yr_founded }}</p>
                            </div>
                        </div><!-- image-overlay-content end -->
                    </div><!-- about-img end -->
                </div>
                <div class="col-lg-6">
                    <div class="about-info pr-10 res-1199-plr-0">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <h5>{{ $abouts->coy_name }}</h5>
                            <h2 class="title">Introduce<strong>{{ $abouts->title }}</strong></h2>
                            <div class="heading-seperator"><span></span></div>
                            <p><strong>{{ $abouts->content_short }}</strong></p>
                            <p>{!! $abouts->content_long !!}</p>
                        </div><!-- section title end -->
                        <!-- row-->
                        <div class="row">
                            <div class="col-lg-8">
                            <h4>{{ $abouts->coy_yr_exp }}</h4>
                            </div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-12">
                                <div class="featured-box style10 left-icon">
                                    <div class="featured-icon icon-shape-square ttm-bgcolor-skincolor"> 
                                        <i class="ti ti-headphone"></i>
                                    </div>
                                    <div class="featured-content ttm-bgcolor-darkgrey">
                                        <div class="featured-desc">
                                            <p>Contact Us to get a Free Estimate</p>
                                            <h3>{{ $contacts->phone_1 }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row end-->
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- welcome-section end -->


    <!--about-section-->
    <section class="ttm-row about-section break-991-colum bg-layer ttm-bgcolor-darkgrey mt-130 res-991-mt-0 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-7">
                    <!-- about-content -->
                    <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-darkgrey padding-1">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <h5>WHAT WE DO</h5>
                                <h2 class="title">Get Best<strong>General Contractor Services</strong></h2>
                                <div class="heading-seperator"><span></span></div>
                                <p>Fanimic Global Resources, We are Nigeria-based commercial and residential 
                                    contracting company with a focus on new Building Construction, Electrical 
                                    Installation, Pure and Bottle Water Manufacturing, 
                                    Renovations, Interior and Exterior Design as well as Agriculture.</p>
                            </div><!-- section title end -->
                            <div class="separator mb-20">
                                <div class="sep-line"></div>
                            </div>
                            <!-- row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <!--featured-box-->
                                    <div class="featured-box left-icon">
                                        <div class="featured-icon"> 
                                            <i class="flaticon flaticon-robot-arm"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>General Contractor Services</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We’re a commercial & residential contracting company. You name it, we’ll build it!</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-box end-->
                                </div>
                                <div class="col-md-6">
                                    <!--featured-box-->
                                    <div class="featured-box left-icon">
                                        <div class="featured-icon"> 
                                            <i class="flaticon flaticon-process"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Maintenance</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>From Interior to Exterior Renovations from a small job to a total face lift.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-box end-->
                                </div>
                            </div><!-- row end-->
                        </div>
                    </div><!-- about-content end-->
                </div>
                <div class="col-md-5 mtb_40 res-991-mtb-0">
                    <!-- col-bg-img-one -->
                    <div class="col-bg-img-one ttm-col-bgimage-yes ttm-bg mr_90 res-1460-mr_0">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <!-- image-overlay-content -->
                            <div class="image-overlay-content">
                                <div class="rectangle-shape ttm-bottom-view-overlay ttm-bgcolor-skincolor">
                                    <span>Team Working Dedicatedly</span>
                                    <p>{{ ucwords(strtolower($abouts->coy_name)) }} has 29+ years of experience with providing wide area of specialty services works listed below.  </p>
                                </div>
                            </div><!-- image-overlay-content end -->
                        </div>
                    </div><!-- col-bg-img-one end-->
                    <img src="{{ asset('frontend/images/bg-image/col-bgimage-1.jpg') }} " class="ttm-equal-height-image" alt="bg-image">
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- about-section end -->

    <!-- service-section -->
    <section class="ttm-row service-section style2 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <!-- section-title -->
                    <div class="section-title style2 clearfix">
                        <h2 class="title">General <strong>Contractor Services Solutions</strong></h2>
                        <p>{{ ucwords(strtolower($abouts->coy_name)) }} has 29+ years of experience with providing wide area of specialty services works listed below.</p>
                    </div><!-- section-title end -->
                </div>
                <div class="col-lg-3 col-md-12">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mt-0 float-right" href="{{ route('services.page') }}">More Services</a>
                </div>
            </div><!-- row end -->
            <div class="row row-equal-height">
                @foreach($services as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style2 text-center">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-factory-"><img src="{{ $item->service_icon }}" alt="" srcset=""></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>{{ $item->title }}</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{!! $item->long_description !!}</p>
                                    <a class="ttm-btn ttm-btn-color-skincolor btn-inline" href="{{ route('services.page') }}">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>
                @endforeach()  
                
            </div><!-- row end-->
        </div>
    </section>
    <!-- service-section end -->


    <!-- testimonial-section -->
    <section class="ttm-row testimonial-section bg-layer break-1199-colum clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-7">
                <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-darkgrey padding-2">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <h5>CLIENTS</h5>
                                <h2 class="title">Happy with<strong>Customers & Clients</strong></h2>
                                <div class="heading-seperator"><span></span></div>
                                <p>If you need any General Merchants Services we are available for you.</p>
                            </div><!-- section title end -->
                            <a class="ttm-btn ttm-btn-color-white btn-inline ttm-icon-btn-right mt_25" href="{{ route('contact.page') }}">Contact Us<i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- testimonial-box -->
                    <div class="mt-60 testimonial-box">
                        <div class="ttm-col-bgcolor-yes ttm-right-span ttm-bg ttm-bgcolor-skincolor ml_170">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer bg-map"></div>
                            <div class="layer-content">
                                <!-- wrap-testimonial -->
                                <div class="testimonial-slide owl-carousel" data-nav="true" data-dots="false" data-auto="true">
                                    @foreach($testimonials as $item)
                                        <!-- testimonials -->
                                        <div class="testimonials style3 text-center"> 
                                            <div class="testimonial-content ttm-bgcolor-white">
                                                <div class="testimonial-caption">
                                                    <h6>{{ $item->name }}</h6>
                                                    <label>{{ $item->title }}</label>
                                                </div>
                                                <p>{!! $item->comment !!}</p>
                                            </div>
                                            {{-- <div class="testimonial-avatar">
                                                <div class="testimonial-img">
                                                    <img class="img-center" src="{{ asset('frontend/images/testimonial/02.jpg') }}" alt="testimonial-img">
                                                </div>
                                            </div> --}}
                                        </div><!-- testimonials end -->
                                        <!-- testimonials -->
                                    @endforeach()  
                                </div><!-- wrap-testimonial end-->
                            </div>
                        </div>
                    </div><!-- testimonial-box end-->
                </div>
            </div><!-- row end-->
        </div>
    </section>
    <!-- skill-section end-->



    <!--client logo start-->
    {{-- <section class="ttm-row bg-img2 mt_110 res-1199-mt-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pt-100 row-title text-center res-991-pt-0">
                        <div class="ttm-video-btn btn-size-sm mb-55 mt-30">
                            <a class="ttm-play-btn ttm_prettyphoto" href="https://youtu.be/MdLVzXf7v5E"><span class="ttm-btn-play"><i class="fa fa-play"></i></span></a>
                        </div>
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <h2 class="title">Get A Solutions For</h2>
                            <h2 class="title">All <strong>Industries </strong></h2>
                            <p>We believe strongly that we can and must do things differently.<br>Our aim is to bring you news, perspectives.</p>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#">Contact Us</a>
                        </div><!-- section title end -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--client logo end-->


    <!--portfolio-section-->
    <section class="ttm-row portfolio-section2">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <!-- section-title -->
                    <div class="section-title style2 clearfix">
                        <h2 class="title">Our <strong>Latest Projects</strong></h2>
                        <p>Fanimic Global Resources has 29+ years of experience with providing wide area of specialty services works listed below.</p>
                    </div><!-- section-title end -->
                </div>
                <div class="col-lg-3 col-md-12">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mt-0 float-right" href="{{ route('project.page') }}">More Work</a>
                </div>
            </div><!-- row end -->
            <!-- row -->
            <div class="row pt-10 pl-5 pr-5 res-991-mt-0 multi-columns-row ttm-boxes-spacing-10px ttm-bgcolor-white box-shadow">
                @foreach($multiImages as $item)
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-6">
                        <!-- featured-item -->
                        
                        <div class="featured-item featured-portfolio-item">
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="{{ !empty($item->img_name)? asset($item->img_name) : 'https://via.placeholder.com/150' }}" alt="image"></a>
                            </div>
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="{{ !empty($item->img_name)? asset($item->img_name) : 'https://via.placeholder.com/150' }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                    {{-- <a href="portfolio-details-01.html" class="ttm_link"><i class="ti ti-link"></i></a> --}}
                                </div>
                                {{-- <div class="content-post content-portfolio-post">
                                    <h2 class="title-post"><a href="portfolio-details-01.html">spring-renovation</a></h2>
                                    <span class="category">
                                        <a href="portfolio-category.html">Chemical Research</a>,
                                        <a href="portfolio-category.html">Oil And Gas</a>
                                    </span>
                                </div> --}}
                            </div><!-- ttm-box-view-overlay end-->
                        </div><!-- featured-item -->
                    </div>
                @endforeach()  
            </div><!-- row end -->
        </div>
    </section>
    <!--portfolio-section end-->


    <!--bg-layer-section-->
    <section class="ttm-row bg-layer clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <!-- col-img-img-one -->
                    <div class="col-bg-img-fifteen ttm-col-bgimage-yes ttm-bg ttm-left-span">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer mt_60 res-991-mt-0"></div>
                        <div class="layer-content">
                            <!-- image-overlay-content -->
                            <div class="image-overlay-content">
                                <div class="shakeimage ttm-top-view-overlay">
                                    <img src="{{ asset('frontend/images/jcb.png') }} " class="img-fluid" alt="shakeimage">
                                </div>
                            </div><!-- image-overlay-content end -->
                        </div>
                    </div><!-- col-img-bg-img-one end-->
                    <img src="{{ asset('frontend/images/bg-image/b1.jpg') }}" class="ttm-equal-height-image" alt="bg-image">
                </div>
                <div class="col-lg-7 col-md-12">
                    <!-- about-content -->
                    <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-darkgrey ptb-80 pl-100 res-991-plr-15 res-991-ptb-35">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title mb-35 clearfix">
                                <h5>CLIENTS</h5>
                                <h2 class="title">Work With<strong>Big & Small Clients</strong></h2>
                                <div class="heading-seperator"><span></span></div>
                                {{-- <p>Steel is infinitely recyclable and can be re-used again and again in the steel making process. </p> --}}
                            </div><!-- section title end -->
                            <div class="separator mb-20">
                                <div class="sep-line"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="ttm-fid">
                                        <!-- ttm-fid-contents -->
                                        <div class="ttm-fid-contents">
                                            <h4>
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "10"
                                                        data-interval         = "5"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                    >10</span>
                                                <sub>+</sub>
                                            </h4>
                                            <h3 class="ttm-fid-title"><span>Projects Completed</span></h3>
                                        </div><!-- ttm-fid-contents end -->
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="ttm-fid">
                                        <!-- ttm-fid-contents -->
                                        <div class="ttm-fid-contents">
                                            <h4>
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "10"
                                                        data-interval         = "5"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub" 
                                                    >10</span>
                                                <sub>+</sub>
                                            </h4>
                                            <h3 class="ttm-fid-title"><span>Work Employed</span></h3>
                                        </div><!-- ttm-fid-contents end -->
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <!-- ttm-fid-contents -->
                                    <div class="ttm-fid">
                                        <div class="ttm-fid-contents">
                                            <h4><span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "20"
                                                        data-interval         = "5"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                    >20</span>
                                                <sub>+</sub>
                                            </h4>
                                            <h3 class="ttm-fid-title"><span>Work Facilities</span></h3>
                                        </div><!-- ttm-fid-contents end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- about-content end-->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--bg-layer-section end-->


    <!--client-section-->
    {{-- <div class="ttm-row client-section style2 ttm-bgcolor-grey mt_150 res-991-mt-0 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row text-center">
                <div class="col-md-12">
                    <!-- ttm-client -->
                    <div class="ttm-client clients-logo owl-carousel owl-theme owl-loaded">
                        <div class="client">
                            <div class="ttm-client-logo-tooltip" data-tooltip="Gear Service">
                                <img src="{{ asset('frontend/images/client/client-01.png') }} " alt="image">
                            </div>
                        </div>
                        <div class="client">
                            <div class="ttm-client-logo-tooltip" data-tooltip="GreenHand">
                                <img src="{{ asset('frontend/images/client/client-02.png') }} " alt="image">
                            </div>
                        </div>
                        <div class="client">
                            <div class="ttm-client-logo-tooltip" data-tooltip="GearInfinite">
                                <img src="{{ asset('frontend/images/client/client-03.png') }} " alt="image">
                            </div>
                        </div>
                        <div class="client">
                            <div class="ttm-client-logo-tooltip" data-tooltip="Excavator">
                                <img src="{{ asset('frontend/images/client/client-04.png') }} " alt="image">
                            </div>
                        </div>
                        <div class="client">
                            <div class="ttm-client-logo-tooltip" data-tooltip="Data Bars">
                                <img src="{{ asset('frontend/images/client/client-05.png') }} " alt="image">
                            </div>
                        </div>
                        <div class="client">
                            <div class="ttm-client-logo-tooltip" data-tooltip="Oil & Gas">
                                <img src="{{ asset('frontend/images/client/client-07.png') }} " alt="image">
                            </div>
                        </div>
                    </div><!-- ttm-client end -->      
                </div>
            </div><!-- row end -->
        </div>
    </div> --}}
    <!--client-section end-->     


    <!--blog-section-->
    {{-- <section class="ttm-row blog-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <!-- section-title -->
                    <div class="section-title style2 clearfix">
                        <h2 class="title">Our Articles<strong>Latest News & Blog</strong></h2>
                    <p>Stay up to date with our latest news, event schedules and corporate developments for new blogs</p>
                    </div><!-- section-title end -->
                </div>
                <div class="col-lg-3 col-md-12">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mt-0 float-right" href="#">More Articles</a>
                </div>
            </div><!-- row end -->
            <!-- row -->
            <div class="row">
                <!-- post-slide -->
                <div class="post-slide owl-carousel owl-theme owl-loaded row-equal-height">
                    <!-- post -->
                    <div class="post post-topimage box-shadow style2">
                        <div class="post-image">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/01.jpg') }} " alt="">
                            <div class="post-image-icon icon-position-left"><i class="ti ti-pencil"></i></div>
                        </div>
                        <div class="post-desc style2">
                            <div class="post-title">
                                <h5><a href="single-blog.html">We are best for any industrial & business solution.</a> </h5>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><i class="fa fa-user"></i>Alex</li>
                                    <li><i class="fa fa-calendar"></i>August 1, 2018</li>
                                </ul>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                            <a class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right" href="#">Read More<i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div><!-- post end -->
                    <!-- post -->
                    <div class="post post-topimage box-shadow style2">
                        <div class="post-image">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/02.jpg') }} " alt="">
                            <div class="post-image-icon icon-position-left"><i class="ti ti-pencil"></i></div>
                        </div>
                        <div class="post-desc style2">
                            <div class="post-title">
                                <h5><a href="single-blog.html">We won best industry award of the year 2017 & 18.</a> </h5>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><i class="fa fa-user"></i>Alex</li>
                                    <li><i class="fa fa-calendar"></i>August 2, 2018</li>
                                </ul>
                            </div>
                            <p>We were honoured to receive such a award for selected top Industrial Com...</p>
                            <a class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right" href="#">Read More<i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div><!-- post end -->
                    <!-- post -->
                    <div class="post post-topimage box-shadow style2">
                        <div class="post-image">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/03.jpg') }} " alt="">
                            <div class="post-image-icon icon-position-left"><i class="ti ti-pencil"></i></div>
                        </div>
                        <div class="post-desc style2">
                            <div class="post-title">
                                <h5><a href="single-blog.html">10 reason why should choose our industry</a> </h5>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><i class="fa fa-user"></i>Alex</li>
                                    <li><i class="fa fa-calendar"></i>August 5, 2018</li>
                                </ul>
                            </div>
                            <p>Few can match for our promise to safety and commitment. We have list of products...</p>
                            <a class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right" href="#">Read More<i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div><!-- post end-->
                </div><!-- post-slide end -->
            </div><!-- row end-->
        </div>
    </section> --}}
    <!--blog-section end-->

</div><!--site-main end-->

<br><br>
@endsection