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
            $table->bigIncrements("Code")->unsigned();
            $table->string("Name",255);
            $table->integer("Scale");
            $table->string("Vendor",255);
            $table->string("PdtDescription",255);
            $table->integer("QtyInStock");
            $table->decimal("BuyPrice",19,2);
            $table->string("MSRP",255);




            $table->timestamps();
            //$table->primary("Code");
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
