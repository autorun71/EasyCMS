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
    @include('admin::layouts.admin.left-sidebar')


