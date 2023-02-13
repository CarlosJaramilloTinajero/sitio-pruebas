<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Relaciones de la tabla products
        Schema::table('products', function (Blueprint $table) {
            // Creacion de llaver foraneas
            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onDelete('cascade');

            $table->foreign('subcategory_id')
                ->references('id')->on('subcategories')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
        });

        // Relaciones de la tabla subcategories
        Schema::table('subcategories', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
        });

        // Relaciones de la tabla product_suppliers
        Schema::table('product_suppliers', function (Blueprint $table) {
            $table->foreign('supplier_id')
                ->references('id')->on('suppliers')
                ->onDelete('cascade');

            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
        });

        // Relaciones de la tabla warehouses
        Schema::table('warehouses', function (Blueprint $table) {

            $table->foreign('supplier_id')
                ->references('id')->on('suppliers')
                ->onDelete('cascade');
        });

        // Relaciones de la tabla inventories
        Schema::table('inventories', function (Blueprint $table) {

            $table->foreign('product_supplier_id')
                ->references('id')->on('product_suppliers')
                ->onDelete('cascade');

            $table->foreign('warehouse_id')
                ->references('id')->on('warehouses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
