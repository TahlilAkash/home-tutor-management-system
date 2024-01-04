<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\ApplyPost;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function registration()
    {
        // $tuition_apply=TuitionApply::all();
        return view('frontend.pages.registration'); //,compact('tuition_apply')
        
    }
    
    // profile view
    public function profile()
    {
        $applicentDetail=ApplyPost::with('TuitionPost')->where('user_id',auth('member')->user()->id)->where('status','accepted')->get();
        // dd($applicentDetail->all());
        return view('frontend.pages.profile',compact('applicentDetail'));

        // $apply_posts=ApplyPost::where('status','accepted')->where('user_id',auth('member')->user()->id)->get();
        // return view('frontend.pages.profile',compact('apply_posts'));
    }


    // store memeber data to db web registration
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email'=>'required|email',
            'role'=>'required',
            'password'=>'required|min:6',

         ]);

         if($validate->fails())
         {
            // notify()->success('Profile updated successfully.');

            notify()->error($validate->getMessageBag());
            return redirect()->back();
         }
        // dd($request->all());
        $fileName=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads',$fileName);

        }
        // to create memeber when registration 
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'image'=>$fileName,
            // 'contact'=>$request->contact,
            'password' => bcrypt($request->password),
             
        ]);

        notify()->success('User Registration successful.');
        return redirect()->route('member.do.login');
    }


// log in
    public function login()
    {
        return view('frontend.pages.login');
    }

    public function doLogin(Request $request)
    {   
        // dd($request->all());

        $val = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($val->fails()) {
            notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $credentials = $request->except('_token');
        // dd($credentials);
        if (auth()->guard('member')->attempt($credentials)) {
            notify()->success('You have login successfully');    
            return redirect()->route('home');
            // return redirect()->route('home');
        }

        notify()->error('Invalid Credentials.');
            return redirect()->back();

    }

    public function logout()
    {
        auth('member')->logout();
        notify()->success('Logout Success.');    
        return redirect()->route('home');
    }


    // member profile edit
    public function profileEdit ($id){
        $memprofileVar=Member::find($id);
        return view('frontend.pages.ProfileEdit.editmemberofile',compact('memprofileVar'));
    }
    
    // member profile update
    public function profileUpdate(Request $request, $id){
        
        $memprofileVar=Member::find($id);
        if($memprofileVar)
        {

            $fileName=$memprofileVar->image;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
      
                $file->storeAs('/uploads',$fileName);
      
            }
                $memprofileVar->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    
                    'password' => bcrypt($request->password),
                    'image'=>$fileName

                ]);
                notify()->success('Profile Updated Sucessfully.');
                return redirect()->route('profile.view');
        }

    }
}
