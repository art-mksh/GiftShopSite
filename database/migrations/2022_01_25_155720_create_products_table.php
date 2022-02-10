<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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



            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->double('parent_item_id')->default(0);
            $table->string('description');
            $table->double('cat_id');
            $table->string('additional_cats_ids');
            $table->double('brand_id')->default(0);
            $table->double('discount')->default(0);
            $table->integer('status');
            $table->string('default_img');
            $table->string('size');
            $table->json('item_settings');
            $table->double('img_gallery_id');
            $table->unsignedInteger('units')->default(0);
            $table->double('stock')->default(0);
            $table->string('is_featured');
            $table->integer('condition');
            $table->double('price');
            $table->string('image');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists('products');
    }
}
