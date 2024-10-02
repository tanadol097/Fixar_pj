<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcceptedRequest extends Model
{
    protected $fillable = [
        'repair_request_id',
        'employee_id',
        'price',
        'updated_at',
        'created_at',
    ];

    public function repairRequest()
    {
        return $this->belongsTo(RepairRequest::class, 'repair_request_id');
    }
}
