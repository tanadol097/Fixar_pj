<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $fillable = ['type_name'];

    // ความสัมพันธ์กับ Employee
    public function employees()
    {
        return $this->hasMany(Employee::class, 'service_type'); // ชื่อคอลัมน์ที่เก็บ ID ของประเภทการทำงาน
    }
}

