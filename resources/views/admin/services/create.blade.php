@extends('templates.admin.layout')

@section('seo-title')
<title>Create new partner {{ config('app.seo-separator') }} {{ config('app.name') }}</title>
@endsection

@section('custom-css')

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">New partner</h2>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf


      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label>Title (Serbian)</label>
                                <input class="form-control" type="text" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <p class="help-block text-danger">{{ $errors->first('title') }}</p>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('title2') ? ' has-error' : '' }}">
                                <label>Title (English)</label>
                                <input class="form-control" type="text" name="title2" value="{{ old('title2') }}">

                                @if ($errors->has('title2'))
                                    <p class="help-block text-danger">{{ $errors->first('title2') }}</p>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('title3') ? ' has-error' : '' }}">
                                <label>Title (Italian)</label>
                                <input class="form-control" type="text" name="title3" value="{{ old('title3') }}">

                                @if ($errors->has('title3'))
                                    <p class="help-block text-danger">{{ $errors->first('title3') }}</p>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label>Description (optional)</label>
                                <textarea class="form-control" name="description">{!!old('description')!!}</textarea>

                                @if ($errors->has('description'))
                                    <p class="help-block text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                <label>Content (Serbian)</label>
                                <textarea class="form-control" name="content">{!!old('content')!!}</textarea>

                                @if ($errors->has('content'))
                                    <p class="help-block text-danger">{{ $errors->first('content') }}</p>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('content2') ? ' has-error' : '' }}">
                                <label>Content (English)</label>
                                <textarea class="form-control" name="content2">{!!old('content2')!!}</textarea>

                                @if ($errors->has('content2'))
                                    <p class="help-block text-danger">{{ $errors->first('content2') }}</p>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('content3') ? ' has-error' : '' }}">
                                <label>Content (Italian)</label>
                                <textarea class="form-control" name="content3">{!!old('content3')!!}</textarea>

                                @if ($errors->has('content3'))
                                    <p class="help-block text-danger">{{ $errors->first('content3') }}</p>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label>Image featured</label>
                                <input type="file" name='image'>

                                @if ($errors->has('image'))
                                    <p class="help-block text-danger">{{ $errors->first('image') }}</p>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('gallery') ? ' has-error' : '' }}">
                                <label>Images for gallery</label>
                                <input type="file" name='gallery[]' multiple>

                                @if ($errors->has('gallery'))
                                    <p class="help-block text-danger">{{ $errors->first('gallery') }}</p>
                                @endif
                            </div>


                            <!-- <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label>Images</label>
                                <input type="file" name='image'>

                                @if ($errors->has('image'))
                                    <p class="help-block text-danger">{{ $errors->first('image') }}</p>
                                @endif
                            </div> -->

                            <div class="form-group text-right">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom-js')
<script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
    CKEDITOR.replace( 'content2' );
    CKEDITOR.replace( 'content3' );

</script>
@endsection
