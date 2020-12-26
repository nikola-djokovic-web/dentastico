<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
@include('templates.frontend.partials.head')
@yield('custom-css')

<body class="home3 page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide vc_responsive">
    <a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            @include('templates.frontend.partials.header')
            @yield('main-slider')

            @yield('breadcrumbs')
            <div class="page_content_wrap page_paddings_no">
                <div class="content_wrap">
                    @yield('content')
                </div>
            </div>
            @include('templates.frontend.partials.footer')
            <div class="copyright_wrap copyright_style_text scheme_dark">
                <div class="copyright_wrap_inner">
                    <div class="content_wrap_outer">
                        <div class="content_wrap">
                            <div class="copyright_text">Web Design - <a style="color: white;" href="https://www.linkedin.com/in/nikola-djokovic-330/">Nikola Đoković</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup_login" class="popup_wrap popup_login bg_tint_light">
        <a href="#" class="popup_close"></a>
        <div class="form_wrap">
            <div class="form_left">
                <form action="#" method="post" name="login_form" class="popup_form login_form">
                    <input type="hidden" name="redirect_to" value="index.html">
                    <div class="popup_form_field login_field iconed_field icon-user">
                        <input type="text" id="log" name="log" value="" placeholder="Login or Email">
                    </div>
                    <div class="popup_form_field password_field iconed_field icon-lock">
                        <input type="password" id="password" name="pwd" value="" placeholder="Password">
                    </div>
                    <div class="popup_form_field remember_field">
                        <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                        <label for="rememberme">Remember me</label>
                        <a href="#" class="forgot_password">Forgot password?</a>
                    </div>
                    <div class="popup_form_field submit_field">
                        <input type="submit" class="submit_button" value="Login">
                    </div>
                </form>
            </div>
            <div class="form_right">
                <div class="login_socials_title">You can login using your social profile</div>
                <div class="loginSoc login_plugin">
                    <div class="wp-social-login-widget">
                        <div class="wp-social-login-connect-with">Connect with:</div>
                        <div class="wp-social-login-provider-list">
                            <a rel="nofollow" href="#" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
                                <img alt="" title="Connect with Facebook" src="/templates/frontend/images/facebook.png" />
                            </a>
                            <a rel="nofollow" href="#" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
                                <img alt="" title="Connect with Google" src="/templates/frontend/images/google.png" />
                            </a>
                            <a rel="nofollow" href="#" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
                                <img alt="" title="Connect with Twitter" src="/templates/frontend/images/twitter.png" />
                            </a>
                        </div>
                        <div class="wp-social-login-widget-clearing"></div>
                    </div>
                </div>
                <div class="result message_block"></div>
            </div>
        </div>
    </div>
    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
    <div class="custom_html_section"></div>

    @yield('custom-js')
    @include('templates.frontend.partials.js')

</body>
</html>
