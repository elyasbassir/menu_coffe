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
        <h2>فرم ویرایش کردن محصول</h2>
        <form action="{{route('owner.edit_product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>نام محصول</label>
                <input name="product_name" type="text" class="form-control col" id="formGroupExampleInput"
                       placeholder="قهوه با کافئین ..." value="{{ $product->value('name_product') }}">
                <label>قیمت محصول</label>
                <input name="product_price" type="number" class="form-control col" id="formGroupExampleInput"
                       placeholder="30000" value="{{ $product->value('price') }}">
            </div>
            <div class="form-group">
                <label>توضیحات محصول</label>
      <input name="product_description" type="text" class="form-control col" id="formGroupExampleInput"
                        value="{{ $product->value('description_product') }}">
            </div>
            <div class="container">
                <div class="row">
                    <p class="col-4">عکس اول </p>
                    <p class="col-4">عکس دوم</p>
                    <p class="col-4">ویدیو</p>
                    <input name="main_image" accept=".png, .jpg, .jpeg" class="form-control col" type="file">
                    <input name="next_image" accept=".png, .jpg, .jpeg" class="form-control col" type="file">
                    <input name="video" accept=".mp4" class="form-control col" type="file">
                </div>
                <p>
                    <span style="color: red">*</span>اندازه عکس نباید بیشتر از 100 کیلوبایت باشد
                    <br>
                    <span style="color: red">*</span>اندازه ویدیو نباید بیشتر از 1 مگ باشد
                </p>
                <input name="availability " class="form-check-input" type="checkbox" value="1" id="flexCheckChecked"
                       checked>
                <label class="form-check-label" for="flexCheckChecked">
                    موجود
                </label>
                <br>
                <label class="form-check-label" for="category_id">
                    دسته بندی
                </label>
                <select id="category_id" name="category_id" class="form-select col">
                    @foreach($category_user as $key=>$value)
                        <option value="{{$value->category_id}}" @if($value->category_id == $product->value('category_id')) selected @endif >{{$value->category_name}}</option>
                    @endforeach
                </select>
                <input type="hidden" name="product_id" value="{{ $product->value('product_id') }}">
                <input type="submit" value="ثبت محصول" class="btn btn-primary mb-2">
            </div>
        </form>

    </div>


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
