<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Classt;
use Illuminate\Http\Request;

class TclassController extends Controller
{
    // delete
    public function delete($id)
    {
        // dd($id);
        
        $classt=Classt::find($id);
        if($classt)
        {
              $classt->delete();
        }
      
        notify()->success('Class Deleted Successfully.');
        return redirect()->back();
          
    }
    // edit means just view
    public function edit($id)
    {
        $classt=Classt::find($id);
        // dd($subject);
        return view('admin.pages.classt.edit_class',compact('classt'));// Classt Model is assigned to classt variable
            
    }

    //update
    public function update(Request $request,$id){
        $classt=Classt::find($id);

          $classt->update([
                'name'=>$request->class_name,
                'description'=>$request->description
                
          ]);

          notify()->success('class updated successfully.');
          return redirect()->back();  
          
        
        } 

    
    
    public function Class_list(){
        //retrive from database
        $classts=Classt::all();// table name -- model name
        return view('admin.pages.classt.class_list',compact('classts'));
    }

    public function Create_form(){
        return view('admin.pages.classt.class_form');
    }

    public function store_form(Request $request){
        //dd($request->all());
        //model mame
        // storing to the database
        Classt::create([
            'name'=>$request->class_name,  //database column name,request , name property of form
            
            'description'=>$request->class_description
        ]);
        
        notify()->success('Submit Successfully ⚡️');
        return redirect()->route('class.list');   


    }
}
