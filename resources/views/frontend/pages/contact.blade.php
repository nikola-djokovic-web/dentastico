
@extends('templates.frontend.layout')

@section('seo-title')
    <title>{{trans('front.contact')}} {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('custom-css')

@endsection

@section('breadcrumbs')
<div class="top_panel_title top_panel_style_2 title_present breadcrumbs_present scheme_original">
                <div class="top_panel_title_inner top_panel_inner_style_2 title_present_inner breadcrumbs_present_inner">
                    <div class="content_wrap">
                        <h1 class="page_title">{{trans('front.contact')}}</h1>
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item home" href="{{route('homepage')}}">{{trans('front.home')}}</a>
                            <span class="breadcrumbs_delimiter"></span>
                            <span class="breadcrumbs_item current">{{trans('front.contact')}}</span>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('content')
<div class="content">
      <article class="post_item post_item_single page hentry">
          <section class="post_content">
              <div class="vc_row wpb_row vc_row-fluid">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            @include('templates.partials.message')
                            <h2 class="sc_title sc_title_regular sc_align_center margin_top_huge margin_bottom_tiny centext">{{trans('front.how-to-reach-us')}}</h2>

                            <div class="columns_wrap sc_columns columns_nofluid autoheight sc_columns_count_2">
                                <div class="column-1_2 sc_column_item centext" style="height: 391px;">
                                    <!-- <div class="sc_column_item_inner bgimage_column"></div> -->
                                    <img src="/templates/frontend/images/pecat-01.png" alt="Dentastico">
                                </div>
                                <div class="column-1_2 sc_column_item" style="height: 391px;">
                                    <div id="sc_services_604_wrap" class="sc_services_wrap">
                                        <div id="sc_services_604" class="sc_services sc_services_style_services-2 sc_services_type_icons margin_top_medium alignleft">
                                            <div id="sc_services_604_1" class="sc_services_item">
                                                <span class="sc_icon icon-location-light"></span>
                                                <div class="sc_services_item_content">
                                                    <h4 class="sc_services_item_title">{{trans('front.email')}}</h4>
                                                    <div class="sc_services_item_description">
                                                        <p><a href="mailto:office@dentastico.rs" target="_blank">office@dentastico.rs</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="sc_services_604_2" class="sc_services_item">
                                                <span class="sc_icon icon-mobile-light"></span>
                                                <div class="sc_services_item_content">
                                                    <h4 class="sc_services_item_title">{{trans('front.phone')}}</h4>
                                                    <div class="sc_services_item_description">
                                                        <p>+381 65 57 61 995</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="sc_services_604_3" class="sc_services_item">
                                                <span class="sc_icon icon-calendar-light"></span>
                                                <div class="sc_services_item_content">
                                                    <h4 class="sc_services_item_title">{{trans('front.working-hours')}}</h4>
                                                    <div class="sc_services_item_description">
                                                        <p>00-24</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="wpb_wrapper" style="background-color: #eeeeee; margin-bottom: 32px;">
                            <div style="padding: 15px;" id="sc_form_329_wrap" class="sc_form_wrap">
                                <div id="sc_form_329" class="sc_form sc_form_style_form_2 margin_top_huge margin_bottom_huge">
                                    <h2 style="color: black;" class="sc_form_title sc_item_title">{{trans('front.contact-dentastico')}}</h2>
                                    <div class="sc_form_descr sc_item_descr"></div>

                                    <form id="sc_form_329_form" data-formtype="form_2" method="post" action="" class="inited" enctype="multipart/form-data">
                                        @csrf
                                        <div class="sc_form_info">
                                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                                <div class="column-1_2 sc_column_item sc_column_item_1">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                          <div class="sc_form_item sc_form_field label_over"><i class="icon  icon-user-light"></i>
                                                              <label class="required" for="sc_form_username">{{trans('front.name')}}</label>
                                                              <input style="color: black;" id="sc_form_username" type="text" name="name" value="{{old('name')}}" placeholder="{{trans('front.name')}} *" required>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_2 sc_column_item sc_column_item_2">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                              <div class="sc_form_item sc_form_field label_over"><i class="icon icon-mobile-light"></i>
                                                                  <label class="required" for="sc_form_phone">{{trans('front.phone')}}</label>
                                                                  <input style="color: black;" id="sc_form_phone" type="text" value="{{old('phone')}}" name="phone" placeholder="{{trans("front.phone")}} (Ex. +381-34-56-789)" required>
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
                                                              <input style="color: black;" id="sc_form_email" type="text" value="{{old('email')}}" name="email" placeholder="{{trans("front.email")}} *" required>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_2 sc_column_item sc_column_item_2">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                          <div class="" style="margin-top: 15px; margin-left: 10px;">
                                                          </div>
                                                          <span style="color: black;">{{trans('front.opt')}}</span> <input type="file" id="file" name="document">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_form_item sc_form_message label_over">
                                          <label class="required" for="sc_form_message">{{trans('front.message')}}</label>
                                          <textarea id="sc_form_message" rows="1" name="message" placeholder="{{trans("front.message")}} *" required>{{old('message')}}</textarea>

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
                  </div>
              </div>
              <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">

              </div>
              <div class="vc_row-full-width"></div>
          </section>
      </article>
      <section class="related_wrap related_wrap_empty"></section>
  </div>


@endsection

@section('custom-js')

@endsection
