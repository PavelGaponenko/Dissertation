<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('type_job_id');
            $table->foreign('type_job_id')->references('id')->on('types_jobs');
            $table->string('order_date');
            $table->string('job_time');
            $table->string('start_date');
            $table->string('finish_date');
            $table->float('coordinate_x');
            $table->string('coordinate_y');
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
        Schema::dropIfExists('orders');
    }
}
