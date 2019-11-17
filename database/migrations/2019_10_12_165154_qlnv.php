<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Qlnv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('qlnv', function (Blueprint $table) {
            $table->bigIncrements('MaNV');
            $table->string('HoTen');
            $table->string('gmail');
            $table->string('SoDienThoai');
            $table->string('facebook');
            $table->string('ngaySinh');
            $table->string('gioiTinh');
            $table->string('SoCMND');
            $table->string('DiaChi');
            $table->string('viTriLam');
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
        Schema::dropIfExists('qlnv');
    }
}
