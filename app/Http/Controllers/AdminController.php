<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\RepairRequest;
use App\Models\AcceptedRequest;

class AdminController extends Controller
{
    // ฟังก์ชันสำหรับแสดงข้อมูลในหน้า Repair
    public function showEmployees()
    {
        $employees = Employee::all(); // ดึงข้อมูลพนักงานทั้งหมด
        return view('admin.repair', compact('employees')); // ส่งข้อมูลไปยัง View
    }

    // ฟังก์ชันแก้ไขพนักงาน
    public function edit($id)
    {
        $employee = Employee::findOrFail($id); // ดึงข้อมูลพนักงานตาม ID
        return view('admin.edit', compact('employee')); // ส่งข้อมูลไปยัง View
    }

    // ฟังก์ชันอัปเดตพนักงาน
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255|unique:employees,email,'.$id,
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all()); // อัปเดตข้อมูล
        return redirect()->route('admin.repair')->with('success', 'อัปเดตข้อมูลพนักงานสำเร็จ');
    }
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete(); // ทำการลบด้วย SoftDeletes
        return redirect()->route('admin.repair')->with('success', 'ลบพนักงานสำเร็จ');
    }
    public function showAcceptedRequests()
    {
        // ดึงข้อมูลการรับงานจากฐานข้อมูล
        $acceptedRequests = AcceptedRequest::with('repairRequest.user')->get();

        // ส่งข้อมูลไปยัง View
        return view('admin.table', compact('acceptedRequests'));
    }

}
