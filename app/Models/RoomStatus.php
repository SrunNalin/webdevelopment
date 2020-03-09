<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomStatus extends Model
{
    protected $table = 'roomstatus';
    protected $primaryKey ='room_status_id';
    protected $fillable= ['room_status_id','room_status_name'];
}