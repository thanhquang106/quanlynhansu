<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChamCong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChamCong', function (Blueprint $table) {
            $table->bigIncrements('maChamCong');
            $table->string('MaNV');
            $table->string('HoTen');
            $table->string('GioVaoCa');
            $table->string('GioTanCa');
            

            $table->string('NgayLam');
            $table->rememberToken();
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
        //
    }
}
