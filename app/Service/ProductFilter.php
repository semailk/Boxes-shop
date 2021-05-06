<?php

namespace App\Service;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ProductFilter
{
    /**
     * @param $request
     * @return LengthAwarePaginator
     */
    public function priceFilter($request): LengthAwarePaginator
    {
        $productsQuery = Product::query();
        if ($request->filled('price_from') && $request->filled('price_to')) {
            $productsQuery->whereBetween('regular_price', [$request->price_from, $request->price_to])->get();
        }

        return $productsQuery->paginate(12)->withPath("?" . $request->getQueryString());
    }

    /**
     * @param $request
     * @return LengthAwarePaginator
     */
    public function brandFilter($request): LengthAwarePaginator
    {
        return Product::whereIn('brand_id', $request->keys())
            ->paginate(12)
            ->withPath("?" . $request->getQueryString());
    }

    public function returnCategory($request)
    {
        foreach ($request->items() as $item) {
            $products[] = $item->category_id;
        }
        $arrayCategoryId = array_unique($products);

        return Category::whereIn('id', $arrayCategoryId)->get();
    }
}

