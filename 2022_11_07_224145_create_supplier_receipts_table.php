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
        Schema::create('supplier_receipts', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10);
            $table->foreignId('supplier_id')->constrained();
            $table->foreignId('account_user_id')->constrained();
            $table->foreignId('supplier_billing_id')->constrained();
            // $table->foreignId('account_id')->constrained();
            $table->integer('status')->length(11)->default(1);
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
        Schema::dropIfExists('receipts');
    }
};
