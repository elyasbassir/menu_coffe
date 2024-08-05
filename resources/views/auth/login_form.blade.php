<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/FontAwesome/css/all.css')}}">
</head>
<body>
@include('sweetalert::alert')
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <h2 style="text-align: center">ورود</h2>
                <form action="{{route('login_user')}}" method="post">
                    @csrf
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">شماره همراه </label>
                        <input type="phone" id="form3Example3" class="form-control form-control-lg"
                               placeholder="09123456789" name="phone"/>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">رمز عبور شما</label>
                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                               placeholder="123456789" name="password"/>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="true" name="remember"/>
                            <label class="form-check-label" for="form2Example3">
                                مرا به خاطر بسپار
                            </label>
                        </div>
                        <a href="#!" class="text-body">رمز عبورتو فراموش کردی?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="ورود">
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.js')}}"></script>
<script src="{{ asset('assets/css/FontAwesome/js/all.js') }}"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "{{$error}}"
            });
        </script>
    @endforeach
@endif

</body>
</html>
