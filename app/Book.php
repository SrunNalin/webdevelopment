<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table='books';
    protected $fillable = [
        'first_name', 'last_name','email','phone','check_in','check_out','room_type','qaunity','adult','status','days'
    ];
}
