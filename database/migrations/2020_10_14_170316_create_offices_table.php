<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id("Code");
            $table->string("City",255);
            $table->string("Phone",255);
            $table->string("Address1",255);
            $table->string("Address2",255);
            $table->string("State",255);
            $table->string("Country",255);
            $table->string("PostalCode");
            $table->string("Territory",255);



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
        Schema::dropIfExists('offices');
    }
}
