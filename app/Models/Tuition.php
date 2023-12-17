<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuition extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function subject() //mothod
    {
        return $this->belongsTo(Subject::class);//,'subject_name'
    }

    public function institute() //mothod
    {
        return $this->belongsTo(Institute::class);
    }

    public function classt() //mothod
    {
        return $this->belongsTo(Classt::class);
    
    }
}
