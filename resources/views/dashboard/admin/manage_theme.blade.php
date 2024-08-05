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

    <div class="container" style="position: relative;padding: 50px;">
        <h3 style="text-align: center">اضافه کردن تم</h3>
        <form action="{{route('admin.add_theme')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <select id="template" name="template_id" class="form-select col" aria-label="Default select example">
                    @foreach($templates as $key=>$value)

                        <option value="{{ $value->template_id }}">{{ $value->template_name }} </option>

                    @endforeach

                </select>

                <label>نام تم:</label>
                <input name="theme_name" type="text" value="{{old('name')}}" class="form-control"
                        placeholder="نام تم شما ...">
            </div>
            css
            <input accept="text/css" type="file" name="css_file">
            <br>
            js
            <input accept="text/*" type="file" name="js_file">
            <br>
            <input class="btn btn-primary " type="submit" value="تایید">
        </form>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">شماره</th>
                <th scope="col">نام قالب</th>
                <th scope="col">قالب مادر</th>
                <th scope="col">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($themes as $key=>$value)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$value->theme_name}}</td>
                    <td>{{ \App\Models\template::where('template_id',$value->template_id)->first()->value('template_name') }}</td>
                    <td>
                        <form action="{{ route('admin.delete_theme') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input name="theme_id" type="hidden" value="{{$value->theme_id}}">
                            <input type="submit" value="حذف تم">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


</div>


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
