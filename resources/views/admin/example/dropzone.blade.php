@extends('admin.layouts.app')
@section('style')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
@endsection
@section('content')
<div class="card p-3 p-lg-4">
	<!--begin::Form-->
	<form class="form" action="#" method="post">
		<input type="hidden" id="noticeId">
		<input type="hidden" id="noticeName">
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
						<span class="fs-7 fw-bold text-gray-400">Upload Notice .pdf file</span>
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



@endsection
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
<script type="text/javascript">
	
	var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "{{url('admin/manage/notice/file-upload')}}", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles:1,
    maxFilesize:2, // MB
    addRemoveLinks: true,
    acceptedFiles: 'application/pdf', //"image/jpeg,image/png,image/gif
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
    	formData.append('id',$('#noticeId').val())
    	formData.append('name',$('#noticeName').val());
    }
});
</script>
@endsection