<?php


namespace Pkg\EasyCms\Admin\Main\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Pkg\EasyCms\Admin\Main\Service\Tree;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        include __DIR__ . '/../Http/Helpers/helpers.php';

        Route::prefix('admin')
            ->middleware('auth.admin')
            ->group(__DIR__ . '/../Http/Routes/web.php');

        Route::prefix('admin')
//            ->middleware('auth.admin')
            ->group(__DIR__ . '/../Http/Routes/login.php');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'admin');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->registerProviders();

        $this->composeView();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/menu.php', 'menu.admin'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/acl.php', 'acl'
        );
    }

    private function registerProviders()
    {
    }

    protected function composeView()
    {

        view()->composer(['admin::layouts.admin.left-sidebar', 'admin::layouts.admin.tabs'], function ($view) {
            /**
             * @var Tree $tree
             */
            $tree = Tree::create();
            $iconPath = '/assets/admin/images/menu/'; // Исходники в Resources/assets/images/menu
//            $permissionType = auth()->guard('auth')->user()->role->permission_type;
//            $allowedPermissions = auth()->guard('auth')->user()->role->permissions;
            $permissionType = 'all';
            $allowedPermissions = [];
            foreach (config('menu.admin') as $index => $item) {

//                if (! bouncer()->hasPermission($item['key'])) {
//                    continue;
//                }

                if ($index + 1 < count(config('menu.admin')) && $permissionType != 'all') {
                    $permission = config('menu.admin')[$index + 1];

                    if (substr_count($permission['key'], '.') == 2 && substr_count($item['key'], '.') == 1) {
                        foreach ($allowedPermissions as $key => $value) {
                            if ($item['key'] == $value) {
                                $neededItem = $allowedPermissions[$key + 1];

                                foreach (config('menu.admin') as $key1 => $findMatced) {
                                    if ($findMatced['key'] == $neededItem) {
                                        $item['route'] = $findMatced['route'];
                                    }
                                }
                            }
                        }
                    }
                }
                $item['icon-name'] = $iconPath . $item['icon-name'];
                $tree->add($item, 'menu');

            }

            $tree->items = core()->sortItems($tree->items);

            $view->with('menu', $tree);
        });

//        view()->composer(['admin::users.roles.create', 'admin::users.roles.edit'], function ($view) {
//            $view->with('acl', $this->createACL());
//        });

//        view()->composer(['admin::catalog.products.create'], function ($view) {
//            $items = array();
//
//            foreach (config('product_types') as $item) {
//                $item['children'] = [];
//
//                array_push($items, $item);
//            }
//
//            $types = core()->sortItems($items);
//
//            $view->with('productTypes', $types);
//        });
    }


}
