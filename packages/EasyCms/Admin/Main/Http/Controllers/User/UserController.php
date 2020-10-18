<?php


namespace Pkg\EasyCms\Admin\Main\Http\Controllers\User;


use Pkg\EasyCms\Admin\Main\Http\Controllers\AdminController;

class UserController extends AdminController
{

    public function index()
    {
        return $this->view('admin::settings.user.index');
    }

}
