<?php

namespace Pkg\EasyCms\Site\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Pkg\EasyCms\Template\Http\Controllers\MainController;

class HomeController extends MainController
{
    public function index(){

        return $this->view('site::home.index');
    }
}
