<header class="top_panel_wrap top_panel_style_2 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_2 top_panel_position_above">
        <div class="top_panel_middle">
            <div class="content_wrap">
                <div class="columns_wrap columns_fluid">
                    <div class="column-1_3 contact_field contact_phone_wrap">
                      <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_small margin_bottom_small">
                            <div class="sc_socials_item">
                                <a href="https://twitter.com/dentastico/" target="_blank" class="social_icons social_twitter">
                                    <span class="icon-twitter"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="https://www.facebook.com/Dentastico-107844797412293/" target="_blank" class="social_icons social_facebook">
                                    <span class="icon-facebook"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="https://www.instagram.com/dentastico.serbia/" target="_blank" class="social_icons social_instagram">
                                    <span class="icon-instagramm"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="https://www.linkedin.com/in/dentastico-serbia-69656119b/" target="_blank" class="social_icons social_linkedin">
                                    <span class="icon-linkedin"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="mailto:office@dentastico.rs" target="_blank" class="social_icons social_facebook">
                                    <span class="icon-mail"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="column-1_3 contact_logo">
                        <div class="logo">
                            <a href="{{route('homepage')}}">
                                <img src="/templates/frontend/images/logo-dent.png" class="logo_main" alt="Dentastico logo" width="202" height="49">
                            </a>
                        </div>
                    </div>
                    <div class="column-1_3 contact_field open_hours_wrap">
                      <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                          <div class="column-1_2 sc_column_item sc_column_item_1 odd first">

                              <div class="wpb_text_column wpb_content_element vc_custom_1454599782141">
                                  <div class="wpb_wrapper">
                                    <div class="">
                                      <span class="contact_icon">
                                        <a href="viber://chat/?number=%2B381642870900"><img style="margin-top: 3px;" src='/templates/frontend/images/viber.png'></a>
                                        <span><a href="https://api.whatsapp.com/send?phone=381652870900"><img style="margin-top: 3px;" src='/templates/frontend/images/whatsapp.png'></a></span>
                                      </span>
                                    </div>
                                        <div class="">
                                          <span class="text-left">+381 125 65 24</span>
                                          <span class="text-left">+381 125 65 24</span>
                                          <span class="contact_icon"><a href="viber://chat/?number=%2B381642870900"><img style="margin-top: 3px;" src='/templates/frontend/images/whatsapp.png'></a></span>
                                        </div>
                                    </div>
                              </div>
                          </div>
                          <div class="column-1_2 sc_column_item sc_column_item_2 even">

                              <div class="wpb_text_column wpb_content_element vc_custom_1454599787135">
                                  <div class="wpb_wrapper" style="margin-top: 10px;">
                                    <div class="nav-wrapper">
                                      <div class="sl-nav">
                                        <!-- Sprache: -->
                                        <ul>
                                          <li><b>Language: {{strtoupper(app()->getlocale())}}</b> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            <div class="triangle"></div>
                                            <ul class="langs">
                                              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                                <li>
                                                  <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    @if($properties['native'] == 'Srpski')
                                                      <i class="sl-flag flag-sr"></i>
                                                    @elseif($properties['native'] == 'English')
                                                      <i class="sl-flag flag-uk"></i>
                                                    @elseif($properties['native'] == 'Italiano')
                                                      <i class="sl-flag flag-it"></i>
                                                    @endif

                                                      {{ $properties['native'] }}
                                                  </a>
                                                </li>

                                              @endforeach
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="top_panel_bottom">
            <div class="content_wrap clearfix">
                <nav class="menu_main_nav_area">
                    <ul id="menu_main" class="menu_main_nav">
                        <li class="menu-item {{ isActiveRoute('homepage') }}"><a href="{{route('homepage')}}"><span>{{trans('front.home')}}</span></a>
                        </li>
                        <li class="menu-item {{ isActiveRoute('about') }}"><a href="{{route('about')}}"><span>{{trans('front.about-us')}}</span></a>
                        </li>
                        <li class="menu-item {{ isActiveRoute('our-services') }}"><a href="{{route('our-services')}}"><span>{{trans('front.our-services')}}</span></a>
                        </li>
                        <li class="menu-item {{ isActiveRoute('services') }}"><a href="{{route('services')}}"><span>{{trans('front.partners')}}</span></a>
                        </li>

                        <li class="menu-item {{ isActiveRoute('contact') }}"><a href="{{route('contact')}}"><span>{{trans('front.contact')}}</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="{{route('homepage')}}">
                <img src="/templates/frontend/images/logo-dent.png" class="logo_main" alt="Dentastico logo" width="202" height="49">
            </a>

        </div>

    </div>
    <div class="side_wrap">
        <div class="close">Close</div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_main_mobile" class="menu_main_nav">
                    <li class="menu-item {{ isActiveRoute('homepage') }}"><a href="{{route('homepage')}}"><span>{{trans('front.home')}}</span></a>
                    </li>
                    <li class="menu-item {{ isActiveRoute('about') }}"><a href="{{route('about')}}"><span>{{trans('front.about-us')}}</span></a>
                    </li>
                    <li class="menu-item {{ isActiveRoute('ourServices') }}"><a href="{{route('our-services')}}"><span>{{trans('front.our-services')}}</span></a>
                    </li>
                    <li class="menu-item {{ isActiveRoute('services') }}"><a href="{{route('services')}}"><span>{{trans('front.services')}}</span></a>
                    </li>
                    <li class="menu-item {{ isActiveRoute('contact') }}"><a href="{{route('contact')}}"><span>{{trans('front.contact')}}</span></a>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="open_child_menu"></span><span>Languages</span></a>
                        <ul class="sub-menu">
                          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="menu-item"><a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                              @if($properties['native'] == 'Srpski')
                                <i class="sl-flag flag-sr"></i>
                              @elseif($properties['native'] == 'English')
                                <i class="sl-flag flag-uk"></i>
                              @elseif($properties['native'] == 'Italiano')
                                <i class="sl-flag flag-it"></i>
                              @endif
                              <span style="margin-left: 10px;">{{ $properties['native'] }}</span>
                              </a>
                            </li>
                          @endforeach
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
        <div class="panel_bottom">
          <a href="viber://chat/?number=+381662889898"><img style="margin-top: 3px;" src='/templates/frontend/images/viber.png'></a>
          <span><a href="https://api.whatsapp.com/send?phone=381652870900"><img style="margin-top: 3px;" src='/templates/frontend/images/whatsapp.png'></a></span>

            <div class="contact_socials">
                <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                    <div class="sc_socials_item">
                        <a href="https://twitter.com/dentastico" target="_blank" class="social_icons social_twitter">
                            <span class="icon-twitter"></span>
                        </a>
                    </div>

                    <div class="sc_socials_item">
                        <a href="https://www.facebook.com/Dentastico-107844797412293/" target="_blank" class="social_icons social_facebook">
                            <span class="icon-facebook"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="https://www.instagram.com/dentastico.serbia/" target="_blank" class="social_icons social_instagramm">
                            <span class="icon-instagramm"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="https://www.instagram.com/dentastico.serbia/" target="_blank" class="social_icons social_linkedin">
                            <span class="icon-linkedin"></span>
                        </a>
                    </div>
                    <div style="margin-bottom: 5px;">
                        office@dentastico.rs
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mask"></div>
</div>
