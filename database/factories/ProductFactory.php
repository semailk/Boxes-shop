<?php

namespace Database\Factories;

use App\Enums\ProductStockStatus;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => ['ru' => $this->faker->name, 'ua' => $this->faker->name],
            'slug' => $this->faker->slug,
            'annotation' => ['ru' => $this->faker->slug, 'ua' => $this->faker->slug],
            'description' => ['ru' => $this->faker->text, 'ua' => $this->faker->text],
            'tags' => [$this->faker->text(100), $this->faker->text(100)],
            'regular_price' => 44.55,
            'sale_percentage' => 44.55,
            'adjusted_price' => 44.55,
            'stock_status' => ProductStockStatus::Available,
            'stock_quantity' => rand(1, 1000),
            'gallery' => [Str::random(20), Str::random(20)],
            'sku' => $this->faker->text(50),
            'xls_tag' => $this->faker->slug,
            'mete_title' => ['ru' => $this->faker->text(20), 'ua' => $this->faker->text(20)],
            'meta_description' => ['ru' => $this->faker->text(100), 'ua' => $this->faker->text(100)],
            'meta_keywords' => ['ru' => $this->faker->text(100), 'ua' => $this->faker->text(100)],
        ];
    }
}





