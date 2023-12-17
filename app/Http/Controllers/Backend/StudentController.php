<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Classt;
use App\Models\Subject;
use App\Models\TuitionPost;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Studentlist(){
        $Students=TuitionPost::where('role','student')->get();
        //dd($Students);
        return view('admin.pages.student.s_list',compact('Students'));
    }

    
    public function delete($id)
    {
      $stuDelete=TuitionPost::find($id);
      if($stuDelete)
      {
        $stuDelete->delete();
      }

      notify()->success('Student Deleted Successfully.');
      return redirect()->back();
    }


    public function edit($id)
    {
      $stuEdit=TuitionPost::find($id);
      
      $subjects=Subject::all();
      $classts=Classt::all();
    
      return view('admin.pages.student.studentList_Edit',compact('stuEdit','subjects','classts'));

    }

    public function update(Request $request,$id)
    {
        $stuUpdate=TuitionPost::find($id);

        if($stuUpdate)
        {

          $fileName=$stuUpdate->image;
          if($request->hasFile('image'))
          {
              $file=$request->file('image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

              $file->storeAs('/uploads',$fileName);

          }

          $stuUpdate->update([ // database column name-- form name property
            'name'=>$request->name,
            'role'=>$request->role,
            'email'=>$request->email,
            'class_list'=>$request->class_list,
            'subject_name'=>$request->subject_name,
            'salary'=>$request->salary,
            'status'=>$request->status,
            'contact'=>$request->contact,
            'address'=>$request->address,

            'image'=>$fileName
          ]);

          notify()->success('Student List updated successfully.');
          return redirect()->back();
        }
    }
}
