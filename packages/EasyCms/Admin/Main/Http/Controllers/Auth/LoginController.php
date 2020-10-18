<?php

namespace Pkg\EasyCms\Admin\Main\Http\Controllers\Auth;


use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Pkg\EasyCms\Admin\Main\Http\Controllers\AdminController;



class LoginController extends AdminController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @param Request $request
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        parent::__construct();
        $this->redirectTo = route('admin.information');
    }
    public function index()
    {

        return $this->view('admin::auth.login');
    }

}
