@extends('templates.frontend.layout')

@section('seo-title')
    <title>{{$service->title}} {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('custom-css')
<link rel='stylesheet' href='/templates/frontend/css/my-custom-style.css' type='text/css' media='all' />

@endsection

@section('breadcrumbs')
<div class="top_panel_title top_panel_style_2 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_2 title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title">{{$service->title}}</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">{{trans('front.home')}}</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item cat_post" href="{{route('services')}}">{{trans('front.partners')}}</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">
                  @if(app()->islocale('sr'))
                    {{$service->title}}
                  @elseif(app()->islocale('en'))
                    {{$service->title2}}
                  @elseif(app()->islocale('it'))
                    {{$service->title3}}
                  @endif
                </span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

  <div class="content">
    <article class="post_item post_item_single services hentry services_group-main services_group-small">
        <section class="post_content">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        @if(app()->islocale('sr'))
                          <div class="wpb_wrapper">
                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_huge margin_bottom_huge">
                                <div class="column-1_2 sc_column_item">
                                    <figure class="sc_image sc_image_shape_square">
                                        <img src="{{$service->getImage('xl')}}" alt="Dentastico" />
                                    </figure>
                                </div>
                                <div class="column-1_2 sc_column_item">
                                    <h2 class="sc_title sc_title_regular margin_top_null">
                                        {{$service->title}}
                                    </h2>
                                    <h6 class="sc_title sc_title_regular margin_top_null">POPULAR INFORMATION</h6>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p>{!!$service->content!!}</p>
                                        </div>
                                    </div>
                                    @if(!empty($service->gallery))
                                    <?php $images = json_decode($service->gallery); ?>
                                    <article class="myportfolio-container minimal-light" id="esg-grid-1-1-wrap">
                                        <div id="esg-grid-1-1" class="esg-grid">
                                            <ul>
                                                @foreach($images as $image)
                                                  <li id="" class="filterall filter-gallery eg-dentrario-wrapper eg-post-id-861" data-date="1452598765">
                                                    <div class="esg-media-cover-wrapper">
                                                        <div class="esg-entry-media">
                                                            <img src="{{$image}}" alt="" width="1600" height="1216">
                                                        </div>
                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                            <div class="esg-overlay esg-fade eg-dentrario-container" data-delay="0"></div>
                                                            <div class="esg-center eg-post-861 eg-dentrario-element-0-a esg-falldown" data-delay="0.1">
                                                                <a class="eg-dentrario-element-0 eg-post-861 esgbox" href="{{$image}}" lgtitle="{{$service->title}}">
                                                                    <i class="eg-icon-search"></i>
                                                                </a>
                                                            </div>
                                                            <!-- <div class="esg-center eg-post-861 eg-dentrario-element-1-a esg-falldown" data-delay="0.2">
                                                                <a class="eg-dentrario-element-1 eg-post-861" href="single-post.html" target="_self">
                                                                    <i class="eg-icon-link"></i>
                                                                </a>
                                                            </div> -->
                                                            <div class="esg-center eg-dentrario-element-8 esg-none esg-clear"></div>
                                                            <div class="esg-center eg-dentrario-element-9 esg-none esg-clear"></div>
                                                        </div>
                                                    </div>

                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </article>
                                    <div class="clear"></div>
                                    @endif
                                </div>
                            </div>
                          </div>
                          @if(!empty($service->gallery))
                          <?php $images = json_decode($service->gallery); ?>
                            <!-- <ul>


                                @foreach($images as $image)
                                  <li><img src="/uploads/services/{{$image}}" alt="{{$service->title}}" /></li>
                                @endforeach
                            </ul> -->

                          @endif
                        @elseif(app()->islocale('en'))
                          <div class="wpb_wrapper">
                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_huge margin_bottom_huge">
                                <div class="column-1_2 sc_column_item">
                                    <figure class="sc_image sc_image_shape_square">
                                        <img src="{{$service->getImage('xl')}}" alt="Dentastico" />
                                    </figure>
                                </div>
                                <div class="column-1_2 sc_column_item">
                                    <h2 class="sc_title sc_title_regular margin_top_null">
                                        {{$service->title2}}
                                    </h2>
                                    <h6 class="sc_title sc_title_regular margin_top_null">POPULAR INFORMATION</h6>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p>{!!$service->content2!!}</p>
                                        </div>
                                    </div>
                                    @if(!empty($service->gallery))
                                    <?php $images = json_decode($service->gallery); ?>
                                    <article class="myportfolio-container minimal-light" id="esg-grid-1-1-wrap">
                                        <div id="esg-grid-1-1" class="esg-grid">
                                            <ul>
                                                @foreach($images as $image)
                                                  <li id="" class="filterall filter-gallery eg-dentrario-wrapper eg-post-id-861" data-date="1452598765">
                                                    <div class="esg-media-cover-wrapper">
                                                        <div class="esg-entry-media">
                                                            <img src="{{$image}}" alt="" width="1600" height="1216">
                                                        </div>
                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                            <div class="esg-overlay esg-fade eg-dentrario-container" data-delay="0"></div>
                                                            <div class="esg-center eg-post-861 eg-dentrario-element-0-a esg-falldown" data-delay="0.1">
                                                                <a class="eg-dentrario-element-0 eg-post-861 esgbox" href="{{$image}}" lgtitle="{{$service->title}}">
                                                                    <i class="eg-icon-search"></i>
                                                                </a>
                                                            </div>
                                                            <!-- <div class="esg-center eg-post-861 eg-dentrario-element-1-a esg-falldown" data-delay="0.2">
                                                                <a class="eg-dentrario-element-1 eg-post-861" href="single-post.html" target="_self">
                                                                    <i class="eg-icon-link"></i>
                                                                </a>
                                                            </div> -->
                                                            <div class="esg-center eg-dentrario-element-8 esg-none esg-clear"></div>
                                                            <div class="esg-center eg-dentrario-element-9 esg-none esg-clear"></div>
                                                        </div>
                                                    </div>

                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </article>
                                    <div class="clear"></div>
                                    @endif
                                </div>
                            </div>
                          </div>
                          @if(!empty($service->gallery))
                          <?php $images = json_decode($service->gallery); ?>
                            <!-- <ul>


                                @foreach($images as $image)
                                  <li><img src="/uploads/services/{{$image}}" alt="{{$service->title}}" /></li>
                                @endforeach
                            </ul> -->
                          @endif

                        @elseif(app()->islocale('it'))
                          <div class="wpb_wrapper">
                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_huge margin_bottom_huge">
                                <div class="column-1_2 sc_column_item">
                                    <figure class="sc_image sc_image_shape_square">
                                        <img src="{{$service->getImage('xl')}}" alt="Dentastico" />
                                    </figure>
                                </div>
                                <div class="column-1_2 sc_column_item">
                                    <h2 class="sc_title sc_title_regular margin_top_null">
                                        {{$service->title3}}
                                    </h2>
                                    <h6 class="sc_title sc_title_regular margin_top_null">POPULAR INFORMATION</h6>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p>{!!$service->content3!!}</p>
                                        </div>
                                    </div>
                                    @if(!empty($service->gallery))
                                    <?php $images = json_decode($service->gallery); ?>
                                    <article class="myportfolio-container minimal-light" id="esg-grid-1-1-wrap">
                                        <div id="esg-grid-1-1" class="esg-grid">
                                            <ul>
                                                @foreach($images as $image)
                                                  <li id="" class="filterall filter-gallery eg-dentrario-wrapper eg-post-id-861" data-date="1452598765">
                                                    <div class="esg-media-cover-wrapper">
                                                        <div class="esg-entry-media">
                                                            <img src="{{$image}}" alt="" width="1600" height="1216">
                                                        </div>
                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                            <div class="esg-overlay esg-fade eg-dentrario-container" data-delay="0"></div>
                                                            <div class="esg-center eg-post-861 eg-dentrario-element-0-a esg-falldown" data-delay="0.1">
                                                                <a class="eg-dentrario-element-0 eg-post-861 esgbox" href="{{$image}}" lgtitle="{{$service->title}}">
                                                                    <i class="eg-icon-search"></i>
                                                                </a>
                                                            </div>
                                                            <!-- <div class="esg-center eg-post-861 eg-dentrario-element-1-a esg-falldown" data-delay="0.2">
                                                                <a class="eg-dentrario-element-1 eg-post-861" href="single-post.html" target="_self">
                                                                    <i class="eg-icon-link"></i>
                                                                </a>
                                                            </div> -->
                                                            <div class="esg-center eg-dentrario-element-8 esg-none esg-clear"></div>
                                                            <div class="esg-center eg-dentrario-element-9 esg-none esg-clear"></div>
                                                        </div>
                                                    </div>

                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </article>
                                    <div class="clear"></div>
                                    @endif
                                </div>
                            </div>
                          </div>
                          @if(!empty($service->gallery))
                          <?php $images = json_decode($service->gallery); ?>
                            <!-- <ul>


                                @foreach($images as $image)
                                  <li><img src="/uploads/services/{{$image}}" alt="{{$service->title}}" /></li>
                                @endforeach
                            </ul> -->
                          @endif
                        @endif
                    </div>
                </div>

            </div>
            <div class="vc_row-full-width"></div>


            <div class="vc_row-full-width"></div>
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div id="sc_call_to_action_303" class="sc_call_to_action sc_call_to_action_accented sc_call_to_action_style_1 sc_call_to_action_align_center">
                                <div class="sc_call_to_action_info">
                                    <h3 class="sc_call_to_action_title sc_item_title">{{trans('front.contact-dentastico')}}</h3>
                                    <div class="sc_call_to_action_descr sc_item_descr"></div>
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
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid scheme_light">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div id="sc_form_445_wrap" class="sc_form_wrap">
                                <div id="sc_form_445" class="sc_form sc_form_style_form_2 margin_top_huge margin_bottom_huge">
                                    <h2 class="sc_form_title sc_item_title">{{trans('front.contact-dentastico')}}</h2>
                                    <div class="sc_form_descr sc_item_descr"></div>
                                    <form id="sc_form_329_form" data-formtype="form_2" method="post" action="{{route('contactP')}}" class="inited" enctype="multipart/form-data">
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
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                          <div class="" style="margin-top: 10px; margin-left: 10px;">
                                                          </div>
                                                          <span>{{trans('front.opt')}}</span> <input type="file" id="file" name="document">

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
            <div class="vc_row-full-width"></div>



        </section>
    </article>
    <section class="related_wrap related_wrap_empty"></section>
</div>

@endsection


@section('custom-js')
<script type='text/javascript' src='/templates/frontend/js/custom/my-custom.js'></script>
@endsection
