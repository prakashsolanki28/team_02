<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>	
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	@yield('style')
</head>
<body class="d-flex">
	<header class="admin-sidebar">
		<div class="d-flex flex-column flex-shrink-0 p-3 bg-light position-fixed" style="width: 280px; height: 100vh;">
			<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
				<span class="fs-4">Dashboard</span>
			</a>
			<hr>
			<ul class="nav nav-pills flex-column mb-auto">
				<li class="nav-item">
					<a href="{{ url('admin') }}" class="nav-link active" aria-current="page">
						Dashboard
					</a>
				</li>
				<li class="mb-1 nav-item">
					<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
						Academics
					</button>
					<div class="collapse" id="orders-collapse">
						<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
							<li><a href="{{ url('admin/syllabus') }}" class="link-dark rounded">Syallbus</a></li>
							<li><a href="{{ url('admin/courses') }}" class="link-dark rounded">Courses</a></li>
							<li><a href="{{ url('admin/time-table') }}" class="link-dark rounded">Time Table</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a href="{{ url('admin/news') }}" class="nav-link " aria-current="page">
						News
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ url('admin/gallery') }}" class="nav-link " aria-current="page">
						Gallery
					</a>
				</li>
			</ul>
			<hr>
			<div class="dropdown">
				<a href="#" class="btn btn-secondary w-100">Log out</a>				
			</div>
		</div>
		<!-- mobile sidebar -->
		<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 300px;">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with scrolling</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<p>Try scrolling the rest of the page to see this option in action.</p>
			</div>
		</div>
	</header>
	<main class="admin-main">
		<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background:#F8F9FA;">
			<div class="container">
				<button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
					<span class="navbar-toggler-icon"></span>
				</button>
				<ul class="nav">
					<li class="nav-item">
						<a href="" class="nav-link">Hello</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="p-3">
			@yield('content')
		</div>
	</main>
	<script type="text/javascript" src="{{ url('js/jquery/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
	@yield('script')
</body>
</html>
