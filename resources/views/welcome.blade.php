@extends('layouts.app')
@section('content')
<!-- banner -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ url('settings/Anti-drug-creative-1400x400-1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ url('settings/banner2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="{{ url('settings/poster-website.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="mb-5">
    <div class="container">
        <h1 class="text-center mt-5">About MBM</h1>
        <hr>
        <div class="row mt-4 pt-5">
            <div class="col-12 col-md-6 justify-content-center align-items-center d-flex">
                <img src="{{ url('settings/mbm.jpg') }}" class="w-75 ms-2">
            </div>
            <div class="col-12 col-md-6">
                <h3 class="text-primary mt-4">MBM UNIVERSITY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <a href="#">Read more...</a>
            </p>
            </div>
        </div>
    </div>
</section>
<!-- news -->
<section class="ps-2">
    <h1 class="text-center mt-5">News & Events</h1>
    <hr>
    <div class="container mt-5 pe-0">
     <div class="row w-100">
        <div class="col-12 col-md-8 rounded" style="background: #f1f1f1;">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="p-4 position-relative h-100">
                        <img src="{{ url('settings/logo_qhk837zx.webp') }}" style="width:20%;">
                        <h1 class="mt-2">Encarta Event</h1>
                        <p>THE ANNUAL TECHNICAL FEST</p>
                        <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="btn btn-primary position-absolute bottom-0">Register Now</button>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4">
                    <iframe class="rounded-4" src="https://www.encarta.tech/" width="320px" height="500px"></iframe>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card d-flex">
                       <div class="row">
                           <div class="col-4 justify-content-center align-items-center d-flex">
                                <img src="{{ url('settings/logo_qhk837zx.webp') }}" class="w-100 p-3">
                           </div>
                           <div class="col-8 py-4">
                               <h4>Encarta Events</h4>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<a href="#">Read more..</a></p>
                           </div>
                       </div>
                    </div>
                </div>
                 <div class="col-12 mb-3">
                    <div class="card d-flex">
                       <div class="row">
                           <div class="col-4 justify-content-center align-items-center d-flex">
                                <img src="{{ url('settings/mbm.jpg') }}" class="w-100 ms-2">
                           </div>
                           <div class="col-8 py-4">
                               <h4>Headings 1</h4>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<a href="#">Read more..</a></p>
                           </div>
                       </div>
                    </div>
                </div>
                 <div class="col-12 mb-3">
                    <div class="card d-flex">
                       <div class="row">
                           <div class="col-4 justify-content-center align-items-center d-flex">
                                <img src="{{ url('settings/1.jpg') }}" class="w-100 p-3">
                           </div>
                           <div class="col-8 py-4">
                               <h4>Encarta Events</h4>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<a href="#">Read more..</a></p>
                           </div>
                       </div>
                    </div>
                </div>
                 <div class="col-12 mb-3">
                    <div class="card d-flex">
                       <div class="row">
                           <div class="col-4 justify-content-center align-items-center d-flex">
                                <img src="{{ url('settings/2.jpg') }}" class="w-100 p-3">
                           </div>
                           <div class="col-8 py-4">
                               <h4>Encarta Events</h4>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<a href="#">Read more..</a></p>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection