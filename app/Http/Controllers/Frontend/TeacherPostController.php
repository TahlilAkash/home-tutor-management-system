<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Classt;
use App\Models\Subject;// subject model

use App\Models\TuitionPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherpostController extends Controller
{
    public function teacherpost(){

        $subjects=Subject::all();
        $classts=Classt::all();
        return view('frontend.pages.teacherpost',compact('subjects','classts'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $val = Validator::make($request->all(), [

            // 'email' => 'required',   // name property of the form
            'class_list' => 'required',
            'subject_name'=> 'required',
            'salary'=>'required',
            'contact'=> 'required',
        ]);

        if ($val->fails()) {
            notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $fileName=null;
        if($request->hasFile('image'))
            {
                
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

                $file->storeAs('/uploads',$fileName);

            }
        
            TuitionPost::create([
                'name'=>auth('member')->user()->name, // feild name --request --name property
                'role'=>$request->role,
                // 'email'=>$request->email,
                'email'=>auth('member')->user()->email,
                'user_id'=>auth('member')->user()->id,
              
                'class_list'=>$request->class_list,
                'subject_name'=>$request->subject_name,
                'salary'=>$request->salary,
                'contact'=>$request->contact,
                'address'=>$request->address,
                'status'=>'pending',
                'image'=>$fileName,
                
            ]);
        return redirect()->route('home');
    }


}
