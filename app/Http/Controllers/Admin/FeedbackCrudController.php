<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrudAdminRequests\CrudFeedBackRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

class FeedbackCrudController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup(): void
    {
        $this->crud->setModel("App\Models\Feedback");
        $this->crud->setRoute("admin/feedbacks");
        $this->crud->setEntityNameStrings('Обратная связь', 'Обратные связи');
        $this->crud->setValidation(CrudFeedBackRequest::class);
        // -------------------------
        // ------ CRUD COLUMNS ------
        // -------------------------
        $this->crud->addColumns([
            [
                'type' => 'number',
                'name' => 'id',
                'label' => 'Feedback Id',
            ],
            [
                'type' => 'text',
                'name' => 'name',
                'label' => 'Name',
            ],
            [
                'type' => 'email',
                'name' => 'email',
                'label' => 'Email',
            ],
            [
                'type' => 'text',
                'name' => 'subject',
                'label' => 'Subject',
            ],
            [
                'type' => 'text',
                'name' => 'message',
                'label' => 'Message',
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
                'type' => 'email',
                'name' => 'email',
                'label' => 'Email',
            ],
            [
                'type' => 'text',
                'name' => 'subject',
                'label' => 'Subject',
            ],
            [
                'type' => 'text',
                'name' => 'message',
                'label' => 'Message',
            ],
        ]);
    }
}
