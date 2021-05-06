<?php


namespace App\Http\View\Composers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CategoryComposer
{
    protected $categories;

    public function __construct(Category $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Bind data to the view.
     *
     * @param \Illuminate\View\View $view
     * @return void
     */
    public function compose(View $view)
    {
        $allCategories = $this->categories->newQuery()->withDepth()->get();
        $view->with('categoriesTree', $allCategories->toTree());
        $view->with('categoriesFlatTree', $allCategories->toFlatTree());

        $latestProducts = [];
        if (Session::get('latestProducts')) {
            $latestProducts = Product::whereIn('id', collect(array_reverse(Session::get('latestProducts')))->take(5))->get();
        }
        $view->with('latestProducts', $latestProducts);
    }
}
