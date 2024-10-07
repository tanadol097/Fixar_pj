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
        Schema::create('repair_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('vehicle_type');
            $table->text('issue_details');
            $table->string('issue_image')->nullable(); // ฟิลด์สำหรับเก็บรูปภาพของปัญหา
            $table->string('address');
            $table->dateTime('appointment_datetime'); // วันที่และเวลาที่นัดหมาย
            $table->unsignedBigInteger('service_area'); // พื้นที่ให้บริการ (ควรเชื่อมโยงกับตารางพื้นที่)
            $table->unsignedBigInteger('user_id')->nullable(); // อ้างอิงไปยัง user id
            $table->timestamps();
            $table->softDeletes(); // ใช้ soft delete เพื่อลบแบบเก็บข้อมูลเดิม

            // กำหนด foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // ลบข้อมูลเมื่อ user ถูกลบ
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('repair_requests');
    }
    
};
