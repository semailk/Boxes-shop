<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Service\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        return view('black-shop.cart');
    }

    public function addCart(Request $request)
    {
        $product = Product::findOrFail($request->id);
        if (! isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());

        return $this->cartService->addProductToBasket($_COOKIE['cart_id'], $product, $request->quantity);
    }

    public function deleteCart(Request $request)
    {
        \Cart::session($_COOKIE['cart_id'])->remove($request->id);
        return response()->json(\Cart::getContent());
    }

    public
    function editQuantity(Request $request)
    {
        if (isset($request->add_quantity)) {
            \Cart::session($_COOKIE['cart_id'])->update($request->id, ['quantity' => +1]);
        } elseif (isset($request->delete_quantity)) {
            \Cart::session($_COOKIE['cart_id'])->update($request->id, ['quantity' => -1]);
        }
        return response()->json($request->id);
    }

    public
    function paginateQuantity(Request $request)
    {
        return response()->json(['data' => $request->quantity]);
    }
}
