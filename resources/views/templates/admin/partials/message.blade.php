@if(session()->has('message'))
<div class="alert alert-{{session('message-type')}} alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-check"></i> Alert!</h4>
    {{session('message')}}
</div>
@endif
