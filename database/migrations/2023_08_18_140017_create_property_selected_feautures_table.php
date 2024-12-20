<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertySelectedFeauturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_selected_feautures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("property_id")->nullable();
            $table->bigInteger("group_id")->nullable();
            $table->bigInteger("feature_id")->nullable();
            $table->bigInteger("created_by")->nullable();
            $table->bigInteger("updated_by")->nullable();
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
        Schema::dropIfExists('property_selected_feautures');
    }
}
