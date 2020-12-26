@extends('templates.frontend.layout')

@section('seo-title')
    <title>{{$project->title}} {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('page-title')
    {{$project->title}}
@endsection

@section('custom-css')
<link href="/templates/frontend/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/templates/frontend/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="/templates/frontend/assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
<link href="/templates/frontend/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="/templates/frontend/assets/my-css-custom.css" rel="stylesheet" type="text/css"/>
@endsection

@section('slider')
@include('templates.frontend.partials.slider')
@endsection

@section('projects')
<div class="c-content-box c-size-md">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="c-content-blog-post-1">
                    <div class="c-media">
                        <div class="c-content-media-2-slider" data-slider="owl">
                            <div class="owl-carousel owl-theme c-theme owl-single" data-rtl="false" data-single-item="true" data-auto-play="4000">

                                <div class="item">
                                    <div class="c-content-media-2" style="background-image: url({{$project->getImage('xl')}}); min-height: 460px;"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-title c-font-bold c-font-uppercase">
                        <a href="#">{{$project->title}}</a>
                    </div>
                    <div class="c-panel c-margin-b-30">

                        <div class="c-date">
                            <span class="c-font-uppercase">{{$project->created_at}}</span>
                        </div>

                        <div class="c-comments">
                            <a href="#">
                                Donator: Ime donatora</a>
                        </div>
                    </div>
                    <div class="c-desc">
                        <p> {!!$project->content!!}   </p>
                        {{$project->description}}
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                <form action="{{route('search')}}" method="GET">
                    <div class="input-group">
                        <input type="text" name="query" id="query" class="form-control c-square c-theme-border" placeholder="{{trans('front.search')}}">
                        <span class="input-group-btn">
                            <button class="btn c-theme-btn c-theme-border c-btn-square" type="submit">{{trans('front.go')}}</button>
                        </span>
                    </div>
                </form>


                <div class="c-content-ver-nav">
                    <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                        <h3 class="c-font-bold c-font-uppercase">{{trans('front.projects')}}</h3>
                        <div class="c-line-left c-theme-bg"></div>
                    </div>
                    @if(count($data) > 0)
                    <ul class="c-menu c-arrow-dot c-theme">
                        @foreach($data as $project)
                        <li><a href="{{ route('one-project', ["id" => $project->id, "slug" => str_slug($project->title) ]) }}">{{$project->title}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </div><!-- END: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
            </div>
        </div>
    </div>
</div>
@endsection


@section('mission')

@endsection

@section('custom-js')

@endsection
