@extends('templates.admin.login.layout')

@section('seo-title')
<title>{{ trans('admin.login') }} {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('custom-css')

@endsection

@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href="{{route('homepage')}}"><b>Admin</b>Dentastico</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">{{trans('admin.sign-in')}}</p>

    @include('templates.admin.partials.message')

    <form role='form' action="" method="post">
        @csrf
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input value='{{ old('email') }}' class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" name="password" placeholder="Password" value="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </div>
        @endif
      </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <a href="#">{{trans('admin.forgot-password')}}</a><br> -->

  </div>
  <!-- /.login-box-body -->
</div>
@endsection

@section('custom-js')

@endsection
