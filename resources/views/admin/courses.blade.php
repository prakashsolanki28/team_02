@extends('admin.layouts.lte')
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
@endsection
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Gallery</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Gallery</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

@if(Session::has('success'))
<p class="alert"></p>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success :</strong> {{ Session::get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="w-100 d-block">
  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addCourse">Add Image</button>
</div><br/><br/>
<div class="card p-3">
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>Stream</th>
        <th>Duration</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
     @foreach($courses as $key=> $course)
     <tr>
      <td>{{ $key+1 }}</td>
      <td>{{ $course->name }}</td>
      <td>{{ $course->stream }}</td>
      <td>{{ $course->duration }}</td>
     <td>
       <a href="{{ url('admin/courses/delete/'.$course->id) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
       <button class="btn btn-warning update btn-sm text-white" stream="{{ $course->stream }}" title="{{ $course->name }}" id="{{ $course->id }}"><i class="bi bi-pencil-fill"></i></button>
     </td>
   </tr>
   @endforeach
 </tbody>
</table>
</div>
<!-- Add Image -->
<div class="modal fade" id="addCourse" tabindex="-1" role="dialog" aria-labelledby="addImageofGallery" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addImageofGallery">Galler Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" action="{{ url('admin/courses/add') }}" method="post">
          @csrf
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label class="form-label">Name</label>
            <input class="form-control" type="text" name="name" />
            <label class="form-label">Stream</label>
            <input class="form-control" type="text" name="stream" />
            <label class="form-label">Duration</label>
            <input class="form-control" type="text" name="duration" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" type="button" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



@section('script')
<script type="text/javascript">
  $(document).ready(function () {
    $('#example').DataTable();
  });

  $('.update').on('click', function(){
      $('#id').val($(this).attr('id'));
      $('#title').val($(this).attr('title'));
      $('#addFile').modal('toggle');
  })
</script>
@endsection

@endsection


