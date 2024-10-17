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

        <section class="subscription-cart">
            <div class="custom-content">
                <a href="{{ route('owner.redirect_to_bank') }}?plan=plan_medium" class="text-decoration-none">
                <div class="custom-basic custom-box">
                    <h2 class="custom-title">1 ماهه</h2>
                    <div class="custom-view">
                        <div class="custom-cost">
                            <p class="custom-amount">95</p>
                            <p class="custom-detail">
                                تومان
                                <br>
                                1 ماهه
                            </p>
                        </div>
                    </div>
                    <div class="custom-description">
                        <ul>
                                <li>&nbsp;  قیمت اقتصادی</li>
                                <li>&nbsp;  قابلیت تغییر تم</li>
                                <li>&nbsp; اضافه کردن محصول با عکس و ویدیو</li>
                                <li>&nbsp; قابلیت شخصی سازی کامل منو</li>
                                <li>&nbsp; استایل ها بروز و متنوع</li>
                        </ul>
                    </div>
                    <div class="custom-button">
                        <button type="submit">خرید کنید</button>
                    </div>
                </div>
                </a>
                <a href="{{ route('owner.redirect_to_bank') }}?plan=plan_gold" class="text-decoration-none">
                <div class="custom-standard custom-box">
                    <h2 class="custom-title">12 ماهه</h2>
                    <div class="custom-view">
                        <div class="custom-cost">
                            <p class="custom-amount">1010</p>
                            <p class="custom-detail">                       تومان
                                <br>
                                12 ماهه</p>
                        </div>
                    </div>
                    <div class="custom-description">
                        <ul>
                            <li>&nbsp;  قیمت اقتصادی</li>
                            <li>&nbsp;  قابلیت تغییر تم</li>
                            <li>&nbsp; اضافه کردن محصول با عکس و ویدیو</li>
                            <li>&nbsp; قابلیت شخصی سازی کامل منو</li>
                            <li>&nbsp; استایل ها بروز و متنوع</li>
                        </ul>
                    </div>
                    <div class="custom-button">
                        <button type="submit">خرید کنید</button>
                    </div>
                </div>
                </a>
                    <a href="{{ route('owner.redirect_to_bank') }}?plan=plan_silver" class="text-decoration-none">
                <div class="custom-business custom-box">
                    <h2 class="custom-title">3 ماهه</h2>
                    <div class="custom-view">
                        <div class="custom-cost">
                            <p class="custom-amount">260</p>
                            <p class="custom-detail">                       تومان
                                <br>
                                3 ماهه</p>

                        </div>
                    </div>
                    <div class="custom-description">
                        <ul>
                                <li> &nbsp;  قیمت اقتصادی </li>
                                <li>&nbsp;  قابلیت تغییر تم</li>
                                <li>&nbsp; اضافه کردن محصول با عکس و ویدیو</li>
                                <li>&nbsp; قابلیت شخصی سازی کامل منو</li>
                                <li>&nbsp; استایل ها بروز و متنوع</li>
                        </ul>
                    </div>
                    <div class="custom-button">
                        <button type="submit">خرید کنید</button>
                    </div>
                </div>
                </a>
            </div>
        </section>


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
