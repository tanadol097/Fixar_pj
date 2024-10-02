<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairRequest; // เปลี่ยนเป็นโมเดลที่คุณสร้างขึ้น
use Illuminate\Support\Facades\Storage;

class RepairRequestController extends Controller
{
    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลที่ส่งมา
        $request->validate([
            'vehicleType' => 'required|string',
            'issueDetails' => 'required|string',
            'address' => 'required|string',
            // ถ้าต้องการให้รูปภาพเป็นฟิลด์ไม่จำเป็นสามารถใส่เป็น nullable
            'issueImage' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'appointmentDate' => 'required|date',
            'appointmentTime' => 'required|date_format:H:i',
        ]);
    
        // สร้างคำขอซ่อมใหม่
        RepairRequest::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'vehicle_type' => $request->vehicleType,
            'issue_details' => $request->issueDetails,
            'issue_image' => $request->issueImage ? $request->file('issueImage')->store('issue_images') : null,
            'address' => $request->address,
            'appointment_datetime' => $request->appointmentDate . ' ' . $request->appointmentTime,
            'service_area' => $request->serviceArea, // เพิ่มที่นี่ถ้ามี
        ]);
    
        // ส่งข้อความแจ้งซ่อมสำเร็จ
        return back()->with('success', 'คำขอแจ้งซ่อมสำเร็จ!');
    }

}
