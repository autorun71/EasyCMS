<?php


namespace Pkg\EasyCms\Admin\Main\Repositories;


use App\Models\Role;
use App\Repositories\Repository;

class RoleRepository extends Repository
{
    function __construct()
    {
        parent::__construct();
        $this->addEditFields(['id']);
    }

    /**
     * @inheritDoc
     */
    function setModel():string
    {
        return Role::class;
    }

}
