<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // ใช้ User model ที่เราสร้างขึ้น
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use App\Models\RepairRequest;
use App\Models\Review;

class UserController extends Controller
{
    // แสดงฟอร์มเข้าสู่ระบบ
    public function showLoginForm()
    {
        return view('login'); // ชื่อไฟล์ Blade ของฟอร์มเข้าสู่ระบบ
    }

    // แสดงฟอร์มลงทะเบียน
    public function showRegisterForm()
    {
        return view('register'); // ชื่อไฟล์ Blade ของฟอร์มลงทะเบียน
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
    $user = User::where('email', $credentials['email'])->first();

    // ตรวจสอบว่าผู้ใช้มีอยู่และรหัสผ่านถูกต้อง
    if ($user && Hash::check($credentials['password'], $user->password)) {
        // ถ้าข้อมูลถูกต้อง เข้าสู่ระบบ
        Auth::login($user); // เข้าสู่ระบบด้วยผู้ใช้
        return redirect()->route('home'); // เปลี่ยนเส้นทางไปยังหน้าโฮม
    }

    // ถ้าข้อมูลไม่ถูกต้อง
    return back()->withErrors([
        'email' => 'ข้อมูลประจำตัวไม่ถูกต้อง',
        ]);
    }

    // แสดงแดชบอร์ดสำหรับผู้ใช้
    public function dashboard()
    {
        return view('home'); // เปลี่ยนเป็นชื่อไฟล์ View ของแดชบอร์ดผู้ใช้
    }

    // จัดการการลงทะเบียน
    public function register(Request $request)
    {
        // ตรวจสอบข้อมูลที่ส่งมา
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users', // ตรวจสอบในตาราง users
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|string|max:255',
        ]);

        // สร้างผู้ใช้ใหม่
        User::create([ // ใช้ User model
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password), // เข้ารหัสรหัสผ่าน
            'address' => $request->address,
        ]);

        // ส่งค่า success กลับไปยังฟอร์ม
        return back()->with('success', 'ลงทะเบียนสำเร็จ!'); // กลับไปยังหน้าฟอร์ม
    }
    public function showTechnicians()
    {
        $technicians = Employee::all(); // ดึงข้อมูลช่างทั้งหมด
        return view('book-technician', compact('technicians'));
    }

    public function bookTechnician($id)
    {
        $technician = Employee::findOrFail($id); // ดึงข้อมูลช่างตาม ID
        return view('bookdetail', compact('technician'));
    }


    public function confirmBooking(Request $request)
    {
        // จัดการข้อมูลการจองที่นี่
        // เช่น บันทึกข้อมูลการจองลงในฐานข้อมูล
        return redirect()->route('bookdetail', ['id' => $request->technician_id])->with('success', 'จองช่างสำเร็จ!');    }
    public function repairHistory()
    {
        // ดึงข้อมูลการแจ้งซ่อมจากฐานข้อมูล พร้อมชื่อผู้ใช้
        $repairRequests = RepairRequest::with('user')->where('deleted_at', null)->get();

        // ส่งข้อมูลไปยัง view
        return view('repair.history', compact('repairRequests'));
    }
    public function showReviewForm($id)
    {
        $repairRequest = RepairRequest::findOrFail($id);
        return view('repair.review', compact('repairRequest'));
    }
    public function submitReview(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'comments' => 'required|string|max:255',
    ]);

    // Save the review to the database (you may need to create a new model for reviews)
    $review = new Review(); // Assuming you have a Review model
    $review->repair_request_id = $id;
    $review->rating = $request->rating;
    $review->comments = $request->comments;
    $review->save();

    return redirect()->route('repair.history')->with('success', 'ส่งรีวิวสำเร็จ!');
}

    
public function index()
{
    $reports = Report::with('user')->get(); // ดึงข้อมูล reports พร้อมกับ user

    return view('report.index', compact('reports')); // ส่งข้อมูลไปยัง view
}


public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'phone' => 'required|string',
        'address' => 'required|string', // ต้องตรวจสอบว่ามีการตรวจสอบข้อมูลที่อยู่
        // ตรวจสอบฟิลด์อื่น ๆ ...
    ]);

    Report::create($validatedData); // สร้างรายงานใหม่
    return redirect()->back()->with('success', 'ส่งคำขอแจ้งซ่อมสำเร็จ!');
}
}
