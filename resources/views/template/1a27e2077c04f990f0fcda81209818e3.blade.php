<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {!! SEO::generate() !!}


    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons/font/bootstrap-icons.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/themes/css/'.$style) }}"/>
    <style>
        {
        {
            $ custom_css
        }
        }
    </style>

</head>
<body>
<div id="container" class="row-card">

    <div class="search-bar">
        <div class="category-type" onclick="row_column()"></div>
        <input type="search" id="searchBar" class="search-box">
    </div>
    @foreach($all_products as $key=>$value)
    <div class="food-card">
        <img next_image="{{ asset('assets/images/products/'.explode(',',$value->image_names)[1]) }}"
             src="{{ asset('assets/images/products/'.explode(',',$value->image_names)[0]) }}" alt=""
             class="food-image"/>
        <div class="food-box">
            <div class="food-top">
                <h2 class="food-name" id="foodName">{{ $value->name_product }}</h2>
                <p class="food-description">{{ $value->description_product }}</p>
            </div>
            <div class="food-bottom">
                <span class="food-stock">موجودی</span>
                <span class="food-price">{{ number_format($value->price) }} تومان</span>
            </div>
        </div>
    </div>
    @endforeach

</div>

</body>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script>
    var swiper = new Swiper(".CategorySwiper", {
        slidesPerView: 5,
        spaceBetween: 20,
    });

    var mySwiper = new Swiper('.slider_image_product', {
        loop: true,
        spaceBetween: 50,
        speed: 1000,
        // autoplay: {
        //   delay: 3000,
        // },
        effect: 'coverflow',
        centeredSlides: true,
        slidesPerView: 3,
        breakpoints: {
            '300': {
                slidesPerView: 1
            },
            '500': {
                slidesPerView: 2,
            },
            '900': {
                slidesPerView: 3,
            },
        },
        coverflowEffect: {
            rotate: 0,
            stretch: 80,
            depth: 200,
            modifier: 1,
            slideShadows: false,
        }
    })
    function row_column() {
        container.classList.toggle("row-card");
        container.classList.toggle("column-card");

    }

</script>
<script src="{{asset('assets/themes/js/'.$script)}}"></script>

</html>