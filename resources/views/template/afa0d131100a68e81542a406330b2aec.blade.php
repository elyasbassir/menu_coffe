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
        <h2 class="title_detail_product"></h2>
        <div class="slider_image_product">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="image_one" height="200" src="" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="image_two" height="200" src="" alt="">
                </div>
                <div class="swiper-slide">
                    <video id="video_product" height="200" width="300"
                           src="../assets/products/edd01240eaeddcc725ad904e020a72fa2419178-360p.mp4"
                           controls="controls" poster="/assets/themes/images/not_found.jpg"></video>
                </div>
            </div>
        </div>

        <h3 class="title_description">
            توضیحات:
        </h3>
        <p class="title_description">

        </p>


</div>


    <div class="category_search">
    <a href="#" class="btn" onclick="toggle()"
    ><i class="icon_toggle bi bi-collection"></i
    ></a>
{{--    <a href="#" class="btn" onclick="group()">--}}
{{--        <i class="bi bi-list"></i>--}}
{{--    </a>--}}
    <input
            type="text"
            class="search-box"
            id="searchBox"
            placeholder="جستجو..."
            onkeyup="search()"
    />

</div>

<div class="swiper category_product">
    <div class="swiper-wrapper">
        @foreach($category as $key=>$value)
        <div class="swiper-slide item_category" category="{{ $value->category_id }}">
            <img src="{{asset("/assets/images/image_category/").'/'.$value->image_category }}" alt="">
            <p >{{ $value->category_name }}</p>
        </div>
        @endforeach

    </div>

</div>


<div class="container-fluid background_items">
    <div class="flex-row category">
        @foreach($all_products as $key=>$value)
        <div class="card food" category="{{ $value->category_id }}">
            <?php
                $images_name =explode(',',$value->image_names);
                $video = $value->video_name;
                ?>
            <img src="{{ asset('/assets/images/products/').'/'.$images_name[0] }}" next_image="@if(count($images_name) > 1){{ asset('/assets/images/products/').'/'.$images_name[1] }} @endif" video_address="@if($video != ""){{ asset('/assets/videos/products/').'/'.$video }} @endif" alt="" >
            <div class="card-title">
                <h5 class="name_product">{{ $value->name_product }}</h5>
                <p class="description_product" value="{{$value->description_product}}">{{ substr($value->description_product,0,45).' ...' }}</p>
            </div>
            <p class="text-success card-text isAvailable">موجود</p>
            <p class=" food-price food-price">{{ number_format($value->price) }} تومان</p>
        </div>


        @endforeach
            <div id="show_note" class="position-relative text-center w-100">
            </div>

    </div>
</div>

</body>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/themes/js/'.$script)}}"></script>
</html>

{{--این استایل ها باید اضافه بشه به قالب--}}
<style>


</style>
