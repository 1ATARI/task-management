<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/dashboard/images/favicon.png')}}" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <a href="{{route('dashboard')}}">
                                <img src="{{asset('assets/dashboard/images/logo.svg')}}" alt="logo"></a>
                        </div>
                        <h4>New here?</h4>
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>

                        <form class="pt-3" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" value="{{old('name')}}" id="exampleInputUsername1" placeholder="Name" name="name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" value="{{old('email')}}">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password Confirmation">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">SIGN UP</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="{{route('login')}}" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('assets/dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/dashboard/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/dashboard/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/dashboard/js/template.js')}}"></script>
<script src="{{asset('assets/dashboard/js/settings.js')}}"></script>
<script src="{{asset('assets/dashboard/js/todolist.js')}}"></script>
<!-- endinject -->
</body>

</html>
