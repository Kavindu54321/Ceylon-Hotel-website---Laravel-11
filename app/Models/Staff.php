<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
   
    use HasFactory;
    protected $table = 'staff';
    protected $fillable = [
    'name',
    'email',
    'join_date',
    'staff_id',
    'phone_number',
    'leaving_time',
    'on_duty_role',
    'image',
    
        
    ];
}
