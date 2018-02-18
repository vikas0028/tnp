<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('enrollment')->unique();
            $table->string('fname');
            $table->string('mname') ;
            $table->string('lname' );
            $table->string('dob');
            $table->string('gender');
            $table->string('contact');
            $table->string('address');
            $table->string('city');
            $table->string('pincode');
            $table->string('street');
            $table->string('state');
            $table->string('branch');
            $table->string('division');
            $table->integer('sem');
            $table->string('resume');
            $table->text('avatar');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
