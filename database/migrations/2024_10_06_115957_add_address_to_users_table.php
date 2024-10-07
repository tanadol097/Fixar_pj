<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
//    /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::table('users', function (Blueprint $table) {
//             $table->string('address')->nullable(); // เพิ่มฟิลด์ address
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::table('users', function (Blueprint $table) {
//             $table->dropColumn('address'); // ลบฟิลด์ address เมื่อต้องย้อนกลับ
//         });
//     }

     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('address')->nullable(); // เพิ่มฟิลด์ address
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address'); // ลบฟิลด์ address เมื่อต้องย้อนกลับ
        });
    }
};
