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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_user_id')->constrained(); //new 
            $table->string('reference');
            $table->string('title');
            // $table->float('price',11,2);
            // $table->float('sellingprice',11,2);
            // $table->integer('account_user_id')->length(11)->nullable();
            // $table->string('link');
            // $table->string('photo')->nullable();
            // $table->string('photo_dir')->nullable();
            $table->integer('statut')->length(11)->nullable();
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
};