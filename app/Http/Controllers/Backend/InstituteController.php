<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Institute;// model's name
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function Institute_li(){ // retrive from database
        $institutes=Institute::all();
        return view('admin.pages.institute.institute_li', compact('institutes'));
    }

    public function Institute_form(){
        return view('admin.pages.institute.institute_form');
    }
    public function Institute_store(Request $request){
        //dd($request->all());
        Institute::create([
            'name'=>$request->institute_name,//table name, request, form name property
            // 'dept_name'=>$request->department_name,
            'location'=>$request->location
        ]);
            return redirect()->route('institute.list'); 
        
    }
}
