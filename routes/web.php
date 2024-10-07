<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RepairRequestController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BookingController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/admin/main',[AdminController::class,'main']);
Route::get('/admin/repair',[AdminController::class,'index']);

// เส้นทางสำหรับแสดงฟอร์มลงทะเบียน
Route::get('/Employee/register', [EmployeeController::class, 'showRegistrationForm'])->name('employee.register.form');

// เส้นทางสำหรับจัดการการลงทะเบียน
Route::post('/Employee/register', [EmployeeController::class, 'register'])->name('employee.register');

// Route สำหรับหน้าเข้าสู่ระบบ
Route::get('/Employee/login', [EmployeeController::class, 'showLoginForm'])->name('login');
Route::post('/Employee/login', [EmployeeController::class, 'login']); // Route สำหรับเข้าสู่ระบบ
Route::get('/Employee/dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard'); // Route สำหรับแดชบอร์ด

// Route สำหรับหน้า Repair
Route::get('/admin/repair', [AdminController::class, 'showEmployees'])->name('admin.repair');

// แก้ไขพนักงาน
Route::get('/admin/employees/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/employees/{id}', [AdminController::class, 'update'])->name('admin.update');

// ลบพนักงาน
Route::delete('/admin/employees/{id}', [AdminController::class, 'destroy'])->name('admin.delete');


// เส้นทางสำหรับการเข้าสู่ระบบ
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);

// เส้นทางสำหรับการลงทะเบียน
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// เส้นทางสำหรับหน้าแรก
Route::get('/home', function () {
    return view('home'); // ตรวจสอบให้แน่ใจว่าวิวชื่อ 'home' ถูกต้อง
})->name('home');

Route::get('/home', [UserController::class, 'dashboard'])->name('home'); // เพิ่มเส้นทางไปยังแดชบอร์ดของผู้ใช้

// Route สำหรับบริการของเรา
Route::get('/services', function () {
    return view('services'); // เปลี่ยนชื่อ 'services' เป็นชื่อไฟล์ Blade ที่คุณสร้างขึ้นสำหรับหน้า "บริการของเรา"
})->name('services');

// เส้นทางสำหรับออกจากระบบ
// Route::post('/logout', function () {
//     Auth::logout();
//     return redirect('/login'); // เปลี่ยนเส้นทางไปยังหน้าเข้าสู่ระบบ
// })->name('logout');


// Route สำหรับแสดงฟอร์มลงทะเบียน
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
// Route สำหรับจัดการการลงทะเบียน
Route::post('/register', [UserController::class, 'register']);


// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index']);
// });

Route::get('/booking', [ServicesController::class, 'showBookTechnician'])->name('book');
Route::get('/report', [ServicesController::class, 'showRepairRequest'])->name('repair');

// Route สำหรับการจองช่าง
Route::get('/book-technician', [UserController::class, 'showTechnicians'])->name('book-technician');

// Route สำหรับหน้าแสดงรายละเอียดการจองช่าง
Route::get('/bookdetail/{id}', action: [UserController::class, 'bookTechnician'])->name('bookdetail');


// Route สำหรับยืนยันการจองช่าง
Route::post('/confirm-booking', [UserController::class, 'confirmBooking'])->name('confirmBooking');

Route::post('/report', [RepairRequestController::class, 'store'])->name('repair.request.store');

// เส้นทางสำหรับการแจ้งซ่อม
// Route::get('/repair/history', [RepairController::class, 'showRepairHistory'])->name('repair.history');

Route::get('/repair/history', [UserController::class, 'repairHistory'])->name('repair.history');

Route::get('/repair/review/{id}', [UserController::class, 'showReviewForm'])->name('review');
Route::post('/repair/review/{id}', [UserController::class, 'submitReview'])->name('submitReview');

Route::get('/employee/repairRequests', [EmployeeController::class, 'showRepairRequests'])->name('employee.repairRequests');

Route::get('/employee/repairRequests/accept/{id}', [EmployeeController::class, 'acceptRequest'])->name('employee.acceptRequest');

Route::get('/employee/accept/{id}', [EmployeeController::class, 'acceptRequest'])->name('employee.acceptRequest');
Route::post('/employee/confirm', [EmployeeController::class, 'confirmRequest'])->name('employee.confirmRequest');

// Route สำหรับแสดงตารางงาน
Route::get('/employee/table', [EmployeeController::class, 'showAcceptedRequests'])->name('employee.showAcceptedRequests');
Route::get('/employee/accepted-requests', [EmployeeController::class, 'showAcceptedRequests'])->name('employee.acceptedRequests');

// Route สำหรับแสดงประวัติการแจ้งซ่อม
Route::get('/admin/table', [AdminController::class, 'showAcceptedRequests'])->name('admin.repairRequests');




Route::post('/submit-info', [RepairRequestController::class, 'store'])->name('submit-info');


Route::post('/report', [ReportController::class, 'store']);

Route::get('/repair-requests', [RepairRequestController::class, 'index'])->name('repair.requests.index');
// Route::get('/report/history', [ReportController::class, 'history'])->name('report.history');
Route::get('/repair/history', [ReportController::class, 'repairHistory'])->name('repair.history');




