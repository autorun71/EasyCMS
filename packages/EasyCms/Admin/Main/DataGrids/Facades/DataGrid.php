<?php

namespace Pkg\EasyCms\Admin\Main\Facades;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Facade;

class DataGrid extends Facade
{
    /**
     * Регистрация названия компонента
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datagrid';
    }
}
