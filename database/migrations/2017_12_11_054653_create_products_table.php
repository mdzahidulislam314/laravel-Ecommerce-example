<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('slug')->unique();
            $table->string('details')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('subcat_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('spacial_price')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->unsignedInteger('quantity')->default(10);
            $table->boolean('featured')->default(false);
            $table->boolean('is_enable')->default(false);
            $table->boolean('hot_deal')->default(false);
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
