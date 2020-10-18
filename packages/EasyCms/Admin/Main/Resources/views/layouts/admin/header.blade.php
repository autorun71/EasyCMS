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
<div class="admin-wrapper @auth @else no-admin @endif">

    @auth
    @include('admin::layouts.admin.left-sidebar')
    <div class="content">
        @include('admin::layouts.admin.tabs')

        <div class="page-title">
            <h1>@yield('page_title')</h1>
        </div>
    @endif


