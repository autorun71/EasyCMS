<?php

namespace Pkg\EasyCms\Admin\Main\DataGrids\Settings;

use Illuminate\Support\Facades\DB;

use Pkg\EasyCms\Admin\Main\DataGrids\DataGrid;
use Pkg\EasyCms\Admin\Main\Repositories\MainRepository;

class SettingsDataGrid extends DataGrid
{
    protected $index = 'id';

    protected $sortOrder = 'desc';

    /**
     * @var mixed|MainRepository
     */
    protected MainRepository $settingsRepository;

    public function __construct()
    {
        parent::__construct();

        $this->settingsRepository = app(MainRepository::class);

    }

    public function prepareQueryBuilder()
    {
        $settings = $this->settingsRepository->getQuery();

        $this->setQueryBuilder($settings);


    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'id',
            'label' => trans('admin::app.tables.main.id'),
            'type' => 'number',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'site',
            'label' => trans('admin::app.tables.main.site'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'site_name',
            'label' => trans('admin::app.tables.main.site_name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'locale_id',
            'label' => trans('admin::app.tables.main.locale_id'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
            'closure'    => true,
            'wrapper'    => function ($value) {
                return $value->locale->name;
            },
        ]);

        $this->addColumn([
            'index' => 'url',
            'label' => trans('admin::app.tables.main.url'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'sender_email',
            'label' => trans('admin::app.tables.main.sender_email'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'title_tmp',
            'label' => trans('admin::app.tables.main.title_tmp'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index' => 'description_tmp',
            'label' => trans('admin::app.tables.main.description_tmp'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
        ]);


    }

    public function prepareActions()
    {



    }
}
