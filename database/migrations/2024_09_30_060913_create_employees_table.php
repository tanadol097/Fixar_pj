<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('service_type'); // กำหนดชนิดของ service_type
            $table->unsignedBigInteger('service_area'); // กำหนดชนิดของ service_area
            $table->timestamps();
            $table->softDeletes(); // สำหรับ soft deletes
            
            // เพิ่ม foreign key constraints หากมี
            // $table->foreign('service_type')->references('id')->on('service_types')->onDelete('cascade');
            // $table->foreign('service_area')->references('id')->on('service_areas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }

};
