<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("OrderID")->nullable();
            $table->unsignedBigInteger("ProductCode")->nullable();
            $table->integer("Qty");
            $table->decimal("PriceEach",19,0);


            $table->foreign("OrderID")->references("id")->on("orders");
            $table->foreign("ProductCode")->references("Code")->on("products");
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
        Schema::dropIfExists('order__products');
    }
}
