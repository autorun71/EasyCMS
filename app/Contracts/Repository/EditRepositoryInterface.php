<?php


namespace App\Contracts\Repository;


use Illuminate\Database\Eloquent\Model;

interface EditRepositoryInterface
{

    /**
     * Метод возвращает поля модели для редактирования
     * @param $id
     * @return Model
     */
    function getEdit($id): Model;

    function addEditFields(array $fields);
    function setEditFields(array $fields);
    function resetEditFields();
}
