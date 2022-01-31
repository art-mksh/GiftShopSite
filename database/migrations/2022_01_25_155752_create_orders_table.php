<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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


            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('quantity')->default(1);
            $table->double('sub_total');
            $table->double('delivery_charge');
            $table->integer('status');
            $table->double('total_amount');
            $table->string('address')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('country_id');
            $table->string('country');
            $table->string('post_code');
            $table->string('phone');
            $table->string('email');
            $table->integer('payment_method');
            $table->integer('delivery_method');
            $table->integer('payment_status')->default(0);
            $table->string('shipping_id');
            $table->string('coupon');
            $table->string('additional_adress')->nullable();
            $table->boolean('is_delivered')->default(false);
            $table->timestamps();
            $table->softDeletes();

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
