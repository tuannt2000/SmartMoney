<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
        });
        Schema::create('label_transactions', function (Blueprint $table) {
            $table->integer('label_id')->unsigned();
            $table->integer('transaction_id')->unsigned();
            $table->timestamps();
            $table->primary(['label_id','transaction_id']);
            $table->foreign('label_id')->references('id')->on('labels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('label_transactions', function (Blueprint $table) {
            $table->dropForeign('label_transactions_label_id_foreign');
            $table->dropForeign('label_transactions_transaction_id_foreign');
        });
        Schema::dropIfExists('labels');
        Schema::dropIfExists('label_transactions');
    }
}
