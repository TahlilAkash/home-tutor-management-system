<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;//while doing authorization

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // admin login started
    public function loginForm(){
        return view('admin.pages.login');
    }

    public function loginPost(Request $request){
        //dd($request);

        $val=Validator::make($request->all(),
        
        [
            'email'=>'required|email', //name property of form
            'password'=>'required|min:6',
        ]);
        //dd($val);
        

        if($val->fails())
        {
            return redirect()->back()->withErrors($val);
        }

        $credentials=$request->except('_token');
        // $credentials=$request->only('email','password');

        // if(auth()->attempt($credentials))
        $login=auth()->attempt($credentials);

        if($login)
        {
            return redirect()->route('admin.dashboard');
            
        }
        return redirect()->back()->withErros('invalid email or password');
    }

    public function logout()
    {

        auth()->logout();
        return redirect()->route('admin.login');
        
    }

    //user authentication strated

    //Member create from admin ................................
    public function list(){
        $users=Member::all(); //           Member  = Model Name
        return view('admin.pages.users.list',compact('users'));
    }

    // member form creation.........................................
    public function createForm(){
        return view('admin.pages.users.create');
    }

    
    public function store(Request $request) //validation--validation fail-- image's work--
    {
        $validate=Validator::make($request->all(),[
            'user_name'=>'required',
            'role'=>'required',
            'user_email'=>'required|email',
            'contact' => 'required|regex:/^01[3-9][0-9]{8}$/|numeric',
            'user_password'=>'required|min:6',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->with('myError',$validate->getMessageBag());
        }

        $fileName=null;// image 
        if($request->hasFile('user_image'))
        {
            $file=$request->file('user_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension(); //filename --date--jpg
           
            $file->storeAs('/uploads',$fileName);

        }

       
        Member::create([ // store into the database column
            'name'=>$request->user_name, //database column name-- request-- form name property
            'role'=>$request->role,
            'image'=>$fileName,
            'email'=>$request->user_email,
            'contact'=>$request->contact,
            'password'=>bcrypt($request->user_password),
        ]);

        return redirect()->back()->with('message','User created successfully.');


    }

    // delete user =member
    // delete method ..........................
    public function delete_user($id)
    {
        // dd($id);
        
        $member=Member::find($id);
        if($member)
        {
              $member->delete();
        }
      
        notify()->success('Member Deleted Successfully.');
        return redirect()->back();
          
    }

    //edit member................................................
    public function edit_user($id)
    {
        $member=Member::find($id);
        // dd($subject);
        return view('admin.pages.users.edit_user',compact('member'));// Member Model is assigned to member variable
            
    }
    // update member info.........................................................
    public function update_user(Request $request,$id)
    {
        $member=Member::find($id);

        if($member)
        {

          $fileName=$member->image;
          if($request->hasFile('user_image'))
          {
              $file=$request->file('user_image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

              $file->storeAs('/uploads',$fileName);

          }

          $member->update([
            'name'=>$request->user_name,
            'email'=>$request->user_email,
            'image'=>$fileName,
            'contact'=>$request->contact,

          ]);

          notify()->success('User updated successfully.');
          return redirect()->route('user.list');
        }
    }

}
