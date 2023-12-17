<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuitionPost extends Model
{
    use HasFactory;
    protected $guarded=[
        
    ];
    public function subject()   
    {
        return $this->belongsTo(Subject::class);
    }


    public function classt() 
    {
        return $this->belongsTo(Classt::class);
    
    }

    public function applications()
    {
        return $this->hasMany(ApplyPost::class, 'tuition_post_id');
    }


}
