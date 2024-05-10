<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>منو کافه</title>
    <link rel="stylesheet" href="{{asset('/css/menu.css')}}">
@include('link.links_css')
</head>
<body>
<div class="loader">
    <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="cup"><span></span></div>
</div>
<section id="our_menu" class="pt-5 pb-5">
    <div class="box">
        <input id="checkbox" type="checkbox" checked>
        <label for="checkbox"></label>
    </div>
    <p>زمینه منو آنلاین</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page_title text-center mb-4">
                    <h1 class="name_coffee"> منوی
                    {{$data[0]->name_coffee_shop}}
                    </h1>
                    <div class="single_line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab">قهوه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab">شام</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab">ناهار</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content col-lg-12" id="myTabContent">
                <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="burger">
                                <div class="menu_content">
                                    <h4>قهوه ترک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="black coffee">
                                <div class="menu_content">
                                    <h4>اسپرسو<span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="fried rice">
                                <div class="menu_content">
                                    <h4>اسپرسو دبل <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="قهوه تک">
                                <div class="menu_content">
                                    <h4>قهوه تک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="burger">
                                <div class="menu_content">
                                    <h4>قهوه ترک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="black coffee">
                                <div class="menu_content">
                                    <h4>اسپرسو<span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="fried rice">
                                <div class="menu_content">
                                    <h4>اسپرسو دبل <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="قهوه تک">
                                <div class="menu_content">
                                    <h4>قهوه تک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="pizza">
                                <div class="menu_content">
                                    <h4>12" Pizza  <span>$35</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="salad">
                                <div class="menu_content">
                                    <h4>Salad <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="green tea">
                                <div class="menu_content">
                                    <h4>green tea <span>$15</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="قهوه تک">
                                <div class="menu_content">
                                    <h4>قهوه تک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="burger">
                                <div class="menu_content">
                                    <h4>قهوه ترک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="black coffee">
                                <div class="menu_content">
                                    <h4>اسپرسو<span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="fried rice">
                                <div class="menu_content">
                                    <h4>اسپرسو دبل <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="قهوه تک">
                                <div class="menu_content">
                                    <h4>قهوه تک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="burger">
                                <div class="menu_content">
                                    <h4>قهوه ترک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="black coffee">
                                <div class="menu_content">
                                    <h4>اسپرسو<span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="fried rice">
                                <div class="menu_content">
                                    <h4>اسپرسو دبل <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="قهوه تک">
                                <div class="menu_content">
                                    <h4>قهوه تک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="burger">
                                <div class="menu_content">
                                    <h4>قهوه ترک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="black coffee">
                                <div class="menu_content">
                                    <h4>اسپرسو<span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="fried rice">
                                <div class="menu_content">
                                    <h4>اسپرسو دبل <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                            <div class="single_menu">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcjCnBnkzfhwTxuBRsT3jOt1xj226zHdhqkNTqJaeniQ&s" alt="قهوه تک">
                                <div class="menu_content">
                                    <h4>قهوه تک  <span>25,000  تومان</span></h4>
                                    <p>قهوه آکنده‌ از ماده محرک معروف به نام کافئین است. وقتی کافئین را در مقادیر معقول مصرف می‌کنید ....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('link.links_js')
<script>
    $(document).ready(function (){
        $('.loader').delay(1500).fadeOut(500);



    });
</script>
</body>
</html>
