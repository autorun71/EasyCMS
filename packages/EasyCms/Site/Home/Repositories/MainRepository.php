<?php


namespace Pkg\EasyCms\Site\Home\Repositories;


use App\Repositories\Repository;
use Pkg\EasyCms\Site\Home\Models\Main;

class MainRepository extends Repository
{

    /**
     * @inheritDoc
     */
    function setModel()
    {
        return Main::class;
    }

    public function getShow($id)
    {
        return $this->model::find($id);
    }
}
