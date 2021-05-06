<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientOrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function checkout(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $cart = \Cart::session($_COOKIE['cart_id'])->getContent();
        return view('black-shop.checkout', [
            'cart' => $cart,
        ]);
    }

    public function orderStore(ClientOrderRequest $request)
    {
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->country = $request->country;
        $order->city = $request->city;
        $order->address = $request->address;
        $order->comment = $request->comment;
        $order->payment_type = $request->payment_type;
        $order->delivery_option = $request->delivery_option;
        $order->save();
        $orderProduct = Order::find($order->id);
        $cart = \Cart::session($_COOKIE['cart_id'])->getContent();
        foreach ($cart as $value) {
            $orderProduct->products()->attach($value->id, ['quantity' => $value->quantity, 'price' => $value->price]);
            $quantityEdit = Product::findOrFail($value->id);
            $quantityEdit->stock_quantity = $quantityEdit->stock_quantity - $value->quantity;
            $quantityEdit->save();
        }

        return redirect()->back()->with([
            'success' => 'Заказ добавлен',
        ]);
    }

    public function accountOrderDetails($id)
    {
        $orderDetails = Order::find($id);
        $userInfo = Auth::user();
        return view('black-shop.account-order-details', [
            'orderDetails' => $orderDetails,
            'userInfo' => $userInfo,
        ]);
    }

    public function accountOrder()
    {
        $userOrders = \Auth::user()->orders()->paginate(5);

        return view('black-shop.account-orders', [
            'userOrders' => $userOrders,
        ]);
    }

    public function orderSuccess()
    {
        return view('black-shop.order-success');
    }
}
