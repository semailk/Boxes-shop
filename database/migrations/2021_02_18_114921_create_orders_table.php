<?php

use App\Enums\OrderStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\DeliveryOption;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->text('comment')->nullable();
            $table->unsignedTinyInteger('status')->default(OrderStatus::Created);
            $table->unsignedTinyInteger('payment_type')->default(DeliveryOption::DeliveryMail);
            $table->string('delivery_option');
            $table->string('track_code')->nullable();
            $table->timestamp('payment_time')->nullable();
            $table->decimal('paid_amount')->nullable();
            $table->json('payment_information')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
