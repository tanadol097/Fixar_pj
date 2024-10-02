<?php

namespace App\Http\Controllers;

use App\Models\Employee; // หรือชื่อโมเดลที่ใช้สำหรับช่าง
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // ฟังก์ชันสำหรับแสดงหน้าจองช่าง
    public function showBookTechnician()
    {
        $technicians = Employee::with('serviceType')->get(); // ดึงข้อมูลช่างพร้อมกับประเภทการทำงาน
        return view('booking', compact('technicians'));
    }

    // ฟังก์ชันสำหรับแสดงหน้าแจ้งซ่อม
    public function showRepairRequest()
    {
        return view('report'); // แสดงหน้าฟอร์มแจ้งซ่อม
    }
    
}
