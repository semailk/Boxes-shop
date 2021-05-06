<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrudAdminRequests\CrudSubscriberRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

class SubscriberCrudController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup(): void
    {
        $this->crud->setModel("App\Models\Subscriber");
        $this->crud->setRoute("admin/subscribers");
        $this->crud->setEntityNameStrings('Подписка', 'Подписки');
        $this->crud->setValidation(CrudSubscriberRequest::class);

        // -------------------------
        // ------ CRUD COLUMNS ------
        // -------------------------
        $this->crud->addColumns([
            [
                'type' => 'number',
                'name' => 'id',
                'label' => 'Subscribe Id',
            ],
            [
//                'type' => 'text',
                'name' => 'email',
                'label' => 'Email',
            ],
        ]);

        // -------------------------
        // ------ CRUD FIELDS ------
        // -------------------------

        $this->crud->addFields([
            [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Name',
            ],
        ]);
    }
}
