<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('orario_di_partenza');
            $table->dropColumn('orario_di_arrivo');
        });
        Schema::table('trains', function (Blueprint $table) {

            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
        });
    }
};
