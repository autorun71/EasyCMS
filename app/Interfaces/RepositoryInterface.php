<?php


namespace App\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    /**
     * Метод инициализирует модель для дальнейшей работы с репозиторием
     * @return Model
     */
    function setModel();
}
