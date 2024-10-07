<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accepted_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('repair_request_id')->constrained()->onDelete('cascade'); // foreign key ที่เชื่อมโยงกับ repair_requests
            $table->foreignId('employee_id')->constrained()->onDelete('cascade'); // foreign key ที่เชื่อมโยงกับ employees
            $table->decimal('price', 10, 2); // ราคาที่ช่างตั้ง
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('accepted_requests');
    }

};
