<?php


namespace Pkg\EasyCms\Admin\Main\Repositories;


use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;
use Pkg\EasyCms\Admin\Main\Models\Main;


class MainRepository extends Repository
{

    /**
     * @inheritDoc
     */
    function setModel(): string
    {
        return Main::class;
    }

    /**
     * @param $id
     * @return Main
     */
    public function getShow($id)
    {
        return $this->model::find($id);
    }
}
