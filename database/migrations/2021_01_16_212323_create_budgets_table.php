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
            $table->id();
            $table->string('customer_name', 45)->nullable();
            $table->string('localization', 150)->nullable();
            $table->datetime('forecast_start')->nullable();
            $table->datetime('forecast_finish')->nullable();
            $table->string('total_throttle', 45)->nullable();
            $table->string('total_working', 45)->nullable();
            $table->decimal('value_apart', 5, 2)->nullable();
            $table->decimal('value_amount', 5, 2)->nullable();
            $table->string('pdf_name', 45)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
