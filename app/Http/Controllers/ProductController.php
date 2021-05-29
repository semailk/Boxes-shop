<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Service\ProductFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use View;

class ProductController extends Controller
{
    /**
     * @var Product
     */
    private Product $product;
    /**
     * @var ProductFilter
     */
    private ProductFilter $productFilter;

    public function __construct(Product $product, ProductFilter $productFilter)
    {
        $this->product = $product;
        $this->productFilter = $productFilter;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        if (! isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
        $newProduct = $this->product::orderBy('id', 'DESC')->first();
        $newArrivals = $this->product::orderBy('id', 'DESC')->take(12)->get();
        $randomProducts = Product::all()->random(6);
        $topReadProducts = Review::where('rating', '>=', 4)->take(3)->get();
        $specialOffers = Product::whereNotNull('sale_percentage')->take(3)->get();
        $bestsellers = Product::get()->random(3);
        $products = Product::all();
        return view('black-shop.index', [
            'products' => $products,
            'randomProducts' => $randomProducts,
            'newProduct' => $newProduct,
            'newArrivals' => $newArrivals,
            'topReadProducts' => $topReadProducts,
            'specialOffers' => $specialOffers,
            'bestsellers' => $bestsellers,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getProduct($id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $product = Product::findOrFail($id);
        $relatedProducts = Category::findOrFail($product->category_id)->products;
        $reviews = Review::where('product_id', $id)->paginate(10);
        $reviewsCount = count(Review::where('product_id', $id)->get());
        $averageNumber = Review::where('product_id', $id)->avg('rating');

        if (! \Session::has('latestProducts')) {
            \Session::put('latestProducts', []);
        } elseif (! in_array($id, \Session::get('latestProducts'))) {
            \Session::push('latestProducts', $id);
        }

        return view('black-shop.product', [
            'product' => $product,
            'reviews' => $reviews,
            'reviewsCount' => $reviewsCount,
            'averageNumber' => $averageNumber,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    public function searchProduct(Request $request)
    {

        $products = Product::where('name', 'LIKE', '%' . $request->search . '%')->paginate(50);

        return view('black-shop.shop-list', [
            'products' => $products,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function priceFilter(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $products = $this->productFilter->priceFilter($request);

        return view('black-shop.shop-list', [
            'products' => $products,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function brandFilter(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $products = $this->productFilter->brandFilter($request);

        return view('black-shop.shop-list', [
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        return Attribute::find($id);
    }

    public function getAll(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term) {
            $results = Attribute::where('title', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = Attribute::paginate(10);
        }

        return $results;
    }
}
