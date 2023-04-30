<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation_order extends Model
{
    use HasFactory;
    protected $table= 'reservation_order';
    protected $primaryKey = 'reservationorder_id';
}
