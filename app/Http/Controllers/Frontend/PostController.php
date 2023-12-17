<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TuitionApply;
use App\Models\TuitionPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // single view method
    public function singlePostview($postID){ 
        // $tpost=TuitionPost::find($postID); 
        $singlepost=TuitionPost::find($postID);
        return view('frontend.pages.single-post-view',compact('singlepost'));
    }
    
    
    
}
