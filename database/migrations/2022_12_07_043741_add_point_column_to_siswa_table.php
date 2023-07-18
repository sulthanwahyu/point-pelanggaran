<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->integer('point')->default(100)->required()->after('email');
        });
    }


    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn('point');
        });
    }
};