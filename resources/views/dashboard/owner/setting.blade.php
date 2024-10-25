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
            فروشگاه {{ \App\Models\coffee_shops::where('coffee_code',\Illuminate\Support\Facades\Auth::user()->coffee_code)->first()->get()[0]->name_coffee_shop }}</h2>
        <form action="{{ route('owner.update_setting') }}" method="POST">
            @csrf
            @method('PUT')
            <label>قالب مادر</label>
            <select id="template" name="template_id" class="form-select col" aria-label="Default select example">
                @foreach($templates as $key=>$value)

                        <option value="{{ $value->template_id }}" @if($template_selected == $value->template_id) selected @endif>{{ $value->template_name }} </option>

                @endforeach

            </select>
            <label>تم</label>
            <select id="theme" name="theme_id" class="form-select col" aria-label="Default select example">
                @foreach($themes as $key=>$value)
                        <option  @if($theme_selected == $value->theme_id) selected @endif value="{{ $value->theme_id }}">{{ $value->theme_name }}</option>
                @endforeach
            </select>
            <textarea name="custom_css" cols="30" rows="10"
                      placeholder="css اختصاصی ....">{{$old_custom_css}}</textarea>
            <br>
            <input type="submit" value="ثبت تغییرات">
        </form>
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


        const options = {
            @foreach($templates as $key=>$value)
            '{{$value->template_id}}': [
                    @foreach(\App\Models\themes::where('template_id',$value->template_id)->get() as $key1=>$value1)
                {
                    value: '{{$value1->theme_id}}', text: '{{$value1->theme_name}}'
                },
                @endforeach
            ],
            @endforeach
        };

        $('#template').on('change', function () {
            const selectedValue = $(this).val();
            const $secondSelect = $('#theme');

            // پاک کردن گزینه‌های قبلی
            $secondSelect.empty().append('<option value="">Select an option</option>');

            // افزودن گزینه‌های جدید بر اساس انتخاب
            if (options[selectedValue]) {
                $.each(options[selectedValue], function (index, option) {
                    $secondSelect.append(new Option(option.text, option.value));
                });
            }
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
