@extends('admin.layouts.app')
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<div class="w-100 d-block">
	<button class="btn btn-primary float-end">Add User</button>
</div><br/><br/>
<div>
	<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($users as $key=> $user)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                	<button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                	<button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(function () {
    $('#example').DataTable();
});

</script>
@endsection