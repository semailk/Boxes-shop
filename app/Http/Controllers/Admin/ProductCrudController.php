<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CrudAdminRequests\CrudProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

class ProductCrudController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup(): void
    {
        $this->crud->setModel("App\Models\Product");
        $this->crud->setRoute("admin/products");
        $this->crud->setEntityNameStrings('Продукт', 'Продукты');
        $this->crud->setValidation(CrudProductRequest::class);
        $this->crud->addField(
            [  // Select
                'label'     => "Category",
                'type'      => 'select',
                'name'      => 'category_id', // the db column for the foreign key

                // optional
                // 'entity' should point to the method that defines the relationship in your Model
                // defining entity will make Backpack guess 'model' and 'attribute'
                'entity'    => 'category',

                // optional - manually specify the related model and attribute
                'model'     => "App\Models\Category", // related model
                'attribute' => 'name', // foreign key attribute that is shown to user

                // optional - force the related options to be a custom query, instead of all();
                'options'   => (function ($query) {
                    return $query->get();
                }), //  you can use this to filter the results show in the select
            ],
        );

        $this->crud->addField(
            [  // Select
                'label'     => "Category",
                'type'      => 'select',
                'name'      => 'brand_id', // the db column for the foreign key

                // optional
                // 'entity' should point to the method that defines the relationship in your Model
                // defining entity will make Backpack guess 'model' and 'attribute'
                'entity'    => 'brand',

                // optional - manually specify the related model and attribute
                'model'     => "App\Models\Brand", // related model
                'attribute' => 'name', // foreign key attribute that is shown to user

                // optional - force the related options to be a custom query, instead of all();
                'options'   => (function ($query) {
                    return $query->get();
                }), //  you can use this to filter the results show in the select
            ],
        );
//        $this->crud->addField([  // Select
//            'label' => "Brand",
//            'type' => 'select',
//            'name' => 'brand_id', // the db column for the foreign key
//            'entity' => 'brand',
//            'model' => "App\Models\Brand",
//            'attribute' => 'name',
//            'options' => (function ($query) {
//                return $query->get();
//            }),
//        ],
//        );

        $this->crud->addField(
            [   // SelectMultiple = n-n relationship (with pivot table)
                'label'     => "Attributes",
                'type'      => 'select2_multiple',
                'name'      => 'attributes', // the method that defines the relationship in your Model

                // optional
                'entity'    => 'attributes', // the method that defines the relationship in your Model
                'model'     => "App\Models\Attribute", // foreign key model
                'attribute' => 'title', // foreign key attribute that is shown to user
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?

                // also optional
                'options'   => (function ($query) {
                    return $query->get();
                }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
        ]);

        $this->crud->setColumns([
            [
                'type' => 'text',
                'name' => 'name',
                'label' => 'Name',
            ],
            [
                'type' => 'text',
                'name' => 'slug',
                'label' => 'Slug',
            ],
            [
                'type' => 'text',
                'name' => 'annotation',
                'label' => 'Annotation',
            ],
            [
                'type' => 'text',
                'name' => 'description',
                'label' => 'Description',
            ],
            [
                'name' => 'tags',
                'label' => 'Tags',
            ],
            [
                'name' => 'regular_price',
                'label' => 'Regular Price',
            ],
            [
                'name' => 'sale_percentage',
                'label' => 'Sale Percentage',
            ],
            [
                'name' => 'adjusted_price',
                'label' => 'Adjusted Price',
            ],
            [
                'name' => 'stock_status',
                'label' => 'Stock Status',
            ],
            [
                'name' => 'stock_quantity',
                'label' => 'Stock Quantity'
            ],
            [
                'name' => 'gallery',
                'label' => 'Gallery',
            ],
            [
                'name' => 'sku',
                'label' => 'Sku',
            ],
            [
                'name' => 'xls_tag',
                'label' => 'Xls Tag'
            ],
            [
                'name' => 'mete_title',
                'label' => 'Mete Title'
            ],
            [
                'name' => 'meta_description',
                'label' => 'Meta Description'
            ],
            [
                'name' => 'meta_keywords',
                'label' => 'Meta Keywords'
            ]
        ]);

        $this->crud->addFields([
            [
                'type' => 'text',
                'name' => 'name',
                'label' => 'Name',
            ],
            [
                'type' => 'text',
                'name' => 'slug',
                'label' => 'Slug',
            ],
            [
                'type' => 'text',
                'name' => 'annotation',
                'label' => 'Annotation',
            ],
            [
                'type' => 'text',
                'name' => 'description',
                'label' => 'Description',
            ],
            [
                'name' => 'tags',
                'label' => 'Tags',
            ],
            [
                'name' => 'regular_price',
                'label' => 'Regular Price',
            ],
            [
                'name' => 'sale_percentage',
                'label' => 'Sale Percentage',
            ],
            [
                'name' => 'adjusted_price',
                'label' => 'Adjusted Price',
            ],
            [
                'name' => 'stock_status',
                'label' => 'Stock Status',
            ],
            [
                'name' => 'stock_quantity',
                'label' => 'Stock Quantity'
            ],
            [
                'name' => 'gallery',
                'label' => 'Изображение',
                'type' => 'upload_multiple',
                'upload' => true,
                'disk' => 'public',
                'hint' => 'Some hint text . ',
//                'fake' => true
            ],
            [
                'name' => 'sku',
                'label' => 'Sku',
            ],
            [
                'name' => 'xls_tag',
                'label' => 'Xls Tag'
            ],
            [
                'name' => 'mete_title',
                'label' => 'Mete Title'
            ],
            [
                'name' => 'meta_description',
                'label' => 'Meta Description'
            ],
            [
                'name' => 'meta_keywords',
                'label' => 'Meta Keywords'
            ]
        ]);
    }

}
