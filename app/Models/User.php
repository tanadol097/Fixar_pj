<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait, SoftDeletes;

    // ระบุชื่อของตาราง
    protected $table = 'user';

    // เพิ่มตัวแปร fillable
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'password'
    ];
}