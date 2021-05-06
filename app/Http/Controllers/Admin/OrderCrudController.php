<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrudAdminRequests\CrudOrderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

class OrderCrudController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup(): void
    {
        $this->crud->setModel("App\Models\Order");
        $this->crud->setRoute("admin/orders");
        $this->crud->setEntityNameStrings('Заказ', 'Заказы');
        $this->crud->setValidation(CrudOrderRequest::class);
        // -------------------------
        // ------ CRUD COLUMNS ------
        // -------------------------
        $this->crud->addColumns([
            [
                'type' => 'number',
                'name' => 'id',
                'label' => 'Order Id',
            ],
            [
                'type' => 'text',
                'name' => 'first_name',
                'label' => 'First Name',
            ],
            [
                'type' => 'text',
                'name' => 'last_name',
                'label' => 'Last Name',
            ],
            [
                'type' => 'text',
                'name' => 'phone',
                'label' => 'Phone',
            ],
            [
                'type' => 'text',
                'name' => 'email',
                'label' => 'Email',
            ],
            [
                'type' => 'text',
                'name' => 'country',
                'label' => 'Country',
            ],
            [
                'type' => 'text',
                'name' => 'city',
                'label' => 'City',
            ],
            [
                'type' => 'text',
                'name' => 'address',
                'label' => 'Address',
            ],
            [
                'type' => 'text',
                'name' => 'comment',
                'label' => 'Comment',
            ],
            [
                'type' => 'integer',
                'name' => 'status',
                'label' => 'Status',
            ],
            [
                'type' => 'text',
                'name' => 'track_code',
                'label' => 'Track Code',
            ],
            [
                'name' => 'payment_time',
                'label' => 'Track Code',
            ],
            [
                'name' => 'paid_amount',
                'label' => 'Paid Amount',
            ],
            [
                'name' => 'payment_information',
                'label' => 'Payment Information',
            ],
        ]);

        // -------------------------
        // ------ CRUD FIELDS ------
        // -------------------------

        $this->crud->addFields([
            [
                'name' => 'user_id',
                'type' => 'select',
                'label' => 'User',
                'entity' => 'user',
                'model' => 'App\Models\User',
                'attribute' => 'name',
            ],
            [
                'type' => 'text',
                'name' => 'first_name',
                'label' => 'First Name',
            ],
            [
                'type' => 'text',
                'name' => 'last_name',
                'label' => 'Last Name',
            ],
            [
                'type' => 'text',
                'name' => 'phone',
                'label' => 'Phone',
            ],
            [
                'type' => 'text',
                'name' => 'email',
                'label' => 'Email',
            ],
            [
                'type' => 'text',
                'name' => 'country',
                'label' => 'Country',
            ],
            [
                'type' => 'text',
                'name' => 'city',
                'label' => 'City',
            ],
            [
                'type' => 'text',
                'name' => 'address',
                'label' => 'Address',
            ],
            [
                'type' => 'text',
                'name' => 'comment',
                'label' => 'Comment',
            ],
            [
                'name' => 'status',
                'label' => 'Status',
            ],
            [
                'type' => 'text',
                'name' => 'track_code',
                'label' => 'Track Code',
            ],
            [
                'name' => 'payment_time',
                'label' => 'Track Code',
            ],
            [
                'name' => 'paid_amount',
                'label' => 'Paid Amount',
            ],
            [
                'name' => 'payment_information',
                'label' => 'Payment Information',
            ],
        ]);
    }
}
