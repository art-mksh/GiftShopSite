<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //protected $fillable = ['user_id', 'product_id', 'order_id', 'quantity', 'amount', 'price', 'status'];

        Schema::create('carts', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->double('user_id');
            $table->double('product_id');
            $table->double('order_id');
            $table->double('quantity');
            $table->double('price');
            $table->integer('status');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
