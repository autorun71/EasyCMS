<?php

namespace Pkg\EasyCms\Template\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Pkg\EasyCms\Admin\Main\Repositories\MainRepository;


class MainController extends Controller
{
    private $data = [];

    /**
     * @var MainRepository
     */
    private $mainRepository;

    function __construct()
    {
        $this->mainRepository = app(MainRepository::class);
    }

    /**
     * @param null $view
     * @param array $data
     * @param array $mergeData
     * @return Factory|View
     */
    public function view($view = null, $data = [], $mergeData = [])
    {
        $this->getMainVars();
        $data = array_merge($data, $this->data);
        return view($view, $data, $mergeData);
    }

    /**
     * @param array $array
     */
    private function setData(array $array)
    {
        $this->data = array_merge($this->data, $array);
    }

    private function getMainVars()
    {
        $this->getSiteInfo();
    }

    private function getSiteInfo()
    {
//        $page = $this->mainRepository->getShow(1);
        $page = [];
        $this->setData(compact('page'));
    }
}
