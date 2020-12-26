@extends('templates.frontend.layout')

@section('seo-title')
    <title>{{trans('front.services')}} {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('custom-css')
<style media="screen">
  .scheme_original .sc_highlight_style_1{
    font-size: 24px;
  }
  .scheme_original .sc_highlight_style_2{
    font-size: 16px;
  }
</style>
@endsection

@section('breadcrumbs')
<div class="top_panel_title top_panel_style_2 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_2  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title">{{trans('front.services')}}</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">{{trans('front.home')}}</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">{{trans('front.services')}}</span>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="sc_section margin_top_medium margin_bottom_large">
  <div class="sc_section_inner">
      <h2 class="sc_title sc_title_underline sc_align_center margin_bottom_tiny">{{trans('front.what-we-do')}}</h2>
      <div class="wpb_text_column wpb_content_element vc_custom_1449071203295">
          <div class="wpb_wrapper" style="text-align: justify;">
              <p>
                  {!!trans('front.team-dentastico')!!} {{trans('front.was-founded')}}
              </p>
              <p>{{trans('front.these-services')}}</p>

              <h4><strong>{{trans('front.service-1')}}</strong></h4>
              <p><b style="color: #a7c526;">{{trans('front.q1')}}</b> {{trans('front.service-1-d')}}
              </p><br>

              <h4><strong>{{trans('front.service-2')}}</strong></h4>
              <p><b style="color: #a7c526;">{{trans('front.q2')}}</b>
                {{trans('front.service-2-d')}}
              </p><br>

              <h4><strong>{{trans('front.service-3')}}</strong></h4>
              <p><b style="color: #a7c526;">{{trans('front.q3')}}</b>
                {{trans('front.service-3-d')}}
              </p><br>

              <h4><strong>4. <i>Pick-up</i> {{trans('front.service-4')}}</strong></h4>
              <p><b style="color: #a7c526;">{{trans('front.q4')}}</b> {!! trans('front.service-4-d') !!}
              </p><br>

              <h4><strong>{{trans('front.service-5')}}</strong></h4>
              <p><b style="color: #a7c526;">{{trans('front.q5')}}</b>

                {{trans('front.service-5-d')}}
              </p><br>

              <h4><strong>{{trans('front.service-6')}}</strong></h4>
              <p><b style="color: #a7c526;">{!!trans('front.q6')!!}</b>
              {!!trans('front.service-6-d')!!}
              </p><br>

              <h4><strong>{{trans('front.service-7')}}</strong></h4>
              <p>
                <b style="color: #a7c526;">{{trans('front.q7')}}</b>
                {!!trans('front.service-7-d')!!}

              </p><br>
              <p>{{trans('front.poll')}}
                <a href="https://wwww.google.com"><span class="sc_highlight sc_highlight_style_1">{{trans('front.here')}}</span></a>
                 {{trans('front.poll2')}}</p>
          </div>
      </div>


  </div>
</div>
@endsection


@section('custom-js')

@endsection
