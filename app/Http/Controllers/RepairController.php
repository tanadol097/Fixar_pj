<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairRequest; // นำเข้ารูปแบบโมเดลของคุณ
use Illuminate\Support\Facades\Auth;

class RepairController extends Controller
{
    // public function showRepairHistory()
    // {
    //     // ตรวจสอบว่าผู้ใช้ลงชื่อเข้าใช้หรือไม่
    //     if (!Auth::check()) {
    //         return redirect('/login'); // ถ้าไม่ลงชื่อ ให้เปลี่ยนเส้นทางไปยังหน้าเข้าสู่ระบบ
    //     }

    //     // ดึงคำขอการแจ้งซ่อมสำหรับผู้ใช้ที่ลงชื่อเข้าใช้
    //     $repairRequests = RepairRequest::where('user_id', Auth::id())->get();

    //     // ส่งข้อมูลไปยัง view
    //     return view('repair.history', compact('repairRequests'));
    // }
}
