<?php


namespace App\Repositories;


use App\Contracts\Repository\EditRepositoryInterface;
use App\Contracts\Repository\PrintRepositoryInterface;
use App\Contracts\Repository\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class Repository implements RepositoryInterface, PrintRepositoryInterface, EditRepositoryInterface
{
    /**
     * @var Model
     */
    protected Model $model;

    protected array $editFields = [];
    protected array $printFields = [];

    function __construct()
    {
        $model = $this->setModel();
        $this->model = new $model();
        $this->editFields = $this->model->getFillable();
        $this->editFields = $this->model->getFillable();
    }

    /**
     * @return Model
     */
    protected function getModel()
    {
        return $this->model;
    }

    public function getQuery()
    {
        return $this->model->orderBy('id', 'ASC');
    }

    public function getAll(): Collection
    {
        return $this->model->orderBy('id', 'ASC')->get();
    }

    /**
     * @param $id
     * @return Model
     */
    public function getEdit($id): Model
    {
        return $this->model->select($this->editFields)->find($id);
    }

    /**
     * @param $id
     * @return Model
     */
    public function getPrint($id): Model
    {
        return $this->model->select($this->editFields)->find($id);
    }

    /**
     * Метод добавляет свойства в массив EditFields
     * @param array $fields
     */
    public function addEditFields(array $fields)
    {
        $this->editFields = array_merge($this->editFields, $fields);
    }

    /**
     * Метод перезаписывает массив editFields
     * @param array $fields
     */
    public function setEditFields(array $fields)
    {
        $this->editFields = $fields;
    }

    /**
     *  Метод обнуляет массив editFields
     */
    public function resetEditFields()
    {
        $this->editFields = ['*'];
    }

    /**
     * Метод добавляет свойства в массив printFields
     * @param array $fields
     */
    public function addPrintFields(array $fields)
    {
        $this->printFields = array_merge($this->editFields, $fields);
    }

    /**
     * Метод перезаписывает массив printFields
     * @param array $fields
     */
    public function setPrintFields(array $fields)
    {
        $this->printFields = $fields;
    }

    /**
     *  Метод обнуляет массив printFields
     */
    public function resetPrintFields()
    {
        $this->printFields = ['*'];
    }
}
