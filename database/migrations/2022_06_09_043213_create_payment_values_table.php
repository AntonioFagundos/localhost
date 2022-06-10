<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pay')->constrained('payments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_provider')->constrained('providers')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_values');
    }
}
