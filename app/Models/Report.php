<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'vehicle_type',
        'issue_details',
        'appointment_datetime', // Ensure this is fillable
        'status', // Ensure this is fillable
        'issueImage' // If you're using this field as well
    ];

      // ความสัมพันธ์กับโมเดล User
      public function user()
      {
          return $this->belongsTo(User::class); // ถ้าหากมีความสัมพันธ์กับ User
      }


}
