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
        Schema::create('order__details', function (Blueprint $table) {
            $table->id();



            // $table->unsignedBigInteger('order_id');
            // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

            $table->foreignId("order_id")->constrained("orders")->cascadeOnDelete();
            $table->foreignId("product_id")->nullable()->constrained("products")->nullOnDelete();
            $table->unsignedMediumInteger("quantity")->default(1);



            $table->string('product_name');
            $table->decimal('unit_price', 8, 2)->default(0.00);
            $table->decimal('product_total', 8, 2)->default(0.00);
            $table->unique(["order_id" , "product_id"]);
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
        Schema::dropIfExists('order__details');
    }
};
