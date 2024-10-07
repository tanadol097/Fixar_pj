<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RepairRequest extends Model
{
   
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'vehicle_type',
        'issue_details',
        'issue_image',
        'address',
        'appointment_datetime',
        'service_area',
        'user_id', // อ้างอิงไปยังผู้ใช้ที่สร้างคำขอ
        'employee_id', // ถ้ามีฟิลด์นี้ด้วย
    ];

    /**
     * ความสัมพันธ์กับโมเดล User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * ความสัมพันธ์กับโมเดล Employee
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
