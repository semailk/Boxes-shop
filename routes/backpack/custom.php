<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('attributes','AttributeCrudController');
    Route::crud('brands','BrandCrudController');
    Route::crud('categories','CategoryCrudController');
    Route::crud('filters','FilterCrudController');
    Route::crud('orders','OrderCrudController');
    Route::crud('products','ProductCrudController');
    Route::crud('reviews','ReviewCrudController');
    Route::crud('subscribers','SubscriberCrudController');
    Route::crud('feedbacks','FeedbackCrudController');
}); // this should be the absolute last line of this file
