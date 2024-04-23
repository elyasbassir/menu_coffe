<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('link.links_css')
</head>
<body>
@include('sweetalert::alert')
<!-- overlay -->

@include('dashboard.sidebar')

<div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
    <!-- top nav -->
    <div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>
    <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
        <!-- close sidebar -->
        <button class="btn py-0 d-lg-none" id="open-sidebar" style="background-color: snow">
            <span class="bi bi-list text-primary h3"></span>
            <i class="fa fa-bars"></i>
        </button>

    </nav>

    <!-- main content -->

    <div class="container" style="position: relative;padding: 50px;">
        <h3 style="text-align: center">اضافه کردن فروشنده جدید</h3>
        <form action="{{route('new_owner')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">نام:</label>
                <input name="name" type="text" value="{{old('name')}}" class="form-control" id="exampleInputPassword1" placeholder="نام شما ...">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">نام خانوادگی:</label>
                <input name="last_name" value="{{old('last_name')}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="نام خانوادگی شما ...">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">شماره همراه:</label>
                <input name="phone"  type="phone" value="{{old('phone')}}" class="form-control" id="exampleInputPassword1" placeholder="شماره همراه شما ...">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">نام کافه:</label>
                <input name="coffee_name" value="{{old('coffee_name')}}" type="text" class="form-control"
                       placeholder="نام کافه...">
                <br>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">رمز عبور:</label>
                <input value="{{old('password')}}" name="password"  type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز عبور شما ...">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">آدرس کافه:</label>
                <textarea name="address_coffee"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="خیابان بعثت - نواب صفوی - ...">{{old('address_coffee')}}</textarea>   </div>
            <br>
            <input class="btn btn-primary" type="submit" value="تایید">
        </form>
    </div>


</div>


@include('link.links_js')
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
<script>
    $(document).ready(() => {

        $('#open-sidebar').click(() => {

            // add class active on #sidebar
            $('#sidebar').addClass('active');

            // show sidebar overlay
            $('#sidebar-overlay').removeClass('d-none');

        });


        $('#sidebar-overlay').click(function () {

            // add class active on #sidebar
            $('#sidebar').removeClass('active');

            // show sidebar overlay
            $(this).addClass('d-none');

        });

    });
</script>
</body>
</html>
