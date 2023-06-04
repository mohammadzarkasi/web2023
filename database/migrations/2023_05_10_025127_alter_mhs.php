<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mhs', function (Blueprint $table) {
            $table->date('tgl_lahir')->nullable();
            $table->string('tempat_lahir', 100)->default('indonesia');
            $table->string('hobi', 100)->default('indonesia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mhs', function (Blueprint $table) {
            //
        });
    }
}
