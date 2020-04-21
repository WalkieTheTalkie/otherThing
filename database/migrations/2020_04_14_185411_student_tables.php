<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\StudentTables;

class stuTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StudentTables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('last name');
            $table->boolean('graduated');
            $table->string('major');
            $table->year('realboys');
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
        Schema::dropIfExists('studentTables');
    }
}
