<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Filter;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::factory()->count(10)->create();
        Subscriber::factory()->count(10)->create();
        $brands = Brand::factory()->count(20)->create();
        $categories = Category::factory()->count(10)->create();
        $products = Product::factory()->count(20)->make();

        $filters = Filter::factory()->count(10)->make();
        $filters->each(function ($filter) use ($categories) {
            $filter->category()->associate($categories->random());
            $filter->save();
        });

        $products->each(function ($product) use ($brands, $categories) {
            $product->brand()->associate($brands->random());
            $product->category()->associate($categories->random());
            $product->save();
        });

        $users = User::factory()->count(5)->create();
        $reviews = Review::factory()->count(10)->make();
        $reviews->each(function ($review) use ($products, $users) {
            $review->product()->associate($products->random());
            $review->user()->associate($users->random());
            $review->save();
        });

        $orders = Order::factory()->count(5)->make();
        $orders->each(function ($order) use ($products, $users) {
            $order->user()->associate($users->random());
            $order->save();
            $order->products()->attach($products->random()->id, ['quantity' => 10, 'price' => 8.00]);
        });

        $attributes = Attribute::factory()->count(10)->make();
        $attributes->each(function ($attribute) use ($products, $filters) {
            $attribute->filter()->associate($filters->random()->id);
            $attribute->save();
            $attribute->products()->attach($products->random()->id);
        });
    }
}
