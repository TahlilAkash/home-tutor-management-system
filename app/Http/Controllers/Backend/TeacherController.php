<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Classt;
use App\Models\Subject;
use App\Models\TuitionPost;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function Teacherlist(){
        $TeacherList=TuitionPost::where('role','tutor')->get();
        return view('admin.pages.teacher.teacher_list',compact('TeacherList'));
    }


    
    public function delete($id)
    {
      $teacherDelete=TuitionPost::find($id);
      if($teacherDelete)
      {
        $teacherDelete->delete();
      }

      notify()->success('Teacher Deleted Successfully.');
      return redirect()->back();
    }
    
    public function edit($id)
    {
      $teacherEdit=TuitionPost::find($id);
      // dd($teacherEdit);
      $subjects=Subject::all();
      $classts=Classt::all();
    
      return view('admin.pages.teacher.teachertList_Edit',compact('teacherEdit','subjects','classts'));

    }


    public function update(Request $request,$id)
    {
      // dd($request->all());
        $tUpdate=TuitionPost::find($id);

        if($tUpdate)
        {

          // $fileName=$tUpdate->image;
          // if($request->hasFile('image'))
          // {
          //     $file=$request->file('image');
          //     $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

          //     $file->storeAs('/uploads',$fileName);

          // }

          $tUpdate->update([ // database column name-- form name property

            'status'=>$request->status
            // 'name'=>$request->name,
            // 'role'=>$request->role,
            // 'email'=>$request->email,
            // 'class_list'=>$request->class_list,
            // 'subject_name'=>$request->subject_name,
            // 'salary'=>$request->salary,
            // ,
            // 'contact'=>$request->contact,
            // 'address'=>$request->address,
            // 'image'=>$fileName
          ]);

          notify()->success('Teacher List updated successfully.');
          return redirect()->back();
        }
    }
}
