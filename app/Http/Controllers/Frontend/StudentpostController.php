<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Classt;
use App\Models\Subject;
use App\Models\TuitionPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentpostController extends Controller
{
    public function studentpost(){
        
        $subjects=Subject::all();
        $classts=Classt::all();
        return view('frontend.pages.studentpost',compact('subjects','classts'));
    }

    public function studentpoststore(Request $request)
    {
        // 
        $val = Validator::make($request->all(), [
            // 'email' => 'required',      //name property of the form
            'role'=>'required',
            'class_list' => 'required',
            'subject_name'=> 'required',
            'salary'=>'required|numeric|between:1000,10000',
            'contact'=> 'required|regex:/^01[3-9][0-9]{8}$/|numeric',
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
