<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = [
        'bkn_id',
        'name',
        'room_type',
        'Total_member',
       ' time',
       ' start_date',
        'end_date',
        'email',
        'phone_number',
        'image',
        'massage',
    
        
    ];
}
