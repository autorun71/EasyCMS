<div class="header">
    <div class="top-menu">
        <div class="left-content">
            <div class="site-name">{{ $page->site_name }}</div>
        </div>
        <div class="right-content">
            <div class="user-name">
                @auth
                    <span>{{ Auth::user()->name }}</span>
                @else

                @endif
            </div>

        </div>
    </div>
</div>
<div class="admin-wrapper">
    <div class="left-menu">
        <div class="block active">
            <div class="content">
                <div class="logo"><img
                        src="https://www.seekpng.com/png/full/352-3521815_png-file-svg-mileage-icon-vector.png" alt="">
                </div>
                <div class="text">
                    <span>Информация</span>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="content">
                <div class="logo"><img src="http://cdn.onlinewebfonts.com/svg/img_230293.png" alt=""></div>
                <div class="text">
                    <span>Заказы</span>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="content">
                <div class="logo"><img src="https://studia3d.com/wp-content/uploads/cart.png" alt=""></div>
                <div class="text">
                    <span>Магазин</span>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="page-title">
            <h1>Информация</h1>
        </div>

