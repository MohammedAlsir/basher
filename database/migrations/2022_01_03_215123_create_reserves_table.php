<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->id();
            $table->string('PaticentName')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthDate')->nullable();
            $table->string('address')->nullable();
            $table->string('code')->nullable();
            $table->string('status')->default(0);
            $table->string('status_lab')->default(0);
            $table->string('status_drug')->default(0);

            $table->longText('medicalexaminations')->nullable();
            $table->longText('drugs')->nullable();
            $table->longText('health_status')->nullable();
            $table->longText('resultexaminations')->nullable();





            $table->unsignedInteger('userId');
            $table->foreign('userId')->references('id')->on('users');

            $table->unsignedInteger('doctorId');
            $table->foreign('doctorId')->references('id')->on('doctors');


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
        Schema::dropIfExists('reserves');
    }
}