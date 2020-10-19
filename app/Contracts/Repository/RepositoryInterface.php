<?php


namespace App\Contracts\Repository;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    /**
     * Метод инициализирует модель для дальнейшей работы с репозиторием
     * @return string
     */

    function setModel(): string;

    function getAll(): Collection;
}
