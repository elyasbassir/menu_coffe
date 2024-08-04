<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet"href="{{ asset('assets/css/bootstrap-icons/font/bootstrap-icons.min.css') }}"/>

    <link rel="stylesheet"href="{{ asset('assets/themes/css/'.$style) }}"/>
      <style>
          {{ $custom_css }}
      </style>
  </head>
  <body>

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




        <div class="card food">
          <img src="{{ asset('assets/images/products/hotdog.jpg') }}" alt="" class="card-img-top" />
          <h5 id="card-title" class="card-title">کباب</h5>
          <h6 id="card-title" class="card-title food-type">سنتی</h6>
          <p class="text-success card-text isAvailable">موجود</p>
          <p class="text-muted food-price food-price">100،000 تومان</p>
        </div>



    </div>
    </div>
    <footer class="text-center footer">
      <p class="text-dark">تمامی حقوق برای شرکت فردوس توسعه آریا محفوظ است.</p>
    </footer>
  </body>

  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>

  <script src="{{asset('assets/themes/js/'.$script)}}"></script>

  <script>
    var swiper = new Swiper(".CategorySwiper", {
      slidesPerView: 5,
      spaceBetween: 20,
    });
  </script>
</html>
