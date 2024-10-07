<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait, SoftDeletes;

    // เพิ่มตัวแปร fillable
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'password',
        'service_type', // ถ้านี่คือ ID ของประเภทการทำงาน
        'service_area',
    ];

    // ความสัมพันธ์กับ ServiceType
    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'service_type'); // ชื่อคอลัมน์ที่เก็บ ID ของประเภทการทำงาน
    }

    
}
