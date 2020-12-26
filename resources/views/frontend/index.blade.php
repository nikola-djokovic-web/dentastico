@extends('templates.frontend.layout')

@section('seo-title')
    <title>{{trans('front.home')}} {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('custom-css')
<style media="screen">
.steps{

}
#message {
  position: absolute;
  bottom: 150px;
  right: 20px;
  z-index: 10;
}
</style>

<style media="screen">

[type="file"] {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  overflow: hidden;
  padding: 0;
  position: absolute !important;
  white-space: nowrap;
  width: 1px;
  cursor: pointer;
}

</style>
@endsection

@section('main-slider')
<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_dentrario-home-3">
    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery">
        <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" data-version="5.4.3">
            <ul>
                <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="images/2640x1686.png" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="/templates/frontend/images/slider-1.jpg" alt="Dentastico" title="home_3_sl2_bg" width="1920" height="517" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption dentrarario-home3-static-text tp-resizeme" id="slide-6-layer-2" data-x="35" data-y="320" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":400,"ease":"Power2.easeInOut"},{"delay":4850,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">

                    </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" id="slide-6-layer-4" data-x="35" data-y="295" data-width="['76']" data-height="['1']" data-visibility="['on','on','on','off']" data-type="shape" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":400,"ease":"Power2.easeInOut"},{"delay":4850,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                    </div>
                    <div class="tp-caption dentrarario-home3-static-header tp-resizeme" id="slide-6-layer-5" data-x="35" data-y="177" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":400,"ease":"Power3.easeInOut"},{"delay":4850,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">

                        {{trans('front.welcome-to')}}
                    </div>
                    <div class="tp-caption dentrarario-home3-appointment-btn tp-resizeme" id="slide-6-layer-6" data-x="35" data-y="center" data-voffset="160" data-width="['auto']" data-height="['auto']" data-visibility="['off','off','on','on']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":400,"ease":"Power2.easeInOut"},{"delay":4350,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                        <a href="{{route('contact')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium margin_top_small margin_bottom_small">{{trans('front.appointment')}}</a>
                    </div>
                </li>
                <li data-index="rs-9" data-transition="fade,crossfade" data-slotamount="default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default,default" data-easeout="default,default" data-masterspeed="1000,default" data-thumb="images/2640x1686.png" data-rotate="0,0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="/templates/frontend/images/slider-2.jpg" alt="Dentastico" title="home_3_sl1_bg" width="1920" height="517" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption dentrarario-home3-static-text tp-resizeme" id="slide-9-layer-2" data-x="35" data-y="320" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":400,"ease":"Power3.easeInOut"},{"delay":4850,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">

                    </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" id="slide-9-layer-4" data-x="35" data-y="295" data-width="['76']" data-height="['1']" data-visibility="['on','on','on','off']" data-type="shape" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":1280,"to":"o:1;","delay":400,"ease":"Power2.easeInOut"},{"delay":5070,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                    </div>
                    <div class="tp-caption dentrarario-home3-static-header tp-resizeme" id="slide-9-layer-5" data-x="35" data-y="177" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":400,"ease":"Power3.easeInOut"},{"delay":4850,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                        {{trans('front.welcome-to')}}
                    </div>
                    <div class="tp-caption dentrarario-home3-appointment-btn tp-resizeme" id="slide-9-layer-6" data-x="35" data-y="center" data-voffset="160" data-width="['auto']" data-height="['auto']" data-visibility="['off','off','on','on']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":400,"ease":"Power3.easeInOut"},{"delay":4850,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                        <a href="{{route('contact')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium margin_top_small margin_bottom_small">{{trans('front.appointment')}}</a>
                    </div>
                </li>
                <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="images/2640x1686.png" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="/templates/frontend/images/slider-3.jpg" alt="Dentastico" title="home_3_sl3_bg" width="1920" height="517" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption dentrarario-home3-static-text tp-resizeme" id="slide-10-layer-2" data-x="35" data-y="320" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":400,"ease":"Power2.easeOut"},{"delay":5350,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">

                    </div>
                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" id="slide-10-layer-4" data-x="35" data-y="295" data-width="['76']" data-height="['1']" data-visibility="['on','on','on','off']" data-type="shape" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":1280,"to":"o:1;","delay":400,"ease":"Power2.easeInOut"},{"delay":5070,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                    </div>
                    <div class="tp-caption dentrarario-home3-static-header tp-resizeme" id="slide-10-layer-5" data-x="35" data-y="177" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":400,"ease":"Power2.easeOut"},{"delay":5350,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                        {{trans('front.welcome-to')}}
                    </div>
                    <div class="tp-caption dentrarario-home3-appointment-btn tp-resizeme" id="slide-10-layer-6" data-x="35" data-y="center" data-voffset="160" data-width="['auto']" data-height="['auto']" data-visibility="['off','off','on','on']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":400,"ease":"Power2.easeOut"},{"delay":5350,"speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                        <a href="{{route('contact')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium margin_top_small margin_bottom_small">{{trans('front.appointment')}}</a>
                    </div>
                </li>
            </ul>
            <div style="" class="tp-static-layers">
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme tp-static-layer" id="slider-2-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['1000']" data-height="['full','full','full','full']" data-type="shape" data-responsive_offset="on" data-startslide="0" data-endslide="2" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-captionhidden="on">
                </div>
                <div class="tp-caption dentrarario-home3-static-text slider_form tp-static-layer" id="slider-2-layer-3" data-x="center" data-hoffset="1" data-y="70" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-responsive="off" data-startslide="0" data-endslide="2" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-captionhidden="on">
                    <div id="sc_form_427_wrap" class="sc_form_wrap">

                        <div id="sc_form_427" class="sc_form sc_form_style_form_2">

                            <h2 class="sc_form_title sc_item_title">{{trans('front.appointment')}}</h2>
                            <div class="sc_form_descr sc_item_descr"></div>
                            @include('templates.frontend.partials.message')
                            <form id="sc_form_427_form" data-formtype="form_2" method="post" action="" class="inited" enctype="multipart/form-data">
                              @csrf
                                <div class="sc_form_info">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                        <div class="column-1_2 sc_column_item sc_column_item_1">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="sc_form_item sc_form_field label_over"><i class="icon  icon-user-light"></i>
                                                        <label class="required" for="sc_form_username">{{trans('front.name')}}</label>
                                                        <input id="sc_form_username" type="text" name="name" value="{{old('name')}}" placeholder="{{trans("front.name")}} *" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column-1_2 sc_column_item sc_column_item_2">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="sc_form_item sc_form_field label_over"><i class="icon icon-mobile-light"></i>
                                                        <label class="required" for="sc_form_phone">{{trans('front.phone')}}</label>
                                                        <input id="sc_form_phone" type="text" value="{{old('phone')}}" name="phone" placeholder="{{trans("front.phone")}} (Ex. +381-34-56-789)" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                        <div class="column-1_2 sc_column_item sc_column_item_1">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="sc_form_item sc_form_field label_over"><i class="icon icon-mail-light" style="margin-right: 5px;"></i>
                                                        <label class="required" for="sc_form_email"></label>
                                                        <input id="sc_form_email" type="text" value="{{old('email')}}" name="email" placeholder="{{trans("front.email")}} *" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column-1_2 sc_column_item sc_column_item_2">
                                          <div class="" style="margin-top: 10px; margin-left: 10px;">
                                          </div>
                                          <input type="file" id="file" name="document">
                                          <label class="sc_button sc_button_square sc_button_style_filled sc_button_size_small margin_right_small bgc_5" for="file" />{{trans('front.opt')}}</label>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sc_form_item sc_form_message label_over">
                                    <label class="required" for="sc_form_message">{{trans('front.message')}}</label>
                                    <textarea id="sc_form_message" rows="1" name="message" placeholder="{{trans('front.message')}} *" required>{{old('message')}}</textarea>
                                </div>
                                <div class="sc_form_item sc_form_button">
                                    <button type="submit" class="aligncenter">{{trans('front.appointment')}}</button>
                                </div>
                                <div class="result sc_infobox"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>
@endsection


@section('content')

<div class="content_wrap">
  <div class="content">
      <article class="post_item post_item_single page hentry">
        <section class="post_content">

            <div class="vc_row wpb_row vc_row-fluid vc_custom_1449052136583">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space space_30p">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                            <div class="sc_section margin_bottom_large">
                                <div class="sc_section_inner">
                                    <h2 class="sc_title sc_title_underline sc_align_center cblack">{{trans('front.welcome-to')}}</h2>
                                    <div class="vc_empty_space space_5p">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_small">
                                        <div class="column-1_2 sc_column_item">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">

                                                  <div class="sc_dropcaps sc_dropcaps_style_2">
                                                    <span class="sc_dropcaps_item" style="color: #a7c526; height: 100px;">{{trans('front.mission')}}</span>{{trans('front.mission-d')}}
                                                  </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="column-1_2 sc_column_item">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">

                                                      <div class="sc_dropcaps sc_dropcaps_style_2">
                                                        <span class="sc_dropcaps_item">{{trans('front.vision')}}</span> {{trans('front.vision-d')}}
                                                      </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_empty_space space_40p">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="columns_wrap sc_columns columns_fluid autoheight no_margins sc_columns_count_3">
                                <div class="steps column-1_3 sc_column_item sc_column_item_1">
                                    <div style="height: 180px;" class="sc_column_item_inner bgc_1">
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div id="sc_services_269_wrap" class="sc_services_wrap sc_services_inverse">
                                            <div id="sc_services_269" class="sc_services sc_services_style_services-5 sc_services_type_icons">
                                                <div id="sc_services_269_1" class="sc_services_item sc_services_item_1">
                                                    <a href="#">
                                                        <span class="sc_icon "> <img src="/templates/frontend/images/1.png" alt=""> </span>
                                                    </a>
                                                    <div class="sc_services_item_content">
                                                        <h4 class="sc_services_item_title">
                                                            <a href="#">{{trans('front.first')}}</a>
                                                        </h4>
                                                        <div class="sc_services_item_description">
                                                            <p>{{trans('front.step1')}}</p>
                                                            <a href="#" class="sc_services_item_readmore">Learn more
                                                                <span class="icon-right"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                                <div  class="steps column-1_3 sc_column_item sc_column_item_2">
                                    <div style="height: 180px;" class="sc_column_item_inner bgc_2">
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div id="sc_services_260_wrap" class="sc_services_wrap sc_services_inverse">
                                            <div id="sc_services_260" class="sc_services sc_services_style_services-5 sc_services_type_icons">
                                                <div id="sc_services_260_1" class="sc_services_item sc_services_item_1">
                                                    <a href="#">
                                                        <span class="sc_icon "> <img src="/templates/frontend/images/2.png" alt=""> </span>
                                                    </a>
                                                    <div class="sc_services_item_content">
                                                        <h4 class="sc_services_item_title">
                                                            <a href="#">{{trans('front.second')}}</a>
                                                        </h4>
                                                        <div class="sc_services_item_description">
                                                            <p>{{trans('front.step2')}}</p>
                                                            <a href="#" class="sc_services_item_readmore">Learn more
                                                                <span class="icon-right"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="steps column-1_3 sc_column_item sc_column_item_3">
                                    <div style="height: 180px;" class="sc_column_item_inner bgc_3">
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div id="sc_services_501_wrap" class="sc_services_wrap sc_services_inverse">
                                            <div id="sc_services_501" class="sc_services sc_services_style_services-5 sc_services_type_icons">
                                                <div id="sc_services_501_1" class="sc_services_item sc_services_item_1">
                                                    <a href="#">
                                                        <span class="sc_icon "> <img src="/templates/frontend/images/3.png" alt=""> </span>
                                                    </a>
                                                    <div class="sc_services_item_content">
                                                        <h4 class="sc_services_item_title">
                                                            <a href="#">{{trans('front.third')}}</a>
                                                        </h4>
                                                        <div class="sc_services_item_description">
                                                            <p>{{trans('front.step3')}}</p>
                                                            <a href="#" class="sc_services_item_readmore">Learn more
                                                                <span class="icon-right"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
              </div>

            <div class="vc_row-full-width">
            </div>
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="columns_wrap sc_columns columns_fluid autoheight no_margins sc_columns_count_3">
                                <div class="steps column-1_3 sc_column_item sc_column_item_1">
                                    <div style="height: 180px;" class="sc_column_item_inner bgc_3">
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div id="sc_services_269_wrap" class="sc_services_wrap sc_services_inverse">
                                            <div id="sc_services_269" class="sc_services sc_services_style_services-5 sc_services_type_icons">
                                                <div id="sc_services_269_1" class="sc_services_item sc_services_item_1">
                                                    <a href="#">
                                                        <span class="sc_icon "> <img src="/templates/frontend/images/4.png" alt=""> </span>
                                                    </a>
                                                    <div class="sc_services_item_content">
                                                        <h4 class="sc_services_item_title">
                                                            <a href="#">{{trans('front.forth')}}</a>
                                                        </h4>
                                                        <div class="sc_services_item_description">
                                                            <p>{{trans('front.step4')}}</p>
                                                            <a href="#" class="sc_services_item_readmore">Learn more
                                                                <span class="icon-right"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                                <div  class="steps column-1_3 sc_column_item sc_column_item_2">
                                    <div style="height: 180px;" class="sc_column_item_inner bgc_1">
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div id="sc_services_260_wrap" class="sc_services_wrap sc_services_inverse">
                                            <div id="sc_services_260" class="sc_services sc_services_style_services-5 sc_services_type_icons">
                                                <div id="sc_services_260_1" class="sc_services_item sc_services_item_1">
                                                    <a href="#">
                                                        <span class="sc_icon "> <img src="/templates/frontend/images/5.png" alt=""> </span>
                                                    </a>
                                                    <div class="sc_services_item_content">
                                                        <h4 class="sc_services_item_title">
                                                            <a href="#">{{trans('front.fifth')}}</a>
                                                        </h4>
                                                        <div class="sc_services_item_description">
                                                            <p>{{trans('front.step5')}}</p>
                                                            <a href="#" class="sc_services_item_readmore">Learn more
                                                                <span class="icon-right"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="steps column-1_3 sc_column_item sc_column_item_3">
                                    <div style="height: 180px;" class="sc_column_item_inner bgc_2">
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div id="sc_services_501_wrap" class="sc_services_wrap sc_services_inverse">
                                            <div id="sc_services_501" class="sc_services sc_services_style_services-5 sc_services_type_icons">
                                                <div id="sc_services_501_1" class="sc_services_item sc_services_item_1">
                                                    <a href="#">
                                                        <span class="sc_icon "> <img src="/templates/frontend/images/6.png" alt=""> </span>
                                                    </a>
                                                    <div class="sc_services_item_content">
                                                        <h4 class="sc_services_item_title">
                                                            <a href="#">{{trans('front.sixth')}}</a>
                                                        </h4>
                                                        <div class="sc_services_item_description">
                                                            <p>{{trans('front.step6')}}</p>
                                                            <a href="#" class="sc_services_item_readmore">Learn more
                                                                <span class="icon-right"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space hidden-xs space_32p">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
              </div>

            <div class="vc_row-full-width">
            </div>



            <div class="vc_row-full-width"></div>
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding margin_top_huge">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div id="sc_call_to_action_347" class="sc_call_to_action sc_call_to_action_accented sc_call_to_action_style_1 sc_call_to_action_align_center">
                                <div class="sc_call_to_action_info">
                                    <h3 class="sc_call_to_action_title sc_item_title">{{trans('front.contact-dentastico')}}</h3>
                                    <!-- <div class="sc_call_to_action_descr sc_item_descr">Make Appointment or call 8 800 254 25 64</div> -->
                                    <div class="sc_call_to_action_buttons sc_item_buttons">
                                        <div class="sc_call_to_action_button sc_item_button">
                                            <a href="{{route('contact')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium">{{trans('front.appointment')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width"></div>
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space space_95p">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                            <div id="sc_team_166_wrap" class="sc_team_wrap type1">
                                <div id="sc_team_166" class="sc_team sc_team_style_team-1 ">
                                    <h2 class="sc_team_title sc_item_title">{{trans('front.meet-our-team')}}</h2>
                                    <div class="sc_team_descr sc_item_descr"></div>
                                    <div class="sc_columns columns_wrap">
                                        <div class="column-1_2 column_padding_bottom">
                                            <div id="sc_team_166_1" class="sc_team_item">
                                                <div class="sc_team_item_avatar">
                                                  <a href="#"><img width="182" height="182" alt="" src="/templates/frontend/images/1000x1000.png"></a>
                                                </div>
                                                <div class="sc_team_item_info">
                                                    <h5 class="sc_team_item_title">
                                                        <a href="#">Andrijana Kuzmanović</a>
                                                    </h5>
                                                    <div class="sc_team_item_position">{{trans('front.co-founder')}}</div>
                                                    <div class="sc_team_item_description">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column-1_2 column_padding_bottom">
                                            <div id="sc_team_166_2" class="sc_team_item">
                                                <div class="sc_team_item_avatar">
                                                  <a href="https://www.linkedin.com/in/nenad-jevtovi%C4%87-7b1744b2/"><img width="182" height="182" alt="Nenad Jevtović" src="/templates/frontend/images/Nenadj.jpg"></a>
                                                </div>
                                                <div class="sc_team_item_info">
                                                    <h5 class="sc_team_item_title">
                                                        <a href="https://www.linkedin.com/in/nenad-jevtovi%C4%87-7b1744b2/">Nenad Jevtović</a>
                                                    </h5>
                                                    <div class="sc_team_item_position">{{trans('front.co-founder')}}</div>
                                                    <div class="sc_team_item_description">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="vc_empty_space space_72p">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1457963984421 scheme_dark">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space space_30p">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                            <div id="sc_testimonials_550" class="sc_testimonials sc_testimonials_style_testimonials-1 sc_testimonials_inverse margin_top_large margin_bottom_huge">
                                <h2 class="sc_testimonials_title sc_item_title">{{trans('front.our-happy-clients')}}</h2>
                                <div class="sc_testimonials_descr sc_item_descr"></div>
                                <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_side" data-interval="4844" data-slides-space="20" data-slides-min-width="250">
                                    <div class="slides swiper-wrapper">
                                        <div class="swiper-slide" data-style="width:100%;">
                                            <div id="sc_testimonials_550_1" class="sc_testimonial_item">

                                                <div class="sc_testimonial_content">
                                                    <p>
                                                        The staff of Dentastico is amazing and the dentists are real professionals! Everything went very well! Best regards!
                                                    </p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Leyla Massey</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-style="width:100%;">
                                            <div id="sc_testimonials_550_2" class="sc_testimonial_item">

                                                <div class="sc_testimonial_content">
                                                    <p>
                                                       Each and everyone of Dentastico’s representatives made sure everything went exactly as planned. I had my teeth fixed and it cost me less than expected. A big recommendation for these people!
                                                    </p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Mason Britton</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-style="width:100%;">
                                            <div id="sc_testimonials_550_3" class="sc_testimonial_item">

                                                <div class="sc_testimonial_content">
                                                    <p>
                                                      Both the agency and the dentists really know how to do their jobs! I came back home with a beautiful experience in my heart. Serbia and its people are really amazing!
                                                    </p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Aairah Durham</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-style="width:100%;">
                                            <div id="sc_testimonials_550_3" class="sc_testimonial_item">

                                                <div class="sc_testimonial_content">
                                                    <p>
                                                      Agencija odlična a doktori jako stručni. Mnogo jeftinije nego u Austriji. Pozdrav iz Beča!
                                                    </p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Milan Tadić</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-style="width:100%;">
                                            <div id="sc_testimonials_550_3" class="sc_testimonial_item">

                                                <div class="sc_testimonial_content">
                                                    <p>
                                                      : Desde el aeropuerto, pasando por el alojamiento hasta el consultorio dental, todo salió bien. Todos en Dentastico son muy profesionales. Tenéis mis recomendaciones!
                                                    </p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Juan Rodrigez</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-style="width:100%;">
                                            <div id="sc_testimonials_550_3" class="sc_testimonial_item">

                                                <div class="sc_testimonial_content">
                                                    <p>
                                                      molti meno soldi che in Italia, ho un sorriso più bello e un paio di nuove amicizie in più. Un saluto per tutti i membri di Dentastico e ci vediamo di nuovo in primavera!
                                                    </p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Fedele Nora</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-style="width:100%;">
                                            <div id="sc_testimonials_550_3" class="sc_testimonial_item">

                                                <div class="sc_testimonial_content">
                                                    <p>
                                                      Tutto è andato benissimo! L'agenzia e i dentistihanno prezzi convenienti e fanno un ottimo lavoro. Continuate così! Li consigliamo a tutti!
                                                    </p>
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">Romano Cozzo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc_slider_controls_wrap">
                                        <a class="sc_slider_prev" href="#"></a>
                                        <a class="sc_slider_next" href="#"></a>
                                    </div>
                                    <div class="sc_slider_pagination_wrap"></div>
                                </div>
                            </div>
                            <div class="vc_empty_space space_5p">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vc_row-full-width"></div>
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid">

            </div>
            <div class="vc_row-full-width"></div>
        </section>
      </article>
      <section class="related_wrap related_wrap_empty"></section>
  </div>
</div>

@endsection

@section('custom-js')



@endsection
