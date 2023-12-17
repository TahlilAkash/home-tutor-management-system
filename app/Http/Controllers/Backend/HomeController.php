<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Classt;
use App\Models\Member;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        
        // return view('admin.master');

        // count the student number in  dashboard
        $countStudent=Member::where('role','student')->get();
        $countTeacher=Member::where('role','teacher')->get();

        $countSubject=Subject::all();
        $countClass=Classt::all();
        return view('admin.Dashboard.thedashboard',compact('countStudent','countTeacher','countSubject','countClass'));// while admin log in to the sytem this is base route
    }

    
}
