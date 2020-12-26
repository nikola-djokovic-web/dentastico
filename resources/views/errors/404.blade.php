@extends('templates.frontend.layout')

@section('seo-title')
    <title>{{ config('app.name') }}</title>
@endsection

@section('custom-css')

@endsection


@section('content')

<div class="top_panel_title top_panel_style_2 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_2 title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title">Dentastico</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">{{trans('front.home')}}</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Dentastico</span>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_404">
                <div class="post_content">
                    <div class="vc_empty_space space_32p">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                    <h1 class="page_title">404</h1>
                    <h2 class="page_subtitle">{{trans('front.requested-page')}}</h2>
                    <p class="page_description">{{trans('front.cant-find')}} <a href="{{route('homepage')}}">{{trans('front.home-btn')}}</a>.</p>
                    <div class="aligncenter">
                        <a href="{{route('homepage')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium margin_top_null margin_bottom_null bgc_5">{{trans('front.go-home')}}</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection

@section('custom-js')


@endsection
