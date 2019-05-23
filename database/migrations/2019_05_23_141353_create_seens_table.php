<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('notify_id')->nullable();;
            $table->integer('user_id')->unsigned()->index();
            $table->enum('status', [1,0])->default(0);
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
        Schema::dropIfExists('seens');
    }
}
