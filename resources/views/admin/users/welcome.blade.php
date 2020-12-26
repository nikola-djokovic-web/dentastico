@extends('templates.admin.master.layout')

@section('seo-title')
<title>Welcome {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('custom-css')

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{trans('front.welcome')}}
        <small>Ovde sve počinje</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Kreiraj i izmeni</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a href="">Kreiraj novi blog</a>
        </div>
        
        <!-- /.box-body -->

        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->



@endsection

@section('custom-js')

@endsection
