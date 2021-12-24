<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("title");
            $table->decimal("amount");
            $table->string("currency")->default("VND");
            $table->string("recurrence");
            $table->date("start_date");
            $table->string("reminder");
            $table->date("end_date");
        });

        // Schema::table('categories', function (Blueprint $table) {
        //     $table->foreign('budget_id')->references('id')->on('budgets')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('categories', function (Blueprint $table) {
        //     $table->dropForeign('categories_budget_id_foreign');
        // });
        Schema::dropIfExists('budgets');
    }
}
