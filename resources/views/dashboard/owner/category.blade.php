<!doctype html>
<html lang="en">
<head>
    {!! SEO::generate() !!}
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/FontAwesome/css/all.css')}}">

</head>
<body>
@include('sweetalert::alert')


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
    <div class="container" style="position: relative;padding: 20px">
        <h2>فرم اضافه کردن محصول</h2>
        <form action="{{route('owner.add_category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <input name="name_category" type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input type="file" name="image_category">
                </div>
            </div>
            <input class="btn btn-primary col-3" type="submit" value="اضافه کردن دسته بندی">
        </form>

    </div>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col">حذف</th>
            <th scope="col">ویرایش</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category_user as $key=>$value)
            <tr>
                <th scope="row">{{$key}}</th>
                <td>{{$value->category_name}}</td>
                <td><a href="{{$value->category_id}}">حذف</a></td>
                <td><a href="{{$value->category_id}}">ویرایش</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>


</div>


<script src="{{asset('assets/js/ckeditor.js')}}"></script>
<script>
    // ClassicEditor
    //     .create(document.querySelector('#description'))
    //     .catch(error => {
    //         console.error(error);
    //     });
</script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.js')}}"></script>
<script src="{{ asset('assets/css/FontAwesome/js/all.js') }}"></script>

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
    $(document).ready(function () {
        $(".exit_button").click(function () {
            $(this).parent().fadeOut(200);
        });

        $('.show_more').click(function () {
            $("#" + $(this).attr('tag')).fadeIn(500);
        });
    });

</script>

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