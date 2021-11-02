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
            $table->string('name');
            $table->integer('nip')->nullable();
            $table->string('employment')->nullable(); //jabatan
            $table->string('gender')->nullable(); //jenis kelamin
            $table->string('religion')->nullable(); //agama
            $table->string('address')->nullable(); //alamat
            $table->string('place_of_birth')->nullable(); //tempat lahir
            $table->date('date_of_birth')->nullable(); //tanggal lahir
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
