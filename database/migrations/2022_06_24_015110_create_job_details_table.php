<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->string('post_date');
            $table->string('last_date');
            $table->longtext('job_description');
            $table->longtext('experience');
            $table->string('vacancy');
            $table->longtext('location');
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
        Schema::dropIfExists('job_details');
    }
}
