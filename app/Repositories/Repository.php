<?php


namespace App\Repositories;


use App\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class Repository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    function __construct()
    {
        $model = $this->setModel();
        $this->model = new $model();
    }

    /**
     * @return Model
     */
    protected function getModel()
    {
        return $this->model;
    }
}
