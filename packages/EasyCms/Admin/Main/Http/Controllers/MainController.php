<?php

namespace Pkg\EasyCms\Admin\Main\Http\Controllers;


use App\Http\Controllers\Controller;
use Pkg\EasyCms\Admin\Main\Repositories\MainRepository;

class MainController extends Controller
{
    /**
     * @var MainRepository
     */
    private $mainRepository;
    function __construct()
    {
        $this->mainRepository = app(MainRepository::class);
    }

    public function index(){

        $locale = $this->mainRepository->getShow(1)->title;
       dd($locale);
        return $this->view('admin::home.index');
    }
}
