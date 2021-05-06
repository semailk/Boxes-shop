<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrudAdminRequests\CrudCategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

class CategoryCrudController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ReorderOperation;

    public function setup(): void
    {
        $this->crud->setModel("App\Models\Category");
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/categories');
        $this->crud->setEntityNameStrings('Категория', 'Категории');
        $this->crud->setValidation(CrudCategoryRequest::class);
        // -------------------------
        // ------ CRUD COLUMNS ------
        // -------------------------
        $this->crud->addColumns([
            [
                'type' => 'number',
                'name' => 'id',
                'label' => 'Category Id',
            ]
            , [
                'type' => 'text',
                'name' => 'name',
                'label' => 'Name',
            ],
            [
                'type' => 'text',
                'name' => 'slug',
                'label' => 'slug',
            ],
        ]);

        // -------------------------
        // ------ CRUD FIELDS ------
        // -------------------------

        $this->crud->addField([
            'type' => 'text',
            'name' => 'name',
            'label' => 'Name',
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'slug',
            'label' => 'slug',
        ]);
    }

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        $this->crud->set('reorder.label', 'name');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 2);
    }
}
