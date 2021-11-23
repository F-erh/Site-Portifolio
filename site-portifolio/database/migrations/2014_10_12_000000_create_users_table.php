<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('teste')){
            Schema::create('teste', function (Blueprint $table)
    {
                $table->increments('id');
                $table->string('tipo', 50);
                $table->string('modelo', 15)->nullable();
                $table->string('fabricante', 30)->nullable();
                $table->timestamps();
                $table->index(['tipo','modelo']);
            });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
/*    public function down()
    {
        Schema::dropIfExists('users');
    }*/
}
}
