<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyPost;
use App\Models\Classt;
use App\Models\Subject;
use App\Models\TuitionPost;
use Illuminate\Http\Request;

class ApplyPostController extends Controller
{
    // apply tuition post method
    public function applyNow($postId){ 
        //dd($id); 
        ApplyPost::create([
            'user_id'=>auth('member')->user()->id, 
           
            'tuition_post_id'=>$postId, 
            
           ]);
           
            notify()->success(' Applied ⚡️');
            return redirect()->back();   
    }

    public function cancelApply($applypost_id)
    {

        $apply=ApplyPost::find($applypost_id);
        if($apply)
        {
            $apply->update([
                'status'=>'cancelled'
            ]);
        }

        notify()->success('Request Cancelled');
       return redirect()->back();
    }
    public function acceptApply($applypost_id)
    {

        $apply=ApplyPost::find($applypost_id);
        if($apply)
        {
            $apply->update([
                'status'=>'accepted'
            ]);
        }

        notify()->success('Request Accepted');
       return redirect()->back();
    }

    // my post ...........................
    public function myPost($id)
    {
        $myPost=TuitionPost::where('user_id',$id)->get();
        // dd($myPost->all());
        return view('frontend.pages.mypost',compact('myPost'));
    }
    // request on my post..........................................
    public function request($id)
    {
        
        $request = ApplyPost::with(['tuitionPost', 'member'])->where('tuition_post_id', $id)->get();
        return view('frontend.pages.request', compact('request'));
    }

    // I applied on the post  (pendig post)........................
    public function applicent($id)
    {
        $applicentDetail=ApplyPost::with('tuitionPost')->where('user_id',$id)->where('status','pending')->get();
        // dd($applicentDetail->all());
        return view('frontend.pages.applicent',compact('applicentDetail'));
    }

    // Edit My post ...................................................................
    public function edit($id)
    {
      $postEdit=TuitionPost::find($id);
      
      $subjects=Subject::all();
      $classts=Classt::all();
    
      return view('frontend.pages.updatePost',compact('postEdit','subjects','classts'));

    }

    public function update(Request $request,$id)
    {
        $postUpdate=TuitionPost::find($id);

        if($postUpdate)
        {

          $fileName=$postUpdate->image;
          if($request->hasFile('image'))
          {
              $file=$request->file('image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

              $file->storeAs('/uploads',$fileName);

          }

          $postUpdate->update([
            'name'=>$postUpdate->name,
            'role'=>$postUpdate->role,
            // 'email'=>$request->email,
            'class_list'=>$request->class_list,
            'subject_name'=>$request->subject_name,
            'salary'=>$request->salary,
            'status'=>$postUpdate->status,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'image'=>$fileName
          ]);

          notify()->success('Your post updated successfully.');
          return redirect()->back();
        }
    }
}
