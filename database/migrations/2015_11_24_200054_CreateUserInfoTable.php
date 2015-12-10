<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_info', function(Blueprint $table) {
            $table->integer('user_id')->primary(); //fk
            $table->string('style'); //fk
            $table->string('lang_one');
            $table->string('lang_two');
            $table->string('lang_three');
            $table->string('csci_262')->nullable();
            $table->string('csci_261')->nullable();
            $table->string('csci_306')->nullable();
            $table->string('csci_406')->nullable();
            $table->integer('team_id')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
            //$table->foreign('user_id')->references('id')->on('users'); // add foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_info');
    }
}
