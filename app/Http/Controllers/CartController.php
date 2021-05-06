<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('black-shop.cart');
    }

    public function addCart(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $quantityDefault = 1;
        if (! isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id);

        if ($request->quantity > $quantityDefault) {
            $quantityDefault = $request->quantity;
        }
        $productQuantity = Product::find($request->id)->stock_quantity;
        $sessionCartQuantitySum = \Cart::session($_COOKIE['cart_id'])->get($request->id);

        if (empty($sessionCartQuantitySum)) {
            \Cart::add([
                'id' => $product->id,
                'name' => 'null',
                'price' => $product->regular_price,
                'quantity' => $quantityDefault,
                'attributes' => [
                    'img' => $product->gallery[0],
                ],
            ]);
        }
        if ($sessionCartQuantitySum->quantity == $productQuantity) {
            return false;
        }
        \Cart::add([
            'id' => $product->id,
            'name' => 'null',
            'price' => $product->regular_price,
            'quantity' => $quantityDefault,
            'attributes' => [
                'img' => $product->gallery[0],
            ],
        ]);
        return response()->json(['data' => \Cart::session($_COOKIE['cart_id'])->getContent()]);
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
        return response()->json(\Cart::getContent());
    }

    public
    function paginateQuantity(Request $request)
    {
        return response()->json(['data' => $request->quantity]);
    }
}
