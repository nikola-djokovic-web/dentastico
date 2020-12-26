<footer class="footer_wrap widget_area scheme_dark">
    <div class="footer_wrap_inner widget_area_inner">
        <div class="content_wrap">
            <div class="columns_wrap">
                <aside class="column-1_2 widget widget_socials">
                    <div class="widget_inner">
                        <div class="logo">
                            <a href="{{route('homepage')}}">
                                <img src="/templates/frontend/images/logo-dent-footer.png" class="logo_main" alt="Dentastico logo" width="168" height="42">
                            </a>
                        </div>
                        <div class="logo_descr">
                          <p>
                            <b>{{trans('front.mission')}}</b> {{trans('front.mission-d')}}

                          </p>
                          <p>
                              <b>{{trans('front.vision')}}</b> {{trans('front.vision-d')}}
                          </p>

                        </div>
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                            <div class="sc_socials_item">
                                <a href="https://twitter.com/dentastico/" target="_blank" class="social_icons social_twitter">
                                    <span class="icon-twitter"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="https://www.instagram.com/dentastico.serbia/" target="_blank" class="social_icons social_instagramm">
                                    <span class="icon-instagramm"></span>
                                </a>
                            </div>
                            
                            <div class="sc_socials_item">
                                <a href="https://www.facebook.com/Dentastico-107844797412293/" target="_blank" class="social_icons social_facebook">
                                    <span class="icon-facebook"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="https://www.linkedin.com/in/dentastico-serbia-69656119b/" target="_blank" class="social_icons social_linkedin">
                                    <span class="icon-linkedin"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>

                <aside class="column-1_2 widget widget_text">
                    <h5 class="widget_title">{{trans('front.contact-us')}}</h5>
                    @include('templates.partials.message')
                    <div class="textwidget">
                        <div id="sc_form_044_wrap" class="sc_form_wrap">
                            <div id="sc_form_044" class="sc_form sc_form_style_form_1 margin_top_null margin_bottom_null">
                              <form id="sc_form_329_form" data-formtype="form_2" method="post" action="{{route('contactF')}}" class="inited">
                                  @csrf
                                  <div class="sc_form_item sc_form_field label_over">
                                      <label class="required" for="sc_form_username">{{trans('front.name')}}</label>
                                      <input id="sc_form_username" type="text" name="name" value="{{old('name')}}" placeholder="{{trans("front.name")}} *" required>
                                  </div>
                                  <div class="sc_form_item sc_form_field label_over">
                                      <label class="required" for="sc_form_email"></label>
                                      <input id="sc_form_email" type="text" value="{{old('email')}}" name="email" placeholder="{{trans("front.email")}} *" required>
                                  </div>
                                  <div class="sc_form_item sc_form_message label_over">
                                    <label class="required" for="sc_form_message">{{trans('front.message')}}</label>
                                    <textarea id="sc_form_message" rows="1" name="message" placeholder="{{trans("front.message")}} *" required>{{old('message')}}</textarea>

                                  </div>
                                  <div class="sc_form_item sc_form_button">
                                      <button type="submit">{{trans('front.appointment')}}</button>
                                  </div>
                                  <div class="result sc_infobox"></div>
                              </form>

                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</footer>
