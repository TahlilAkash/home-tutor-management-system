<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    
    // delete method 
    public function delete($id)
    {
        // dd($id);
        
        $subject=Subject::find($id);
        if($subject)
        {
              $subject->delete();
        }
      
        notify()->success('Subject Deleted Successfully.');
        return redirect()->back();
          
    }
    //edit method
    public function edit($id)
    {
        $subject=Subject::find($id);
        // dd($subject);
        return view('admin.pages.subject.edit_sub',compact('subject'));// Subject Model is assigned to subject variable
            
    }

    //update
    public function update(Request $request,$id){
        $subject=Subject::find($id);

          $subject->update([
                'name'=>$request->subject_name,
                'description'=>$request->description
                
          ]);

          notify()->success('subject updated successfully.');
          return redirect()->back();  
          
        
        } 

    
    
    
    //retrive from database
    public function Subject(){
        // $subjects=Subject::all();
        $subjects=Subject::paginate(5);// table name -- model name
        return view('admin.pages.subject.subject_li' ,compact('subjects'));//subjects =table name
    }

    public function Create_form()
    {

        return view('admin.pages.subject.sub_form');
    }
    public function Store(Request $request){
             //    dd($request->all());
            
            $validate=Validator::make($request->all(),[
                //name property of  form 
            'subject_name'=>'required',
            ]);
             // validate before store
            if($validate->fails()){
                return redirect()->back()->withErrors($validate);
            }
           //model mame
           // storing to the database
           Subject::create([
            'name'=>$request->subject_name,  //database column name,request , name property of form
            // 'code'=>$request->code,
            'description'=>$request->description
           ]);
           notify()->success('Submit Successfully ⚡️');
           return redirect()->route('subject.list');   
                        

        
    }
}
