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
        //change name account_code
        Schema::create('company_codes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('account_id')->constrained();
            $table->integer('statut')->length(11)->default(1);
            $table->integer('current_statut')->length(11);
            $table->integer('postponed')->length(11);
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
        Schema::dropIfExists('company_codes');
    }
};
