@if(session()->has('message'))

<div class="sc_infobox sc_infobox_style_{{session('message-type')}} sc_infobox_closeable sc_infobox_iconed icon-lightbulb-light inited">
  <div class="wpb_text_column wpb_content_element ">
      <div class="wpb_wrapper">
        <p>{{session('message')}}</p>
      </div>
  </div>
</div>

@endif
