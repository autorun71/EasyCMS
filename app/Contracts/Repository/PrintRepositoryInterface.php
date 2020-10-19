<?php


namespace App\Contracts\Repository;


use Illuminate\Database\Eloquent\Model;

interface PrintRepositoryInterface
{

    /**
     * Метод возвращает поля модели для просмотра
     * @param $id
     * @return Model
     */

    function getPrint($id): Model;

    function addPrintFields(array $fields);
    function setPrintFields(array $fields);
    function resetPrintFields();
}
