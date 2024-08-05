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

    <!-- main content -->

    <div class="container" style="position: relative;padding: 20px">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">شماره</th>
                <th scope="col">نام کافه</th>
                <th scope="col">شماره</th>
                <th scope="col">نمایش منو</th>
                <th scope="col">نمایش بیشتر</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                ?>
            @foreach($data_coffee as $key=>$value)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$value->name_coffee_shop}}</td>
                <td>{{$value->phone}}</td>
                <td><a href="{{route('menu_coffee',$value->coffee_code)}}">کلیک کنید</a></td>
                <td tag="{{$value->coffee_code}}" class="show_more">نمایش بیشتر</td>
                <div class="show_data" id="{{$value->coffee_code}}">
                    <i tag="{{$value->coffee_code}}" class="fa-solid fa-circle-xmark exit_button" style="color: black;font-size: 24px;margin: 20px;left: 0px;position: absolute"></i>
                    <p class="form">
                        <span class="form">نام :</span>
                        {{$value->name}}
                    </p>

                    <p class="form">
                        <span class="form">نام خانوادگی :</span>
                        {{$value->last_name}}
                    </p>

                    <p class="form">
                        <span class="form">شماره همراه :</span>
                        {{$value->phone}}
                    </p>

                    <p class="form">
                        <span class="form">کد کافه :</span>
                        {{$value->coffee_code}}
                    </p>

                    <p class="form">
                        <span class="form">آدرس کافه :</span>
                        {{$value->address_coffee_shop}}
                    </p>

                    <p class="form">
                        <span class="form">نام کافه :</span>
                        {{$value->name_coffee_shop}}
                    </p>

                </div>
            </tr>
                <?php
                $i++;
                ?>
            @endforeach
            </tbody>
        </table>
    </div>


</div>




<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.js')}}"></script>
<script src="{{ asset('assets/css/FontAwesome/js/all.js') }}"></script>

<script>
    $(document).ready(()=>{

        $('#open-sidebar').click(()=>{

            // add class active on #sidebar
            $('#sidebar').addClass('active');

            // show sidebar overlay
            $('#sidebar-overlay').removeClass('d-none');

        });


        $('#sidebar-overlay').click(function(){

            // add class active on #sidebar
            $('#sidebar').removeClass('active');

            // show sidebar overlay
            $(this).addClass('d-none');

        });

    });
$(document).ready(function(){
   $(".exit_button").click(function (){
       $(this).parent().fadeOut(200);
   });

   $('.show_more').click(function (){
       $("#"+$(this).attr('tag')).fadeIn(500);
   });
});
</script>
</body>
</html>
