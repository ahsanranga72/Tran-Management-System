<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tran_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->enum('donate_as',['Money','Cloth','Food']);
            $table->string('donate');
            $table->enum('donate_s',['Pending', 'Approved', 'Complete', 'Declined'])->default('Pending');
            $table->timestamps();
            $table->foreign('tran_id')->references('id')->on('trans')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donates');
    }
}
