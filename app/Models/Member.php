<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Member extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];
    protected $hidden=[
        'password'
    ];
    
}
