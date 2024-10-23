<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {!! SEO::generate() !!}

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/main_page.css')}}"/>
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-sm nav">
        <a class="navbar-brand" href="#">منو شاپ</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse justify-content-end pl-2"
            id="navbarNav"
        >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-4">
                    <a class="nav-link" href="#">خانه</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="#">درباره ما</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="#">تعرفه ها</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="{{ route('form_login') }}">ورود</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <section class="hero">
        <div class="container title-container">
            <h1 class="Title">
                <span class="highlight">منو</span>ی دیجیتال منوشاپ
            </h1>
            <p class="subtitle">منوی خود را با ما دیجیتال کنید.</p>
            <a href="#price-list" class="btn btn-dark">تعرفه ها</a>
        </div>
    </section>
    <section class="features text-center bg-light cl-light">
        <div class="container col-sm">
            <div class="row">
                <div class="col-md-6 animate img-sm">
                    <img
                        src="assets/images/coffee-vector.png"
                        class="imgg"
                        alt="Coffe vector"
                    />
                </div>
                <div class="col-md-6 m-t animate">
                    <h2>توضیحات اول</h2>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                        استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله
                        در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                        کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                        جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را
                        برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در
                        زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                        دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و
                        زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                        پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                </div>
            </div>
            <!--  -->
            <div class="row ltr">
                <div class="col-md-6 animate">
                    <img
                        src="assets/images/cup-coffee-vector.png"
                        class="imgg"
                        alt="Coffe vector"
                    />
                </div>
                <div class="col-md-6 m-t animate">
                    <h2>توضیحات دوم</h2>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                        استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله
                        در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                        کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                        جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را
                        برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در
                        زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                        دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و
                        زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                        پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate">
                    <img
                        src="assets/images/coffee-vector.png"
                        class="imgg"
                        alt="Coffe vector"
                    />
                </div>
                <div class="col-md-6 m-t animate">
                    <h2>توضیحات سوم</h2>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                        استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله
                        در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                        نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                        کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                        جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را
                        برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در
                        زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                        دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و
                        زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                        پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container row">
        <div class="footer-col">
            <h4>درباره ما</h4>
            <p class=""> در منو شاپ، ما به خلق تجربه‌ای نوین و کارآمد برای صنعت رستوران‌داری و کافه‌ها می‌پردازیم. با
                ارائه خدمات منوی آنلاین از طریق کدهای QR، ما به کسب‌وکارها کمک می‌کنیم تا فرآیند سفارش‌گیری را سریع‌تر،
                بهداشتی‌تر و جذاب‌تر کنند.
            </p>
        </div>
        <div class="footer-col">
            <h4>پشتیبانی</h4>
            <ul>
                <li><a href="#">سوالات متداول</a></li>
                <li><a href="#">تلفن ثابت : 056-3273-0585</a></li>
                <li><a href="#"> شماره همراه : +989203359832</a></li>
                <li><a href="#">+989203359832</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>لینک ها</h4>
            <ul>
                <li><a href="#">download</a></li>
                <li><a href="#">changelog</a></li>
                <li><a href="#">github</a></li>
                <li><a href="#">all version</a></li>
            </ul>
        </div>


        <div class="footer-col">
            <h4>نماد ها</h4>
            <span style="color: snow">اینماد</span>
            <a referrerpolicy='origin' target='_blank'
               href='https://trustseal.enamad.ir/?id=514824&Code=sWFR4gf9UyIkVBlqBNAcvP4ZruM58uHI'><img
                    referrerpolicy='origin'
                    src='https://trustseal.enamad.ir/logo.aspx?id=514824&Code=sWFR4gf9UyIkVBlqBNAcvP4ZruM58uHI' alt=''
                    style='cursor:pointer' code='sWFR4gf9UyIkVBlqBNAcvP4ZruM58uHI'></a>
        </div>


    </div>
</footer>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>
