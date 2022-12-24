@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <br>
        <span>Last Updated at {{date('Y-m-d H:i:s')}} </span>
        <section class="mb-5"><div class="container">
            <h1 class="text-center mt-5">News and Events</h1>
            <hr>
            <div class="row mt-md-4 pt-5 pb-xs-3">
                <div class="col-12 col-md-6 justify-content-center align-items-center d-flex">
                    <img src="{{ url('settings/mbm.jpg') }}" class="w-75 ms-2">
                </div>
                <div class="col-12 col-md-6 pt-5 pt-md-2">
                    <h3 class="text-primary">News 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="#">Read more...</a></p>
                </div>
            </div>
            <div class="row mt-md-4 pt-5 pb-xs-3">
                <div class="col-12 col-md-6 order-md-2 order-lg-1 order-1">
                    <h3 class="text-primary pt-5 pt-md-2">News 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="#">Read more...</a></p>
                </div>
                <div class="col-12 col-md-6 justify-content-center align-items-center d-flex order-md-1 order-lg-2">
                    <img src="{{ url('settings/mbm.jpg') }}" class="w-75 ms-2">
                </div>
            </div>
            <div class="row mt-md-4 pt-5 pb-xs-3">
                <div class="col-12 col-md-6 justify-content-center align-items-center d-flex">
                    <img src="{{ url('settings/mbm.jpg') }}" class="w-75 ms-2">
                </div>
                <div class="col-12 col-md-6">
                    <h3 class="text-primary pt-5 pt-md-2">News 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="#">Read more...</a></p>
                </div>
            </div>
            <div class="row mt-md-4 pt-5 pb-xs-3">
                <div class="col-12 col-md-6 order-md-2 order-lg-1 order-1">
                    <h3 class="text-primary pt-5 pt-md-2">News 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="#">Read more...</a></p>
                </div>
                <div class="col-12 col-md-6 justify-content-center align-items-center d-flex order-md-1 order-lg-2">
                    <img src="{{ url('settings/mbm.jpg') }}" class="w-75 ms-2">
                </div>
            </div>
        </section>
    </div>
</section>
@endsection