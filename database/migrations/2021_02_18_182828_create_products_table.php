<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ProductStockStatus;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->json('name');
            $table->string('slug');
            $table->json('annotation');
            $table->json('description');
            $table->json('tags')->nullable();
            $table->decimal('regular_price', 8, 2);
            $table->decimal('sale_percentage', 8, 2)->nullable();
            $table->decimal('adjusted_price', 8, 2);
            $table->unsignedTinyInteger('stock_status')->default(ProductStockStatus::Available);
            $table->unsignedInteger('stock_quantity')->default(0);
            $table->json('gallery');
            $table->string('sku');
            $table->string('xls_tag')->nullable();

            $table->json('mete_title');
            $table->json('meta_description');
            $table->json('meta_keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
