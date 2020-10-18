<?php


namespace Pkg\EasyCms\Admin\Main\Http\Controllers\Settings;


use Pkg\EasyCms\Admin\Main\Http\Controllers\AdminController;

class SettingsController extends AdminController
{
    public function index()
    {
        return $this->view('admin::settings.main.index');
    }
}
