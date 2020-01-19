<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('id');
	        $table->string('name', 1024);
	        $table->nestedSet();
	        $table->unsignedSmallInteger('priority'); // 65535 max
	        $table->unsignedBigInteger('features_status_id')->nullable(true)->default(null);
	        $table->unsignedBigInteger('project_id');
            $table->timestamps();

	        $table->foreign('features_status_id')
	              ->references('id')
	              ->on("features_statuses")
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
        Schema::dropIfExists('features');
    }
}
