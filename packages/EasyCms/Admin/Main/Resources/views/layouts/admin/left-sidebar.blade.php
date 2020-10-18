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
    </div>

    @include('admin::layouts.admin.left-sidebar-children')
