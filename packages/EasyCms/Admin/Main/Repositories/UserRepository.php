<?php


namespace Pkg\EasyCms\Admin\Main\Repositories;


use App\Models\User;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends Repository
{
    function __construct()
    {
        parent::__construct();
        $this->addEditFields(['id', 'status']);
    }

    /**
     * @inheritDoc
     */
    function setModel():string
    {
        return User::class;
    }

}
