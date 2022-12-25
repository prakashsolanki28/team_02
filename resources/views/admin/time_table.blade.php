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
        <h1>Time Table</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Time Table</li>
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
  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addTimeTable">Add TimeTable</button>
</div><br/><br/>
<div class="card p-3">
  <table id="example" class="table table-striped w-100">
    <thead>
      <tr>
        <th>Id</th>
        <th>Course</th>
        <th>Title</th>
        <th>File</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
     @foreach($time_table as $key => $tt)
     <tr>
      <td>{{ $key+1 }}</td>
      <td>
           {{ $tt->course->name }}
      </td>
      <td>{{ $tt->title }}</td>
      <td>
          @if(isset($tt->file))
          <a class="text-success" href="{{ url('time-table/'.$tt->file) }}">View Time Table</a>
          @else
          <a class="text-danger" href="{{ url('time-table/'.$tt->file) }}">Upload Time Table</a>
          @endif
      </td>
     <td>
       <a href="{{ url('admin/time-table/delete/'.$tt->id) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
       <button class="btn btn-warning btn-sm update text-white" id="{{ $tt->course->id }}"><i class="bi bi-pencil-fill"></i></button>
     </td>
   </tr>
   @endforeach
 </tbody>
</table>
</div>
<!-- Add Image -->
<div class="modal fade" id="addTimeTable" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addImageofGallery">Time Table</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" action="{{ url('admin/time-table/add') }}" method="post">
          @csrf
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label class="form-label">Select Course</label>
            <select class="form-control course_select" name="course">
              <option value="">Select a Course</option>
              @foreach($courses as $key => $course)
              <option value="{{ $course->id }}">{{ $course->name }}</option>
              @endforeach
          </select>
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

<!-- Add Image -->
<div class="modal fade" id="addFile" tabindex="-1" role="dialog" aria-labelledby="addfileimage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addfileimage">Gallery Image Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card p-3 p-lg-4">
          <!--begin::Form-->
          <form class="form" action="#" method="post">
            <input type="hidden" id="fileId">
            <input type="hidden" id="fileTitle">
            <!--begin::Input group-->
            <div class="fv-row">
              <!--begin::Dropzone-->
              <div class="dropzone justify-content-center d-flex align-items-center" id="kt_dropzonejs_example_1">
                <!--begin::Message-->
                <div class="dz-message needsclick">
                  <!--begin::Icon-->
                  <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                  <!--end::Icon-->
                  <!--begin::Info-->
                  <div class="ms-4">
                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                    <span class="fs-7 fw-bold text-gray-400">Upload Notice .image/jpeg,image/png file</span>
                  </div>
                  <!--end::Info-->
                </div>
              </div>
              <!--end::Dropzone-->
            </div>
            <!--end::Input group-->
          </form>
          <!--end::Form-->
        </div>
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
    $('.course_select option:eq('+$(this).attr('id')+')').prop('selected', true)

    $('#addTimeTable').modal('toggle');
  })


  $('.addImageData').on('click', function(){
      $('#fileId').val($(this).attr('imgid'));
      $('#fileTitle').val($(this).attr('title'));
      $('#addFile').modal('toggle');
  })
 
  var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "{{url('admin/gallery/file')}}", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles:1,
    maxFilesize:2, // MB
    addRemoveLinks: true,
    acceptedFiles: 'image/jpeg,image/png', //"image/jpeg,image/png,image/gif
    headers: {
      'X-CSRF-TOKEN': "{{csrf_token()}}",
    },
    accept: function(file, done)
    {
      if (file.name == "wow.jpg") {
        done("Naha, you don't.");
      } else {
        done();
      }
    },
    success:function(res)
    {
      setTimeout(function(){
        window.location.href = window.location.href;
      },1000)
    },
    sending: function(file, xhr, formData){
      formData.append('id',$('#fileId').val())
      formData.append('title',$('#fileTitle').val());
    }
});
</script>
@endsection

@endsection


