<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairRequest; // เปลี่ยนเป็นโมเดลที่คุณสร้างขึ้น
use App\Models\Report;
use Illuminate\Support\Facades\Storage;


class RepairRequestController extends Controller
{
    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลที่ส่งมา
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'vehicleType' => 'required|string',
            'issueDetails' => 'required|string',
            'address' => 'required|string',
            'serviceArea' => 'required|integer',
            'issueImage' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // ตรวจสอบการอัพโหลดรูปภาพ
            'appointmentDate' => 'required|date',
            'appointmentTime' => 'required|date_format:H:i',
        ]);
    
        // ถ้ามีรูปภาพให้บันทึกและอัพโหลด
        $imagePath = null;
        if ($request->hasFile('issueImage')) {
            // เก็บรูปภาพลงในโฟลเดอร์ 'issue_images'
            $imagePath = $request->file('issueImage')->store('issue_images');
        }
    
        // สร้างคำขอซ่อมใหม่
        RepairRequest::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'vehicle_type' => $request->vehicleType,
            'issue_details' => $request->issueDetails,
            'issue_image' => $imagePath, // เก็บเส้นทางของรูปภาพ
            'address' => $request->address,
            'appointment_datetime' => $request->appointmentDate . ' ' . $request->appointmentTime,
            'service_area' => $request->serviceArea, // บันทึกข้อมูลพื้นที่ให้บริการ
            'user_id' => auth()->check() ? auth()->id() : null, // เชื่อมโยงกับผู้ใช้ที่ล็อกอิน ถ้ามี
        ]);
    
        // ส่งข้อความแจ้งซ่อมสำเร็จ
        return back()->with('success', 'คำขอแจ้งซ่อมสำเร็จ!');
    }


    public function index()
    {
        // ดึงข้อมูลการแจ้งซ่อมทั้งหมด
        $repairRequests = Report::with('user')->get(); // รวมข้อมูลผู้ใช้ด้วย

        // ส่งข้อมูลไปยัง view
        return view('repair_requests.index', compact('repairRequests'));
    }


    public function history()
    {
        // Fetch all repair requests
        $repairRequests = Report::with('user')->get(); // Assuming there's a relationship with User model
        
        // Return the view with the repair requests
        return view('report.history', compact('repairRequests'));
    }
}
