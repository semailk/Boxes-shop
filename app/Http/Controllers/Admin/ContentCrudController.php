<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;


class ContentCrudController extends CrudController
{
    use ListOperation;
    use UpdateOperation;
    use CreateOperation;

    public function setup(): void
    {
        $this->crud->setModel("App\Models\Content");
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/contents');
        $this->crud->setEntityNameStrings('Контент', 'Контент');

        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);

        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Name',
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'name',
            'label' => 'Name',
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'key',
            'label' => 'Key',
        ]);

        $this->crud->addField([
            'type' => 'textarea',
            'name' => 'schema',
            'label' => 'Schema',
        ]);

        $this->crud->addField([
            'type' => 'json_editor',
            'name' => 'content',
            'label' => 'Content',
        ]);
    }
}
