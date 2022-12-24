@extends('admin.layouts.app')
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="w-100 d-block">
	<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#galleryModal">Add Gallery Image</button>
</div><br/><br/>
<div>
	<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($galleries as $key=> $gallery)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $gallery->title }}</td>
                <td>{{ $gallery->image }}</td>
                <td>
                	<button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                	<button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="galleryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
@endsection


@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(function () {
        $('#example').DataTable();

    });

    // $('#galleryModal').on('show.bs.modal', function (event) {
    //   var button = $(event.relatedTarget) // Button that triggered the modal
    //   var recipient = button.data('whatever') // Extract info from data-* attributes
    //   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    //   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    //   var modal = $(this)
    //   modal.find('.modal-title').text('New message to ' + recipient)
    //   modal.find('.modal-body input').val(recipient)
    // })

</script>
@endsection