<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->integer("CheckNum")->primary();
            $table->unsignedBigInteger("CustomerID")->nullable();
            $table->dateTime("PaymentDate");
            $table->decimal("Amount",19,0);
            $table->timestamps();

           // $table->primary("CheckNum");

            $table->foreign("CustomerID")->references("id")->on("customers");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
