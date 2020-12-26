@extends('templates.frontend.layout')

@section('custom-css')
<style media="screen">
  .sc_column_item img{
    height: 280px;
    width: 250px;
  }
  .service-image{
    width: 450px;
  }
  .sc_title{
    margin-top: 20px;
  }
</style>
@endsection

@section('breadcrumbs')
<div class="top_panel_title top_panel_style_2 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_2  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title">Services</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Services</span>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="page_content_wrap page_paddings_yes">

      <div class="content_wrap">
          <div class="content">

                <article class="post_item post_item_single_team post_featured_right team has-post-thumbnail hentry">

                      <section class="post_content">
                        @if(count($data)>0)
                          @foreach($data as $value)

                          <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1452782452156" style="position: relative; left: -159.6px; box-sizing: border-box; width: 1519px; padding-left: 159.6px; padding-right: 159.4px;">

                              <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner ">
                                      <div class="wpb_wrapper">
                                          <div class="columns_wrap sc_columns columns_nofluid autoheight sc_columns_count_2">
                                              <div class="column-1_2 sc_column_item service-image" >
                                                  <!-- <div class="sc_column_item_inner bgimage_column"></div> -->
                                                  <img src="{{$value->getImage('l')}}" alt="Dentastico Services">
                                              </div>
                                              <div class="column-1_2 sc_column_item" >
                                                  <h2 class="sc_title sc_title_regular margin_bottom_null">{{$value->title}}</h2>
                                                  <h3 class="vc_custom_heading vc_custom_1455113405644">Senior Doctor</h3>
                                                  <div class="wpb_text_column wpb_content_element ">
                                                      <div class="wpb_wrapper">
                                                          <p>
                                                              {{$value->description}}
                                                          </p>

                                                          <span><a href="{{$value->serviceUrl()}}"> <button type="button"> Detaljnije </button></a> </span>
                                                      </div>
                                                  </div>
                                                  <div class="vc_empty_space space_30p">
                                                      <span class="vc_empty_space_inner"></span>
                                                  </div>
                                                  <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_small margin_bottom_small">
                                                      <div class="sc_socials_item">
                                                          <a href="#" target="_blank" class="social_icons social_twitter">
                                                              <span class="icon-twitter"></span>
                                                          </a>
                                                      </div>
                                                      <div class="sc_socials_item">
                                                          <a href="#" target="_blank" class="social_icons social_facebook">
                                                              <span class="icon-facebook"></span>
                                                          </a>
                                                      </div>
                                                      <div class="sc_socials_item">
                                                          <a href="#" target="_blank" class="social_icons social_gplus">
                                                              <span class="icon-gplus"></span>
                                                          </a>
                                                      </div>
                                                      <div class="sc_socials_item">
                                                          <a href="#" target="_blank" class="social_icons social_pinterest">
                                                              <span class="icon-pinterest"></span>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="vc_row-full-width"></div>

                          @endforeach
                        @endif
                      </section>

              </article>



            <section class="related_wrap related_wrap_empty"></section>
          </div>
      </div>

</div>
@endsection


@section('custom-js')

@endsection
