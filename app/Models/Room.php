<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    protected $primaryKey ='room_id';
    protected $fillable= ['room_id','room_type_id','room_status_id','room_price'];
}