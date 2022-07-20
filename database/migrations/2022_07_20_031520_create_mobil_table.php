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
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->enum('brand',['Toyota','Honda','Daihatsu','Suzuki','Mitsubishi','Kia','Nissan','Datsun','Mazda','Isuzu']);
            $table->enum('biaya',['1 bulan = 500rb','2 bulan = 700rb','3 bulan = 900rb','4 bulan = 1,1 juta','5 bulan = 1,3 juta']);
            $table->string('no_kt');
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
        Schema::dropIfExists('mobil');
    }
};
