<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ public function up()
    {
        Schema::table('repair_requests', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable()->after('service_area');

            // ถ้าต้องการให้เป็น foreign key
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('repair_requests', function (Blueprint $table) {
            $table->dropForeign(['employee_id']);
            $table->dropColumn('employee_id');
        });
    }

};
