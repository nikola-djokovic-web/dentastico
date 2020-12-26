@extends('templates.frontend.layout')


@section('seo-title')
    <title>{{trans('front.about-us')}} {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('custom-css')
<style media="screen">
.scheme_original .sc_highlight_style_1{
  font-size: 16px;
}
.scheme_original .sc_highlight_style_2{
  font-size: 20px;
}
</style>
@endsection

@section('breadcrumbs')
<div class="top_panel_title top_panel_style_2  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_2  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title">{{trans('front.about-us')}}</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">{{trans('front.home')}}</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">{{trans('front.about-us')}}</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="sc_section margin_top_large margin_bottom_large">
    <div class="sc_section_inner">
        <h2 class="sc_title sc_title_underline sc_align_center margin_bottom_tiny">{{trans('front.how-to-get-perfect')}}</h2>
        <div class="wpb_text_column wpb_content_element vc_custom_1449071203295">
            <div class="wpb_wrapper" style="text-align: justify; margin-top: 40px;">
                <p>
                    <b>{{trans('front.dentastico')}}</b> {{trans('front.dentastico-d')}}
                </p>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-12 margin_top_medium margin_bottom_medium">

                <div class="wpb_wrapper">
                  <img src="/templates/frontend/images/happy-customers.jpg" alt="">
                </div>

        </div>
        <!-- <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_medium">
            <div class="column-1_2 sc_column_item centext">
                <figure class="sc_image sc_image_shape_square">
                    <a >
                        <img style="height: 250px;" src="/templates/frontend/images/slider-2.jpg" alt="">
                    </a>
                </figure>
                <div class="wpb_text_column wpb_content_element">
                    <div class="wpb_wrapper">

                    </div>
                </div>
            </div>
            <div class="column-1_2 sc_column_item centext">
                <figure class="sc_image sc_image_shape_square">
                    <a >
                        <img style="height: 250px;" src="/templates/frontend/images/slider-1.jpg" alt="">
                    </a>
                </figure>
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">

                    </div>
                </div>
            </div>
        </div> -->
        <div class="wpb_text_column wpb_content_element vc_custom_1449071203295">
            <div class="wpb_wrapper" style="text-align: justify;">
                <p>
                  {{trans('front.dont-sacrifice')}}
                </p>
                <p>
                <b style="color: #a7c526;">{{trans('front.what-you-need-to-do')}}</b>
                </p>
                <p>
                  <ol>
                    <li><strong>{{trans('front.cond1')}}</strong></li>
                    <li><strong>{{trans('front.cond2')}}</strong></li>
                    <li><strong>{{trans('front.cond3')}}</strong></li>
                    <li><strong>{{trans('front.cond4')}}</strong></li>
                    <li><strong>{{trans('front.cond5')}}</strong></li>
                  </ol>
                </p>
            </div>
        </div>
        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_medium">
            <div class="column-1_2 sc_column_item centext">

            </div>
            <div class="column-1_2 sc_column_item centext">

            </div>
        </div>


    </div>
</div>

@endsection


@section('custom-js')
@endsection
