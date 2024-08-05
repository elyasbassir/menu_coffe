<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {!! SEO::generate() !!}


    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet"href="{{ asset('assets/css/bootstrap-icons/font/bootstrap-icons.min.css') }}"/>

    <link rel="stylesheet"href="{{ asset('assets/themes/css/'.$style) }}"/>
      <style>
          {{ $custom_css }}
      </style>

</head>
<body>
<div class="full_size">
</div>
<div class="page_detail_product">
        <h2 class="title_detail_product">قهوه اسپرسو</h2>
        <div class="slider_image_product">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="image_one" height="200" src="" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="image_two" height="200" src="" alt="">
                </div>
                <div class="swiper-slide">
                    <video height="200" width="300"
                           src="../assets/products/edd01240eaeddcc725ad904e020a72fa2419178-360p.mp4"
                           controls="controls"></video>
                </div>
            </div>
        </div>

        <h3 class="title_description">
            توضیحات:
        </h3>
        <p class="title_description">
            این قهوه اسپرسو تماما با عشق و علاقه خاصی تولید و طراحی شده و ما برای تولید آن کلی زحمت میکشیم که بتونیم اون رو به دست مشتری عزیزمان برسانیم امیدواریم که از کیفیت قهوه ما لذت تمام را برده باشید با تشکر
            این قهوه اسپرسو تماما با عشق و علاقه خاصی تولید و طراحی شده و ما برای تولید آن کلی زحمت میکشیم که بتونیم اون رو به دست مشتری عزیزمان برسانیم امیدواریم که از کیفیت قهوه ما لذت تمام را برده باشید با تشکر
            این قهوه اسپرسو تماما با عشق و علاقه خاصی تولید و طراحی شده و ما برای تولید آن کلی زحمت میکشیم که بتونیم اون رو به دست مشتری عزیزمان برسانیم امیدواریم که از کیفیت قهوه ما لذت تمام را برده باشید با تشکر

        </p>


</div>


    <div class="category_search">
    <a href="#" class="btn" onclick="list()"
    ><i class="bi bi-collection"></i
    ></a>
    <a href="#" class="btn" onclick="group()">
        <i class="bi bi-list"></i>
    </a>
    <input
            type="text"
            class="search-box"
            id="searchBox"
            placeholder="جستجو..."
            onkeyup="search()"
    />
</div>


<div class="container-fluid">
    <div class="flex-row category">
        @foreach($all_products as $key=>$value)
        <div class="card food" category="test">
            <img next_image="{{ asset('assets/images/products/'.explode(',',$value->image_names)[1]) }}" src="{{ asset('assets/images/products/'.explode(',',$value->image_names)[0]) }}" alt="" class="card-img-top" />
            <div class="card-title">
                <h5 class="name_product">{{ $value->name_product }}</h5>
                <p>{{ $value->description_product }}</p>
            </div>
            <p class="text-success card-text isAvailable">موجود</p>
            <p class=" food-price food-price">{{ number_format($value->price) }} تومان</p>
        </div>
        @endforeach
    </div>
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

</script>
<script src="{{asset('assets/themes/js/'.$script)}}"></script>
</html>
