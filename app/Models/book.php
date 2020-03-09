<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table="book";
    protected $fillable = [
        'First_Name', 'Last_Name','email','check_in_date','check_out_date','room_type','room_quantity','adult'
    ];
}