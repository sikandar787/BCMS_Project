<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuggageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luggage', function (Blueprint $table) {
            $table->id();
            $table->string('traveller_name');
            $table->integer('traveller_passport_number');
            $table->string('luggage_serial_number');
            $table->integer('number_of_luggage');
            $table->string('luggage_type');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luggage');
    }
}
