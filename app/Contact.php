<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    protected $table="contact";
    protected $fillable = [
        'First_Name', 'Last_Name','email','phone','message'
    ];
}
