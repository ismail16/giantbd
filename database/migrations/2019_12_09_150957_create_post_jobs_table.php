<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void

     */
    public function up()
    {
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('department');
            $table->string('details')->nullable();
            $table->string('job_link')->nullable();
            $table->string('job_image')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('post_jobs');
    }
}
