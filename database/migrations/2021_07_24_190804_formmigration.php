<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

class Formmigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {

            $table->bigincrements('id')->unique();
            $table->string('client');
            $table->string('matter');
            $table->string('issuer');
            $table->string('language');
            $table->string('curency');


            $table->integer('Invoice_num')->default(rand());
            $table->dateTime('issuing_date')->default(Carbon::now());
            $table->integer('Amount')->default('1');
            $table->integer('Price')->default();
            $table->integer('Discount')->nullable();

            $table->integer('VAT')->default('20');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('form');
    }
}
