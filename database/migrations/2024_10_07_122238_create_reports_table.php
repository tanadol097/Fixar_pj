<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('vehicle_type');
            $table->text('issue_details');
            $table->string('service_area');
            $table->string('service_address');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('issue_image')->nullable(); // สำหรับเก็บชื่อไฟล์ภาพ
            $table->enum('status', ['กำลังดำเนินการ', 'ยกเลิก', 'ดำเนินการเสร็จสิ้น'])->default('กำลังดำเนินการ');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
