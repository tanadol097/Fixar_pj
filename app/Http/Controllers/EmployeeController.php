<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash; // เพิ่มการใช้งานนี้
use Illuminate\Support\Facades\Auth;
use App\Models\RepairRequest;
use App\Models\AcceptedRequest; // อย่าลืม import model ใหม่ที่สร้างขึ้น


class EmployeeController extends Controller
{
     // แสดงฟอร์มเข้าสู่ระบบ
    public function showLoginForm()
    {
        return view('employee.login'); // ชื่อไฟล์ View ของคุณ
    }

    // จัดการการเข้าสู่ระบบ
    public function login(Request $request)
    {
        // ตรวจสอบข้อมูลที่ส่งมา
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    
        // ตรวจสอบข้อมูลในฐานข้อมูล
        $employee = Employee::where('email', $credentials['email'])->first();
    
        // ตรวจสอบว่าผู้ใช้มีอยู่และรหัสผ่านถูกต้อง
        if ($employee && password_verify($credentials['password'], $employee->password)) {
            // ถ้าข้อมูลถูกต้อง เข้าสู่ระบบ
            Auth::login($employee); // เข้าสู่ระบบด้วยผู้ใช้
            return redirect()->route('employee.dashboard'); // เปลี่ยนเส้นทางไปยังแดชบอร์ดพนักงาน
        }
    
        // ถ้าข้อมูลไม่ถูกต้อง
        return back()->withErrors([
            'email' => 'ข้อมูลประจำตัวไม่ถูกต้อง',
        ]);
    }

    // แสดงแดชบอร์ดสำหรับพนักงาน
    public function dashboard()
    {
        return view('employee.dashboard'); // ชื่อไฟล์ View ของแดชบอร์ด
    }
    public function showRegistrationForm()
    {
        return view('Employee.register'); // เปลี่ยนเป็นชื่อ view ของคุณ
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:10',
            'email' => 'required|email|unique:workers,email',
            'password' => 'required|string|min:8', // ตรวจสอบความยาวรหัสผ่าน
            'serviceType' => 'required|string',
            'serviceArea' => 'required|string',
        ]);

        Employee::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password), // เข้ารหัสรหัสผ่าน
            'service_type' => $request->serviceType,
            'service_area' => $request->serviceArea,
        ]);

        return redirect()->back()->with('success', 'ลงทะเบียนสำเร็จ!');
    }
    public function showRepairRequests()
    {
        // Fetch all repair requests that are not deleted
        $repairRequests = RepairRequest::with('user') // assuming you have a user relationship defined
            ->whereNull('deleted_at') // to avoid soft-deleted requests
            ->get();

        // Return the view with the repair requests
        return view('employee.repairRequests', compact('repairRequests'));
    }
    
        public function acceptRequest($id)
        {
        // ดึงข้อมูลการแจ้งซ่อม
        $repairRequest = RepairRequest::with('user')->findOrFail($id);

        // ส่งข้อมูลไปยัง view
        return view('employee.accept_request', compact('repairRequest'));
        }

        // ฟังก์ชันใน EmployeeController สำหรับยืนยันการรับงาน
    public function confirmRequest(Request $request)
    {
        // สร้างข้อมูลการรับงานใหม่
        AcceptedRequest::create([
            'repair_request_id' => $request->repair_request_id,
            'employee_id' => Auth::id(), // ID ของช่าง
            'price' => $request->price,
        ]);

        // อัปเดตสถานะของการแจ้งซ่อม
        RepairRequest::where('id', $request->repair_request_id)
            ->update(['status' => 'accepted']);

        // เปลี่ยนเส้นทางไปยังหน้าตารางงาน
        return redirect()->route('employee.showAcceptedRequests');
    }
    
        public function showAcceptedRequests()
    {
        // ดึงข้อมูลที่ได้รับการยืนยันจากฐานข้อมูล
        $acceptedRequests = AcceptedRequest::with('repairRequest.user')->get();

        // ส่งข้อมูลไปยัง View
        return view('employee.table', compact('acceptedRequests'));
    }

    
}
