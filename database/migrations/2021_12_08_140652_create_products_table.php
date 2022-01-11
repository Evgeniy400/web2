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
            $table->id();
            $table->string('title')->comment('Название еды');
            $table->string('description',3000)->comment('Описание');
            $table->decimal('img')->comment('Картинка');
            $table->string('hunger')->comment('Восполняет голода');
            $table->decimal('price',12,2)->comment('Цена');
            $table->decimal('ingredients',12,2)->comment('Ингридиенты');
            $table->decimal('emaciation',12,2)->comment('Восполняет сытости');
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
