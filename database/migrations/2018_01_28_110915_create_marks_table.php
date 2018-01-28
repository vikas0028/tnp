<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enrollment');
            $table->decimal('sem1');
            $table->decimal('sem2');
            $table->decimal('sem3');
            $table->decimal('sem4');
            $table->decimal('sem5');
            $table->decimal('sem6');
            $table->decimal('sem7');
            $table->decimal('sem8');
            $table->decimal('cpi');
            $table->decimal('cgpa');
            $table->decimal('cblocks');
            $table->decimal('tblocks');
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
        Schema::dropIfExists('marks');
    }
}
