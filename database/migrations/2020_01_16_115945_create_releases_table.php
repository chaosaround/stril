<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releases', function (Blueprint $table) {
            $table->bigIncrements('id');
	        $table->string('name');
            $table->unsignedBigInteger('releases_status_id')->nullable(true)->default(null);
	        $table->unsignedBigInteger('project_id');
	        $table->timestamps();

	        $table->foreign('releases_status_id')
	              ->references('id')
	              ->on("releases_statuses")
	              ->onDelete('set null');

	        $table->foreign('project_id')
	              ->references('id')
	              ->on("projects")
	              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('releases');
    }
}
