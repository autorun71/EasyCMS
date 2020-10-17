@auth
    <div class="left-menu">
        @foreach ($menu->items as $menuItem)
            <div class="block {{ $menu->getActive($menuItem) }}">
                <div class="content">
                    <a href="{{ count($menuItem['children']) ? current($menuItem['children'])['url'] : $menuItem['url'] }}">
                        <div class="logo">
                            <img
                                src="{{ asset($menuItem['icon-name']) }}" alt="">
                        </div>
                        <div class="text">

                            <span>{{ trans($menuItem['name']) }}</span>

                        </div>
                    </a>
                </div>
            </div>
        @endforeach

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
@endif
