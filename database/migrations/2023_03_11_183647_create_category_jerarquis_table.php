<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryJerarquisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_jerarquis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('triger')->nullable();
            $table->string('trigerBD')->nullable();
            $table->unsignedBigInteger('relation_id')->nullable();
            $table->integer('show_products');
            $table->string('busqueda');
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
        Schema::dropIfExists('category_jerarquis');
    }
}
