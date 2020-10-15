<?php

namespace Pkg\EasyCms\Site\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    public function index(){
        [

        ];
        return view('site::home.index');
    }
}
