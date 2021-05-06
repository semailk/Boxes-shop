<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrudAdminRequests\CrudAttributeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

class AttributeCrudController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ReorderOperation;

    public function setup(): void
    {
        $this->crud->setModel("App\Models\Attribute");
        $this->crud->setRoute("admin/attributes");
        $this->crud->setEntityNameStrings('Атрибут', 'Атрибуты');
        $this->crud->setValidation(CrudAttributeRequest::class);
        // -------------------------
        // ------ CRUD COLUMNS ------
        // -------------------------
        $this->crud->addColumns([
            [
                'type' => 'number',
                'name' => 'id',
                'label' => 'Attribute Id',
            ],
            [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Title',
            ],
        ]);

        // -------------------------
        // ------ CRUD FIELDS ------
        // -------------------------

        $this->crud->addField([
            'type' => 'text',
            'name' => 'title',
            'label' => 'Title',
        ]);

        $this->crud->addField([
            'type' => 'select',
            'label' => 'Filter',
            'name' => 'filter_id',

            'entity' => 'filter',
            'model' => "App\Models\Filter",
            'attribute' => 'title',
            'options' => (function ($query) {
                return $query->get();
            }), //
        ]);


    }

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        $this->crud->set('reorder.label', 'title');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 2);
    }
}
