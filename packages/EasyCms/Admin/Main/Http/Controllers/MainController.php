<?php

namespace Pkg\EasyCms\Admin\Main\Http\Controllers;


use Pkg\EasyCms\Admin\Main\Repositories\MainRepository;

class MainController extends AdminController
{

    function __construct()
    {
        parent::__construct();
    }

    public function index(){

        return $this->view('admin::home.index');
    }
}
