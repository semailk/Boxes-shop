<?php


namespace App\Service;


class CartService
{
    const QUANTITY_DEFAULT_ONE = 1;
    public function addProductToBasket($cart_id, $product, $quantity)
    {
        \Cart::session($cart_id)->add([
            'id' => $product->id,
            'name' => 'null',
            'price' => $product->regular_price,
            'quantity' => ($quantity > self::QUANTITY_DEFAULT_ONE) ? $quantity : self::QUANTITY_DEFAULT_ONE,
            'attributes' => [
                'img' => $product->gallery[0],
            ],
        ]);

        return response()->json(['data' => \Cart::session($_COOKIE['cart_id'])->getContent()]);
    }
}
