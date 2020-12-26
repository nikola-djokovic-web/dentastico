@extends('templates.admin.master.layout')

@section('seo-title')
<title>
    Usluge
    {{ config('app.seo-separator') }} {{ config('app.name') }}
</title>
@endsection


@section('plugins-css')
<!-- DataTables -->
<link rel="stylesheet" href="/templates/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection

@section('custom-css')

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
Vesti
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

@include('templates.admin.partials.message')

<div class="row">

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sve usluge</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-12">
                            @if(count($data) > 0)
                            <table width="100%" class="table table-striped table-bordered table-hover" id='services-table'>
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th class="text-center">Options</th>
                                    </tr>
                                </thead>
                                <tbody id="sortable">
                                    @foreach($data as $value)
                                    <tr id="{{ $value->id }}">
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td><img style="height: 120px; width: 120px;" src='{{ $value->getImage('xl') }}'></td>
                                        <td>{{ $value->title }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a data-placement='top' data-original-title='Edit service' class="btn btn-xs btn-success" href='{{ route('services-edit', [ "service" => $value->id ]) }}'>Edit</a>

                                                @if($value->active == 0)
                                                <a data-button-title='Show' data-placement='top' data-original-title='show service {{ $value->title }}' class="btn btn-xs btn-warning" data-href='{{ route('services-active', [ "service" => $value->id ]) }}' data-toggle="modal" data-target="#myModal">Show</a>
                                                @else
                                                <a data-button-title='Hide' data-placement='top' data-original-title='hide service {{ $value->title }}' class="btn btn-xs btn-success" data-href='{{ route('services-active', [ "service" => $value->id ]) }}' data-toggle="modal" data-target="#myModal">Hide</a>
                                                @endif

                                                <button type='button' data-button-title='Delete' data-placement='top' data-original-title='delete service {{ $value->title }}' data-href="{{ route('services-delete', ["service" => $value->id]) }}" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-left" style="margin: 10px;">
                            <a class="btn btn-primary btn-sm" href='{{route('services-create')}}'>Create new service</a>
                            </div>
                            @else
                            <div class="alert alert-warning">


                                There are no service in database!!!
                                <a href="{{ route('services-create') }}">Create new service</a>



                            </div>
                            @endif
                        </div>
                      </div>
                  </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->


        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

</div>
</div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete service</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-action btn-danger">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


@endsection

@section('plugins-js')
<!-- DataTables -->

@endsection

@section('custom-js')
<script src="/templates/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/templates/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#services-table').DataTable({
        responsive: true,
        "columnDefs": [
            { "orderable": false, "targets": [0,2] },

        ]
    });
});

$('#myModal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget); // Button that triggered the modal
    var originalTitle = button.data('original-title'); // Extract info from data-* attributes

    //var userId = button.data('userid');
    var href = button.data('href');
    var buttonTitle = button.data('button-title');
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text(originalTitle);
    modal.find('.modal-body').text('Are you sure that you want to ' + originalTitle + '?')
    //modal.find('.modal-footer .btn-danger').attr('href', '/users/delete/' + userId);
    modal.find('.modal-footer .btn-action').attr('href', href);
    modal.find('.modal-footer .btn-action').text(buttonTitle);

    //modal.find('.modal-footer .btn-action').addClass();
})




$('table').tooltip({
    selector: "[data-placement=top]",
    container: "body"
})

</script>
@endsection
