<?php


namespace App\Http\View\Composers;


use App\Models\Brand;
use App\Models\Category;
use Illuminate\View\View;

class BrandComposer
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
        $brands = Brand::all();
        $view->with('brands', $brands);
    }
}
