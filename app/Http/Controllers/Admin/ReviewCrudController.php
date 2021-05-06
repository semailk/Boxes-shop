<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrudAdminRequests\CrudReviewRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

class ReviewCrudController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup(): void
    {
        $this->crud->setModel("App\Models\Review");
        $this->crud->setRoute("admin/reviews");
        $this->crud->setEntityNameStrings('Отзыв', 'Отзывы');
        $this->crud->setValidation(CrudReviewRequest::class);

        // -------------------------
        // ------ CRUD COLUMNS ------
        // -------------------------
        $this->crud->addColumns([
            [
                'type' => 'number',
                'name' => 'id',
                'label' => 'Review Id',
            ],
            [
                'type' => 'text',
                'name' => 'name',
                'label' => 'Name',
            ],
            [
                'type' => 'text',
                'name' => 'email',
                'label' => 'Email',
            ],
            [
                'name' => 'rating',
                'label' => 'Rating',
            ],
        ]);

        // -------------------------
        // ------ CRUD FIELDS ------
        // -------------------------

        $this->crud->addFields([
            [
                'type' => 'text',
                'name' => 'name',
                'label' => 'Name',
            ],
            [
                'type' => 'text',
                'name' => 'email',
                'label' => 'Email',
            ],
            [
                'type' => 'number',
                'name' => 'rating',
                'label' => 'Rating',
            ],
            [
                'type' => 'select',
                'name' => 'user_id',
                'model' => 'App\Models\User',
                'entity' => 'user',
                'label' => 'User',
                'attribute' => 'name'
            ],
            [
                'type' => 'select',
                'name' => 'product_id',
                'model' => 'App\Models\Product',
                'entity' => 'product',
                'label' => 'Product',
                'attribute' => 'name'
            ],
            [
                'name'  => 'Review',
                'label' => 'Review',
                'type'  => 'textarea'
            ]
        ]);
    }
}
