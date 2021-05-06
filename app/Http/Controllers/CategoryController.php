<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getShopList(Request $request, $id)
    {
        $latestProducts = [];
        $category = Category::where('id', $id)->first();
        $brands = Brand::all();
        $products = $category->products()->paginate($request->quantity);
        if (Session::get('latestProducts')) {
            $latestProducts = Product::whereIn('id', collect(array_reverse(Session::get('latestProducts')))->take(5))->get();
        }
        return view('black-shop.shop-list',
            [
                'products' => $products,
                'category' => $category,
                'brands' => $brands,
                'latestProducts' => $latestProducts,
            ]);
    }
}
