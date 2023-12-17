<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TuitionPost;
use Illuminate\Http\Request;

class MyPostController extends Controller
{
    public function myPost($id){
        
        $myPost=TuitionPost::where('user_id',auth()->user()->id)->get();
        
        return view('frontend.pages.Mypost.myPOST',compact('myPost'));

    }
}
