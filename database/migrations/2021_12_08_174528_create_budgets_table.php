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
            $table->decimal("amount",15);
            $table->string("currency")->default("VND");
            $table->date("start_date");
            $table->string("reminder")->nullable();
            $table->date("end_date");
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('budgets_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('budget_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();
            $table->foreign('budget_id')->references('id')->on('budgets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('budgets_categories', function (Blueprint $table) {
            $table->dropForeign('budgets_categories_budget_id_foreign');
            $table->dropForeign('budgets_categories_category_id_foreign');
        });

        Schema::table('budgets', function (Blueprint $table) {
            $table->dropForeign('budgets_user_id_foreign');
        });

        Schema::dropIfExists('budgets');
        Schema::dropIfExists('budgets_categories');
    }
}
