<!-- sidebar -->
<div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
    <h1 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center"></h1>
    <div class="list-group rounded-0">
        <?php
        $name_route = Route::currentRouteName();
        $level = \Illuminate\Support\Facades\Auth::user()['level'];
        ?>
        @if(\App\Enums\Users_code::admin == $level)
            <a href="{{route('admin.dashboard')}}"
               class="<?php echo ($name_route == 'dashboard') ? "active" : ""; ?> list-group-item list-group-item-action border-0 d-flex align-items-center">
                <span class="bi bi-border-all"></span>
                <span class="ml-2">داشبرد</span>
            </a>
            <a href="{{route('admin.add_owner')}}"
               class="<?php echo ($name_route == 'add_owner') ? "active" : ""; ?> list-group-item list-group-item-action border-0 align-items-center">
                <span class="bi bi-box"></span>
                <span class="ml-2">اضافه کردن فروشنده</span>
            </a>
            <button
                class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center"
                data-toggle="collapse" data-target="#sale-collapse">
                <div>
                    <span class="bi bi-cart-dash"></span>
                    <span class="ml-2">وضعیت فروشنده ها</span>
                </div>
                <span class="bi bi-chevron-down small"></span>
            </button>
            <div class="collapse" id="sale-collapse" data-parent="#sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Customers</a>
                    <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sales</a>
                </div>
            </div>
            <button
                class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center"
                data-toggle="collapse" data-target="#purchase-collapse">
                <a href="{{route('sign_out')}}">
                    <div>
                        <span class="bi bi-cart-plus"></span>
                        <span class="ml-2" style="color: red;">خروج</span>
                    </div>
                    <span class="bi bi-chevron-down small"></span>
                </a>
            </button>
            <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
                    <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchases</a>
                </div>
            </div>
        @elseif(\App\Enums\Users_code::owner == $level)
                <a href="{{route('owner.products_owner')}}"
                   class="<?php echo ($name_route == 'product') ? "active" : ""; ?> list-group-item list-group-item-action border-0 d-flex align-items-center">
                    <span class="bi bi-border-all"></span>
                    <span class="ml-2">محصولات</span>
                </a>
                <a href="{{ route('owner.manage_product_owner') }}"
                   class="<?php echo ($name_route == 'manage_product') ? "active" : ""; ?> list-group-item list-group-item-action border-0 d-flex align-items-center">
                    <span class="bi bi-border-all"></span>
                    <span class="ml-2">مدیریت محصولات</span>
                </a>
                <button
                    class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center"
                    data-toggle="collapse" data-target="#purchase-collapse">
                    <a href="{{route('sign_out')}}">
                        <div>
                            <span class="bi bi-cart-plus"></span>
                            <span class="ml-2" style="color: red;">خروج</span>
                        </div>
                        <span class="bi bi-chevron-down small"></span>
                    </a>
                </button>
                <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
                        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchases</a>
                    </div>
                </div>
        @elseif(\App\Enums\Users_code::user == $level)

        @endif
    </div>
</div>
