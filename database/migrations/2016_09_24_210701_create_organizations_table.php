<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ecosystem_parent_id')->unsigned()->nullable()->default(null);
            $table->foreign('ecosystem_parent_id')->references('id')->on('ecosystem_parents')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->date('date_founded')->nullable();
            $table->date('date_registered')->nullable();
            $table->string('tin_number')->nullable();
            $table->softDeletes();
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
        Schema::drop('organizations');
    }
}
