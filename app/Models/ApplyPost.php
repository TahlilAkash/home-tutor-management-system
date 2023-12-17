<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyPost extends Model
{
    use HasFactory;
    protected $guarded=[];
    // public function TuitionPost()
    // {
    //     return $this->belongsTo(TuitionPost::class);
    // }
    // public function member()
    // {
    //     return $this->belongsTo(Member::class);
    // }
    // ApplyPost.php
    public function tuitionPost()
    {
        return $this->belongsTo(TuitionPost::class, 'tuition_post_id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'user_id');
    }

    
}
