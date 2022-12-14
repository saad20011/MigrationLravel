<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_order_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_order_id')->constrained();
            $table->foreignId('products_size_id')->constrained();
            $table->foreignId('supplier_receipt_id')->constrained()->nullable();
            $table->integer('quantity')->length(11)->default(0);
            $table->integer('price')->length(11)->default(0);
            $table->foreignId('user_id')->constrained();
            $table->integer('status')->length(11);
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
        Schema::dropIfExists('supplier_order_products');
    }
};
