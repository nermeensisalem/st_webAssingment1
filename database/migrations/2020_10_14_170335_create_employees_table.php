<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("OfficeCode")->nullable();
            $table->unsignedBigInteger("reportsTo")->nullable();

            $table->string("LastName",255);
            $table->string("FirstName",255);
            $table->string("Extension",255);
            $table->string("Email",255);
            $table->string("JobTitle",100);




            $table->foreign("OfficeCode")->references("Code")->on("offices");
            $table->foreign("reportsTo")->references("id")->on("employees");

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
        Schema::dropIfExists('employees');
    }
}
