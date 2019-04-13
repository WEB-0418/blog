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
            $table->bigIncrements('id');
            $table->string('articule')->nullable(false)->unique();
            $table->string('name')->nullable(false);
            $table->decimal('price', 8, 2)->default(0.00);
            $table->boolean('is_present');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('season_id');
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('producer_id');
            $table->unsignedBigInteger('category_id');
            $table->char('size', 3);
            $table->text('description');
            $table->boolean('in_promotion');
            $table->boolean('is_hit');
            $table->timestamps();

            $table->foreign('color_id')
                ->references('id')
                ->on('colors');

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands');

            $table->foreign('season_id')
                ->references('id')
                ->on('seasons');

            $table->foreign('material_id')
                ->references('id')
                ->on('materials');

            $table->foreign('producer_id')
                ->references('id')
                ->on('producers');

            $table->foreign('category_id')
                ->references('id')
                ->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['producer_id']);
            $table->dropForeign(['material_id']);
            $table->dropForeign(['season_id']);
            $table->dropForeign(['brand_id']);
            $table->dropForeign(['color_id']);
        });

        Schema::dropIfExists('products');
    }
}
