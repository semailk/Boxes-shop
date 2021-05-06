<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrudAdminRequests\CrudBrandRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

class BrandCrudController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup(): void
    {
        $this->crud->setModel("App\Models\Brand");
        $this->crud->setRoute("admin/brands");
        $this->crud->setEntityNameStrings('Бренд', 'Бренды');
        $this->crud->setValidation(CrudBrandRequest::class);
        // -------------------------
        // ------ CRUD COLUMNS ------
        // -------------------------
        $this->crud->addColumns([
            [
                'type' => 'number',
                'name' => 'id',
                'label' => 'Brands Id',
            ],
            [
                'type' => 'text',
                'name' => 'name',
                'label' => 'Name',
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
    }
}
