@extends('templates.frontend.layout')

@section('seo-title')
    <title>Search results {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('page-title')
    Search Results
@endsection

@section('custom-css')
@endsection


@section('content')
<div id="content">

			<section id="page-title-area" class="page-title-area d-flex align-items-end p-4">
				<div class="bg-image-holder"><img src="/templates/frontend/assets/img/page-title-bg.jpg" alt="page-title-bg"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-title">Blog</h1>
						</div>
						<div class="col-lg-12">
							<ol class="breadcrumbs d-flex align-items-center">
								<li>
									<a href="index.html">{{trans('front.home')}}</a>
								</li>
								<li class="active">Blog</li>
							</ol>
						</div>
					</div><!-- /.row-->
				</div><!-- /.container-->
			</section>

			<div class="container-custom">
				<div class="row">
					<div class="col-xl-4">
						<aside>
							<div class="widget widget-search">
								<form role="search" method="get" id="searchform" action="{{route('search')}}">
									<div class="search-box">
										<input type="text" name="query" id="query" class="form-control" placeholder="search in blog" required>
										<button type="submit" id="searchsubmit" class="btn-search"> <i class="fa fa-search"></i> </button>
									</div>
								</form>
							</div>



							<div class="widget widget-recent-posts">
								<h2 class="widget-title">Recent Posts</h2>
                @if(count($recentData) > 0)
                  @foreach($recentData as $article)
                    <article id="recent-post-1" class="recent-post">
									<figure>
										<a href="{{$article->blogUrl()}}">
											<img src="{{$article->getImage('s')}}" alt="Dr Perisic">
										</a>
									</figure>
									<div class="recent-post-title">
										<a href="{{$article->blogUrl()}}">
											<h3>{{$article->title}}</h3>
										</a>
									</div>
									<div class="recent-post-date">
										{{$article->created_at->format('d. M Y')}}
									</div>
								</article>
                  @endforeach
                @endif
							</div>


						</aside>
					</div><!-- /.col-xl-4-->

					<div class="col-xl-8">

						<div class="blog-posts">

							@if(count($data) > 0)
							<?php $counter = 0 ?>
							@foreach($data as $article)

							<article id="post-1" class="post d-flex flex-column flex-xl-row{{ ++$counter % 2 ? "" : "-reverse" }} justify-content-start">
								<figure>
									<a href="{{$article->blogUrl()}}"><img class="post-img" src="{{ $article->getImage('l') }}" alt="{{$article->title}}"></a>
									<img class="dotted" src="/templates/frontend/assets/img/dotted-bg.png" alt="dots">
								</figure>
								<div class="post-content pl-xl-5">
									<a href="{{$article->blogUrl()}}"><h1 class="post-title">{{$article->title}}</h1></a>
									<div class="post-meta d-flex justify-content-between"><span class="post-author">Dr. Perišić</span></div>
									<div class="post-excerpt mt-3">
										<p>
											{!! $article->content !!}
										</p>
									</div>

									<a href="blog-detail.html" class="btn-readmore mt-4">{{trans('front.details')}}</a>
								</div>
							</article>

							@endforeach
							@endif

						</div>

						<div class="pagination">
							{{$data->links()}}
						</div>

					</div><!-- /.col-xl-8-->
				</div><!-- /.row-->
			</div><!-- /.container-fluid-->



		</div>
@endsection

@section('custom-js')
@endsection
