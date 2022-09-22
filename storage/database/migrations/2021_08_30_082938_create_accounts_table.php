<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('status')->default('inactive');
            $table->integer('balance')->nullable();
            $table->string('investment_plan');
            $table->integer('profit')->nullable();
            $table->string('bitcoin')->nullable();
            $table->string('litecoin')->nullable();
            $table->string('bitcoin_cash')->nullable();
            $table->string('ethtereum')->nullable();
            $table->string('stellar')->nullable();
            $table->string('dash')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
