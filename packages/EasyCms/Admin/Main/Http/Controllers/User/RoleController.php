<?php


namespace Pkg\EasyCms\Admin\Main\Http\Controllers\User;


use Pkg\EasyCms\Admin\Main\Http\Controllers\AdminController;

class RoleController extends AdminController
{

    public function index()
    {
        return $this->view('admin::settings.role.index');
    }
}
