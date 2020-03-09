<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = '_room_type';
    protected $primaryKey ='room_type_id';
    protected $fillable= ['room_type_id','room_type_name',];
}

 
