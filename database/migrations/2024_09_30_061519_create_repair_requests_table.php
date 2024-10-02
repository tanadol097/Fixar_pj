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
            $table->string('issue_image')->nullable();
            $table->string('address');
            $table->dateTime('appointment_datetime');
            $table->unsignedBigInteger('service_area');
            $table->unsignedBigInteger('user_id'); // เพิ่ม user_id ที่เชื่อมโยงกับตาราง user
            $table->timestamps();
            $table->softDeletes();
            
            $table->unsignedBigInteger('user_id')->nullable(); // ฟิลด์นี้จะเก็บ user_id

            // กำหนด foreign key
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('repair_requests');
    }
    
};
