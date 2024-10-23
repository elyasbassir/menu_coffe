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
        <h2 class="text-center">محصولات
            فروشگاه
        {{ \App\Models\coffee_shops::where('coffee_code',\Illuminate\Support\Facades\Auth::user()->coffee_code)->value('name_coffee_shop') }}
        </h2>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">شماره</th>
                <th scope="col">نام</th>
                <th scope="col">قیمت</th>
                <th scope="col">دسته بندی</th>
                <th scope="col">ویرایش</th>
                <th scope="col">حذف</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $key=>$value)
            <tr>
                    <th scope="row">{{ $key }}</th>
                    <td>{{ $value->name_product }}</td>
                    <td>{{ number_format($value->price) }}</td>
                    <td>{{ $value->category_name }}</td>
                    <td class="edit"><a class="btn btn-primary p-1" href="{{ route('owner.edit_product_owner',$value->product_id) }}">ویرایش</a></td>
                    <td class="delete">
                        <form action="{{ route('owner.delete_product_owner') }}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="product_id" value="{{$value->product_id}}">
                            <input class="btn btn-danger p-1" type="submit" value="حذف">
                        </form>
                    </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


<script src="{{asset('assets/js/ckeditor.js')}}"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
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
