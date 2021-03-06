<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateClaseTenientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clase_tenientes', function (Blueprint $table) {
            $table->foreign('clase_id')->references('id')->on('clases')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('teniente_id')->references('id')->on('tenientes')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clase_tenientes', function (Blueprint $table) {
            //
        });
    }
}
