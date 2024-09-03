<!DOCTYPE html>
<html lang="ir" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <header id="header"> 
        <div class="logo">LOGO</div>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="جستجوی محصول ...">
            <button class="search-button"><i class="fas fa-search"></i></button>
        </div>
        <div class="header-space"></div>
        <div class="shopping-cart"></div>
        
        <button class="mobile-search-button"><i class="fas fa-search"></i></button>
        
        <div class="dropdown-search">
            <div class="dropdown-content">
                <input type="text" class="search-input" placeholder="جستجوی محصول ...">
                <button class="search-button"><i class="fas fa-search"></i></button>
            </div>
        </div>
        </div>
    </header>
    <main id="main-content">
        <div class="product-dropdown">
            <div class="product-details">
                <div class="product-details-image"><img src="../assets/img/product-img-1.jpg" alt="coffee"></div>
                <div class="product-text">
                    <h4 class="product-name">قهوه کافه جمهوری</h4>
                    <p class="product-details-desc">این یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکراین یک قهوه برای مشتری کافه جمهوری است. محتویات شامل قهوه و آب و شکر و شیر و قند و قاشقه</p>
                    <p class="product-details-price"><span>12,000</span>تومان</p>
                </div>
            </div>
        </div>
        <div class="categories">
            <h4>دسته بندی ها</h4>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                    <div class="swiper-slide"><div class="category-image" style="background:url(../assets/img/product-img-1.jpg);"></div><div class="category-title">دسته 1</div></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
              
        </div>


        <div class="products">
            @foreach($all_products as $key=>$value)
            <div class="product-card">
                <div class="product-image" style="background-image: url({{ asset('assets/images/products/'.explode(',',$value->image_names)[0]) }});">
                    <div class="product-rate"><i class="fa-solid fa-star"></i><p>4.5</p></div>

                </div>
                <div class="product-info">
                    <h4 class="product-name">{{ $value->name_product }}</h4>
                    <p class="product-desc">{{ $value->description_product }}</p>
                    <div class="card-footer">
                        <p class="product-price"><span>{{ number_format($value->price) }}</span> تومان</p>
                        <div class="add-product"><i class="fa-solid fa-plus"></i></div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </main>
    <footer id="footer">FOOTER</footer>

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
</body>
</html>