<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'room';
    protected $fillable = [
        'room_id',
        'name',
        'room_type',
        'Total_member',
       ' room_condition',
       ' bed_count',
        'washroom',
        'image',
       
    
        
    ];
}
